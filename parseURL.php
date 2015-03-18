<?php 
	//Gets protocol, transforms text to lower case, checks to see if it is https
	//if it isn't https, $protocol is assigned http, otherwise assigned https
	$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
	  === FALSE ? 'http' : 'https';

	//host is www.domain.com, or for testing localhost
    $host     = $_SERVER['HTTP_HOST'];
    
    //script is file structure (e.g. /contextual/home.php)
	$script   = $_SERVER['SCRIPT_NAME'];
	
	//params come after structure with ? (e.g. city=Dallas&start=10)
    $params   = $_SERVER['QUERY_STRING'];
	$currentUrl = $protocol . '://' . $host . $script . '?' . $params;

	$domain = 'http://' . $_SERVER['HTTP_HOST'];
	$path = $_SERVER['REQUEST_URI'];
	$url = $domain . $path;

	// page + section + class
	$page = basename($url);
	$page = $class = str_replace('.php','',$page);
	$page = str_replace('-',' ',$page);

	if ($path == "/") {
	    $section = $class = "index";
	} else if (basename(dirname($url),"/") == $_SERVER['HTTP_HOST']) {
	    $section = $page;
	} else { 
	    $section = basename(dirname($url),"/");
	    $section = str_replace('-',' ',$section);
	    $class =  basename(dirname($url),"/") . " " . $class;
	}
?> 