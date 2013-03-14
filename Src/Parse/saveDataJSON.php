<?php

/*
* PROCEDUAL CODE -- ONLY for DEVELOPMENT -- 
*
*
*/



$data_raw = file_get_contents('../../DataFilesTmp/example/OSC-DATA-5.json');

$data = json_decode($data_raw);
/* var_dump($data); */

echo 'hi';

/* $nyse_AD =  */

/*
foreach ($data as $key => $value){
	foreach ($value as $key2 => $value2){
		echo $key2.' <br/>'.PHP_EOL;
	}	
}
*/

$nyse_AD_cols = [
   "DATE",
   "NYSE ADV.",
   "NYSE DEC.",
   "NYSE A-D",
   "10% TREND A-D",
   "5% TREND A-D",
   "McC A-D OSC",
   "McC A-D SUMMATION INDEX",
   "A-D FOR OSC UNCH'D TOMORROW",
   "A-D FOR OSC TO 0 TOMORROW"
];

$nyse_VOL_cols = [
"DATE",
"NYSE UP VOL (x 1000)",
"NYSE DN VOL (x 1000)",
"NYSE UV-DV (x 1000)",
"10% TREND UV-DV",
"5% TREND UV-DV",
"McC UV-DV OSC",
"McC VOL SUMMATION INDEX",
"UV-DV FOR OSC UNCH'D TOMORROW",
"UV-DV FOR OSC TO 0 TOMORROW"
];

$djia_cols = [
   "DATE",
   "DJIA CLOSE",
   "10% TREND",
   "5% TREND",
   "PRICE OSCILLATOR",
   "PRICE FOR UNCHANGED OSCILLATOR"
];

?>
