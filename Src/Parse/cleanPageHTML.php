<? 

function cleanPageHTML ($htmlPage){

	//Remove some non-valid self-closed table row tags which mess with DOM parse
	$htmlPage = preg_replace('<tr/>', "", $htmlPage);

	//Replace some potentally bad charcters in the HTML. 
	$htmlPage = str_replace("&#134;", "", $htmlPage);
	$htmlPage = str_replace("volume*", "volume(primaryMkt)", $htmlPage);
	$htmlPage = str_replace("trades*", "trades(primaryMkt)", $htmlPage);

	return $htmlPage; 
}


?>