<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div id="logo">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<a href="<?php echo site_url(); ?>"><img src ="<?php echo site_url(); ?>/wp-content/uploads/2023/07/Group-1-1.png" alt="Logo de Planty" /></a>
<?php

?>
</div>
<div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">  
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>

</nav>
<nav class="responsive-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">  
<span class="material-symbols-outlined">
                    menu
                </span>
<?php wp_nav_menu(array('theme_location' => 'primary-res-navigation', 'menu_class' => 'responsive-navigation')); ?>


</nav>
</header>
<div id="container">
<main id="content" role="main">