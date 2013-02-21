<? 

// This function Steps through passed HTML Table and builds a multi-dimensional  Array from row column data  
function parseWSJtable($date,$datatableHTML,$colheaderClass,$rowHeaderClass){
	empty($DataRay);
	
	// Add the date to the begining of array
	$DataRay = array("date"=>$date);
	
    // Step through each row
	foreach ($datatableHTML->find('tr') as $rowKey=>$row){
		
		//Step through each cell
		foreach ($row->find('td') as $cellKey=>$cell){
			
			//Get the CSS Class of the cell
			$cellClass = $cell->class;
			
			// $colHeader CSS class identify Header rows which have name of  the Stock Exchange for the following data. 
			if ($cellClass == $colheaderClass){
				empty($colHeadings);
				//We only care about the first header row cell this ids the Excahnge
				if ($cellKey == 0){
					$colHeadings = array("exchange"=>$cell->plaintext);
				}else{
					$colHeadings["col".$cellKey] = $cell->plaintext;
				}
			}else{  // if not header row  then collect DATA rows 
				
				// First column has the row header which is the name of the Key
				if ($cellKey==0){
					$rowHead = $cell->plaintext;
	
				}elseif($cellKey==1){  // The second column (cell) has the current data
					
					// Build the Array with data for each exchange.   
					$DataRay[$colHeadings['exchange']][$rowHead]= str_replace(",", "", $cell->plaintext); 
				}
			}//END cellClass conditionals
		}//END Cells loop
	}//END Rows loop
	
	return $DataRay;
}//END Function parseWSJtable


?>