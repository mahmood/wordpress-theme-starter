<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">    
	<title><?php if(is_front_page() ) { ?> title<?php } ?> <?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/style.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>