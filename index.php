<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Oscillator Data Builder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
       	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/vendor/jquery.dataTables.min.js"></script>
        
        
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <p>OSC DataTable</p>



      <div id="content">
        <table style="font-size: 0.6em" id="osc_table" cellpadding="0" cellspacing="0" border="0" class="display" >
	<thead>
		<tr>
			<th>DATE</th>
			<th>NYSE ADV.</th>
			<th>NYSE DEC.</th>
			<th>NYSE UP VOL (x 1000)</th>
			<th>NYSE DN VOL (x 1000)</th>
			<th>DJIA CLOSE</th>
			<th>NYSE A-D</th>
			<th>10% TREND A-D</th>
			<th>5% TREND A-D</th>
			<th>McC A-D OSC</th>
			<th>McC A-D SUMMATION INDEX</th>
			<th>A-D FOR OSC UNCH'D TOMORROW</th>
			<th>A-D FOR OSC TO 0 TOMORROW</th>
			<th>NYSE UV-DV (x 1000)</th>
			<th>10% TREND UV-DV</th>
			<th>5% TREND UV-DV</th>
			<th>McC UV-DV OSC</th>
			<th>McC VOL SUMMATION INDEX</th>
			<th>UV-DV FOR OSC UNCH'D TOMORROW</th>
			<th>UV-DV FOR OSC TO 0 TOMORROW</th>
			<th>10% TREND</th>
			<th>5% TREND</th>
			<th>PRICE OSCILLATOR</th>
			<th>PRICE FOR UNCHANGED OSCILLATOR</th>
		</tr>
	</thead>
	<tbody>
		
	</tbody>
	<tfoot>
		<tr>
			<th>DATE</th>
			<th>NYSE ADV.</th>
			<th>NYSE DEC.</th>
			<th>NYSE UP VOL (x 1000)</th>
			<th>NYSE DN VOL (x 1000)</th>
			<th>DJIA CLOSE</th>
			<th>NYSE A-D</th>
			<th>10% TREND A-D</th>
			<th>5% TREND A-D</th>
			<th>McC A-D OSC</th>
			<th>McC A-D SUMMATION INDEX</th>
			<th>A-D FOR OSC UNCH'D TOMORROW</th>
			<th>A-D FOR OSC TO 0 TOMORROW</th>
			<th>NYSE UV-DV (x 1000)</th>
			<th>10% TREND UV-DV</th>
			<th>5% TREND UV-DV</th>
			<th>McC UV-DV OSC</th>
			<th>McC VOL SUMMATION INDEX</th>
			<th>UV-DV FOR OSC UNCH'D TOMORROW</th>
			<th>UV-DV FOR OSC TO 0 TOMORROW</th>
			<th>10% TREND</th>
			<th>5% TREND</th>
			<th>PRICE OSCILLATOR</th>
			<th>PRICE FOR UNCHANGED OSCILLATOR</th>
		</tr>
	</tfoot>
</table>
        
        <script type="text/javascript" charset="utf-8" >  
		  $(document).ready(function() {
			$('#osc_table').dataTable( {
				"bProcessing": true,
				"sAjaxSource": 'DataFilesTmp/example/OSC-DATA-7.txt'
				} );
			} );
		</script>
        
        
        </div>
        
        
        
    </body>
</html>