<html>
	<head>
		<title>Contextual Test Site</title>
		<link href='http://fonts.googleapis.com/css?family=Sigmar+One|Open+Sans' rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" href="site.css"/>
		<?php include("parseURL.php");?> 
		<?php include("contextual.php");?> 
	</head>
	<body>
		<div class="container-header">
			<header class="header-page">
				<div class="brand">Contextual Test Site</div>
			</header>
		</div>
		<div class="container-content">
			<article class="content">
				<?php
					if($contextual != "")  {
						echo '<img src="' . $contextual . '" alt="' . $contextualAlt . '" class="contextual"/>';
					}	
				?>
				<p><strong>Protocol:</strong> <?php echo $protocol; ?></p>
				<p><strong>Host:</strong> <?php echo $host; ?></p>
				<p><strong>Script:</strong> <?php echo $script; ?></p>
				<p><strong>Params:</strong> <?php echo $params; ?></p> 
				<p><strong>Full URL:</strong> <?php echo $currentUrl; ?></p>
				<p><strong>Parsed URL:</strong> <?php print_r(parse_url($currentUrl)); ?> </p>

				<p>Page: <?php echo $page; ?></p>
				<p>Section: <?php echo $section; ?></p>
				<p>class: <?php echo $class; ?></p>
			</article>
		</div>
		<div class="container-footer">
			<footer class="footer-page">
				<img src="gear60.png" alt=""/>
			</footer>
		</div>
	</body>
</html>
