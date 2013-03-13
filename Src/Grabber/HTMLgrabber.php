<?php

namespace Grabber;

require_once '../../Bootstrap.php';

use Guzzle\Http\Client;

class HTMLgrabber(){
	
		protected $requestURL;
		protected $requestDate;
		
		// Create a client and provide a base URL
		function getPage($requestURL, $requestDate){
	     	
	     	if (isset($this->requestURL){
	     		$requestURL = $this->requestURL;
	     	}
	     	
	     	 if (isset($this->requestDate){
	     		$requestDate = $this->requestDate;
	     	}
	     	
	     	//New Guzzler 
			$client = new Client($requestURL);
		
			//Set User Agent
			$client->setUserAgent('Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25');
			
			// Create a request with basic Auth
			$request = $client->get();
			
			try {
				// Send the request and get the response
				$response = $request->send();
			} catch(\Guzzle\BadResponseException $e) {
			
				echo 'Error Getting Webpage: '$e->getResponse();
			}
			
			file_put_contents('../../DataFilesTmp/'.date("Y-m-d",$requestDate).'_WSJ-snapshot.html',$response->getBody());
			
			return $response->getBody()
		}//END function getPage
}


?>