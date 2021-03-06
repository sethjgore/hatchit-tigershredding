<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />

    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />



    <?php get_template_part('typekit') //loads the typekit fonts embed scripts ?>

    <?php wp_head(); ?>
  </head>

  <body class="<?php if( is_front_page() || is_home() || is_single()){ echo ''; } else { echo 'withlogo'; } ?>" <?php body_class(); ?> >

    <header>
      <!--<div class="col-6">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
          <img class="site-logo--image"></img>
        </a>
      </div>-->
    </header>
      <?php get_template_part('partial/ribbon', 'companyinfo'); ?>
      <?php get_template_part('partial/nav', 'main'); ?>