<?php
include("constants.php");

function css_include($filename='application', $media='screen'){
	global $CSS_SULFIX;
	$path = get_bloginfo("template_url");
	print "<link rel='stylesheet' href='$path/stylesheet/$filename$CSS_SULFIX' type='text/css' media='$media' />";
	//print $output;
}

function js_include($filename='application'){
	global $JS_SULFIX;
	$path = get_bloginfo("template_url");
	print "<script type='text/javascript' src='$path/javascript/$filename$JS_SULFIX'></script>";
	//print $output ;
}
