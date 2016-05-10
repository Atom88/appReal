<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" type="text/css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css" type="text/css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" type="text/css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css" type="text/css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" type="text/css"/>


<!--[if lt IE 9]> 
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie.css" type="text/css" media="screen" />
<![endif]--> 
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/ico.png" type="x-icon" />



<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

<script>
jQuery( document ).ready(function() {
    jQuery(".showSearchPanel").click(function(event) {
        event.preventDefault(); 
        event.stopPropagation();
        jQuery( ".searchMainPanel" ).toggle();  
    });
    
    /* CENTER SEARCH */
    jQuery.fn.centerMe = function () {
        this.css('left', $(window).width()/2 - $(this).width()/2);
    };

    jQuery(window).resize(function() {
        jQuery('.searchMainPanel').centerMe();
    });

    jQuery('.searchMainPanel').centerMe();
});


        jQuery(document).ready(function($){
            
            jQuery('.bxslider').bxSlider({
                mode: 'fade',
                pager: false,
                //controls:false,
                //auto:true,
                //autoStart:true,
                //speed:1000,
                //pause:7000
            });
        });

</script>
    
<?php wp_head(); ?>

</head>
<body id="page-<?php the_ID(); ?>" <?php body_class(); ?>>
  
    




        
        

    
    
	