<html>
	<head>
		<title>Contextual Test Site</title>
		<link href='http://fonts.googleapis.com/css?family=Sigmar+One|Open+Sans' rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" href="site.css"/>
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
		?> 
	</head>
	<body>
		<div class="container-header">
			<header class="header-page">
				<div class="brand">Contextual Test Site</div>
			</header>
		</div>
		<div class="container-content">
			<article class="content">
				<p><strong>Protocol:</strong> <?php echo $protocol; ?></p>
				<p><strong>Host:</strong> <?php echo $host; ?></p>
				<p><strong>Script:</strong> <?php echo $script; ?></p>
				<p><strong>Params:</strong> <?php echo $params; ?></p> 
				<p><strong>Full URL:</strong> <?php echo $currentUrl; ?></p>
				<p><strong>Parsed URL:</strong> <?php print_r(parse_url($currentUrl)); ?> </p>
			</article>
		</div>
		<div class="container-footer">
			<footer class="footer-page">
				<img src="gear60.png" alt=""/>
			</footer>
		</div>
	</body>
</html>