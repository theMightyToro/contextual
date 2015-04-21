<html>
	<head>
		<title>Contextual Test Site</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="/contextual/template/scripts/randomize.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Sigmar+One|Open+Sans' rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" href="/contextual/template/css/site.css"/>
		<?php include("/../php/parseURL.php");?> 
		<?php include("/../php/contextual.php");?> 
		<script type="text/javascript">
		$(function(){
			$('#containerContextual').randomize({ id: 'context', src: '/contextual/template/images/i-random1.png', numberOf: 3 });
		});
		</script>
	</head>
	<body class="<?php echo $page; ?> <?php echo $section; ?>">
		<div class="container-header">
			<header class="header-page">
				<div class="brand">Contextual Test Site</div>
			</header>
		</div>
		<div class="container-nav">
			<div class="nav-main clearfix">
				<?php include("/../php/nav-main.php");?> 
			</div>
		</div>
		<div class="container-content">
			<article class="content">
				<?php
					
					if($contextual != "")  {
						echo '<img src="/contextual/template/images/' . $contextual . '" alt="' . $contextualAlt . '" class="context"/>';
					}	
					else {
						echo '<noscript id="containerContextual"><img class="context" id="contextual" src="/contextual/template/images/i-random1.jpg" alt="" /></noscript>';
					}
					
				?>
				<!-- CONTENT BEGINS -->