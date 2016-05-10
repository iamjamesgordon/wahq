<?php
/**
*Header template for theme
*
*/
?>

<html>

<head>

<meta charset=" <?php bloginfo ( 'charset' ); ?> " />
<meta name="viewport" content="width=device-width" />

<title><?php bloginfo( 'name' ) ?> | <?php bloginfo( 'description' ) ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php  bloginfo( 'pingback_url' ); ?>" />
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script src='https://www.google.com/recaptcha/api.js'></script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="padding-2">

	<div class="inner-wide">

		<img src="jsdfkl" id="header-logo" alt="" />

		<nav>
    
    		<ul id="main-nav">
        
        		<li>Home</li>
            	<li>About Us</li>
            	<li>Services</li>
            	<li>Projects</li>
            	<li>Contact Us</li>
        
        	</ul>
    
    	</nav>
        
        <div class="clearfix"></div>
    
    </div> <!-- Inner -->

</header>
