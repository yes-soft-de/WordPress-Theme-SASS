<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YesThemeSass
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#content"><?php esc_html_e( 'Skip to content', 'yesthemesass' ); ?></a>

    <header id="masthead" class="site-header pb-2 row justify-content-center">
        <nav class="navbar navbar-light col-12 justify-content-center" style="background-color: #FFFFFF">

            <div id="navigation" class="navbar nav-dark d-flex col-12">
                <div class="col-sm-12 col-md-3 justify-content-start justify-content-md-end">
					<?php
					the_custom_logo();
					?>
                </div>

                <div class="col-sm-12 col-md-8 d-flex justify-content-end">
                    
                     <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Navigation
                    </button>

                    <div class="collapse" id="collapseExample">
  <div class="card card-body">
    <nav id="site-navigation" class="main-navigation">
                            
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'container_class'=> 'ul'
                            ) );
                            ?>
                        </nav><!-- #site-navigation -->
  </div>
</div>
                        
                        
                    
                </div> <!-- #Navbar -->
                
                
            </div>
        </nav>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
