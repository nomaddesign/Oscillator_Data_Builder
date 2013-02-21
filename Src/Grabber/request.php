<?php

require_once '../../Bootstrap.php';

use Guzzle\Http\Client;


// Create a client and provide a base URL
$client = new Client('http://online.wsj.com/mdc/public/page/2_3021-tradingdiary2-20130220.html');

//Set User Agent
$client->setUserAgent('Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25');

// Create a request with basic Auth
$request = $client->get();

// Send the request and get the response
$response = $request->send();
file_put_contents('../../DataFilesTmp/2013-02-20_WSJ-snapshot.html',$response->getBody());
\var_dump($response);




?>