Collaborative Group Project – Oscillator Data Builder
===

Description
===
Bring in market data and display it as a market breadth indicator. Display on screen data, from calculations performed at end of day. Data is pulled from the Wall Street Journal.

Background
===
The "Oscillator Data Builder" displays the McClellan Oscillator, a widely used stock market technical indicator.   The McClellan Oscillator uses advance, decline and breadth statics to measure acceleration the stock market and the power of market moves.  The McClellan Oscillator is one tool of many that technical analysts use to forecast stock market prices.

What is Implemented
===
Set up project skeleton, define classes and namespaces.
- src/
	- view/
		- viewClass.php
	- db/
		- dbClass.php
		- cleanerClass.php
	- grabber/
		- pageParserClass.php
		- tableParserClass.php
		- getContentsClass.php
		- writeToFileClass.php
- tests/
	- src/
	- conf/
		- phpunit.xml
- vender/
- composer.json
- README.md
=======
Oscillator_Data_Builder
=======================

