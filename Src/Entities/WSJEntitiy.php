<?php

/**
 * @namespace 
 **/
namespace entity;

use \Grabber as Grabber

/**
 * entity model to map the response contains public fields to map our response
 **/
class WSJentity implements EntityInterface{

		public $HTMLfile;

   /**
     * Builds the Request
     *
     */
     protected function buildRequest($base_url,$section, $page, $date){
     	
     	//convert Date for WSJ
     	$date_flat = date("Ymd",$date);
     	//Build Request
     	$requestURL = $base.'/'.$section.'-'.$page.'-'.$date_flat'.html';
     	
     	$this->requestURL = $requestURL;
     	$this->requestDate = $date;  
		return $requestURL;
     }
	
   	/**
     * 
     *
     */
     public function getRemoteData($requestURL, $requestDate){
	     if (isset($this->requestURL){
	 		$requestURL = $this->requestURL;
	 	}
	 	
	 	 if (isset($this->requestDate){
	 		$requestDate = $this->requestDate;
	 	}
	 	
	 	$remoteRequest = new \Grabber\HTMLgrabber();
		$this->HTMLfile = $remoteRequest->getPage($requestURL, $requestDate)
		
	}//END function getRemoteData()
     
    /**
     * 
     * 
     */
     public function parceData($HTMLfile){
     	if (isset($this->HTMLfile){
	     	$HTMLfile = $this->HTMLfile;
	     }
     
     }
     
    /**
     * 
     *
     */
     public function selectLocalData();
     
    /**
     * 
     *
     */
     public function insertLocalData();
     
    /**
     * 
     *
     */
     public function updateLocalData();
     
     
     
}//END Interface EntityInterface