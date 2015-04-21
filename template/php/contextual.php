<?php 
	//Sets contextual image with an if/else statement
	//$contextual = strpos($_SERVER['SCRIPT_NAME'],'home') 
	// === FALSE ? 'context1.png' : 'context2.png';

	//Sets contextual image using parameter in URL
	/*switch ($params) {
		case "one":
			$contextual = "context1.png";
			$contextualAlt = "one";
		break;
		case "two":
			$contextual = "context2.png";
			$contextualAlt = "two";
		break;
		case "three": 
			$contextual = "context3.png";
			$contextualAlt = "three";
		break;
		default:
			$contextual = "";
			$contextualAlt = "";
	}*/
	$contextual = "";
	$contextualAlt = "";
	switch ($section) {
		case "section2": 
			$contextual = "context3.png";
			$contextualAlt = "three";
		break;
	}
	switch ($page) {
		case "contextual": 
			$contextual = "context1.png";
			$contextualAlt = "one";
		break;
		case "no section": 
			$contextual = "context2.png";
			$contextualAlt = "two";
		break;
		case "section": 
			$contextual = "context3.png";
			$contextualAlt = "three";
		break;
		case "in section1": 
			$contextual = "context3.png";
			$contextualAlt = "three";
		break;
		case "in section2": 
			$contextual = "context3.png";
			$contextualAlt = "three";
		break;
		case "in section3": 
			$contextual = "context2.png";
			$contextualAlt = "three";
		break;
		case "section2": 
			$contextual = "context4.png";
			$contextualAlt = "four";
		break;
		case "in section4": 
			$contextual = "context4.png";
			$contextualAlt = "four";
		break;
		case "in section5": 
			$contextual = "context4.png";
			$contextualAlt = "four";
		break;
		case "in section6": 
			$contextual = "context4.png";
			$contextualAlt = "four";
		break;
		case "section3": 
			$contextual = "context5.png";
			$contextualAlt = "five";
		break;
		case "in section7": 
			$contextual = "context5.png";
			$contextualAlt = "five";
		break;
	}

	//PHP doc to set images
	//Don't forget other attributes (e.g. alt text)
?> 