<!DOCTYPE HTML>

<?php include('helpers/load_engine.php'); ?>

<html>
	<head>
		<meta charset='utf-8' />
		<title>
			<?php bloginfo('name'); ?>
		</title>
		
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
		
		<!--
		<link rel="stylesheet" href='<?php //bloginfo("template_url"); ?>/nivo-slider.css' type="text/css" media="screen" />
		<link rel="stylesheet" href='<?php //bloginfo("template_url"); ?>/images/default/default.css' type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php //bloginfo('stylesheet_url'); ?>" />
		-->
		
		<link rel="alternate" type="application/rss+xml" 	title="RSS 2.0" 	href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" 				title="RSS .92" 	href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" 	title="Atom 0.3" 	href="<?php bloginfo('atom_url'); ?>" />
		
		<?php  wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		
	</head>
	<body>
		<div id='header'>
			
			<?php get_header(); ?>
			
		</div>
		
		<div id='container'>
			<?php include('parts/banner_slider.php'); ?>
			<?php include('parts/destaques.php'); ?>
			<?php include('parts/associacoes.php'); ?>
		</div>
		
		<div id='footer'>
			<?php include('footer.php'); ?>
		</div>
		
		<?php
			css_include('nivo-slider');
			css_include('default');
			css_include('application');
		?>
		
	</body>
	
	<?php
		js_include($filename='jquery.corner');
		js_include($filename='jquery.nivo.slider');
		js_include($filename='application');
	?>
	<!--
	<script type='text/javascript' src='<?php bloginfo("template_url"); ?>/jquery.corner.js'></script>
	<script type='text/javascript' src='<?php bloginfo("template_url"); ?>/javascript/application.js'></script>
	<script type='text/javascript' src='<?php bloginfo("template_url"); ?>/javascript/jquery.nivo.slider.js' ></script>
	-->
</html>
