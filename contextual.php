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
			switch ($page) {
				case "index": 
					$contextual = "context2.png";
					$contextualAlt = "two";
				break;
				case "home": 
					$contextual = "context3.png";
					$contextualAlt = "three";
				break;
				default:
					$contextual = "";
					$contextualAlt = "";
			}

			//PHP doc to set images
			//Don't forget other attributes (e.g. alt text)
		?> 