<?php

use Sunra\PhpSimple;

echo 'hi';

// Composer Autolading 
require_once '../../Bootstrap.php';

//Simple DOm is not Autoloading - Load manaully
require_once '../../Vendors/sunra/php-simple-html-dom-parser/Src/Sunra/PhpSimple/HtmlDomParser.php';

/* 
* Function Tests HTML for presese of Error text 
*/
function isResultPageError($file, $element, $attribute, $errorText){
	
	//Call PHP SimpleDom Class to process file parse HTML DOM
	$html = file_get_html($file);
	
	// Check for 'Error Element' if not present return False
	if ($html->getElementById($element)){
		$text = $html->getElementById($element)->GetAttribute($attribute);
	} else {return false;}
	
	//Check Error Element for Error Text
	if ($errorText == $text){return true;} 
	else {return false;}
	
}//End function resultPageError()

//Intiate Lazy Test
if ($_GET['test']=='y'){

	$errorText = '<!-- no source provided for MDCTableTransformer -->';

	if ($_GET['case']=='1'){$myFile = '../../DataFilesTmp/2013-02-20_WSJ-snapshot.html';}
	else {$myFile = '../../DataFilesTmp/2013-02-19_WSJ-snapshot.html';}
	
	$isError =  isResultPageError($myFile,'column0 comment','innertext',$errorText);

	var_dump ($isError);
}//END IF TEST


?>