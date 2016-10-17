<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

    <div class="blog-masthead">
      <div class="container">
	<nav class="blog-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 1 ) ); ?>
	</nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><a href="<?php esc_url (home_url('/')); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <p class="lead blog-description"><?php bloginfo( 'description' ); ?></p>
      </div>
