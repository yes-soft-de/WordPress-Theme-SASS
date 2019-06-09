<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YesThemeSass
 */

get_header();

if ( ! empty( $_POST ) ) {
	// This Will Redirect To We will contact you page :)
}

?>

    <div id="primary" class="content-area">
        <!-- The Front Page is Widgets Only Area -->
		<?php if ( ! is_front_page() ) { ?>
            <div class="d-flex container-fluid row mt-5">
			<div class="container p-5">
			
                <main id="main" class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

                </main><!-- #main -->
            </div>
			
			</div>
		<?php } ?>
    </div><!-- #primary -->

<?php



if (is_front_page() || strtolower(get_the_title()) === 'home'){
	$templates[] = 'sidebar-front-page.php';
	locate_template( $templates, true );
	get_sidebar('sidebar-front-page');
} 
if (strtolower(get_the_title()) == "contact us") {
	
	$templates[] = 'sidebar-contact-us.php';
	locate_template( $templates, true );
	get_sidebar('sidebar-contact-us');
} 
if (strtolower(get_the_title()) == "our team") {
	
	$templates[] = 'sidebar-team.php';
	locate_template( $templates, true );
	get_sidebar('sidebar-team');
} 
if (strtolower(get_the_title()) === "about us"){
	locate_template( 'sidebar-about.php', true );
	get_sidebar('sidebar-about');
} 

$templates[] = 'sidebar.php';
locate_template( $templates, true );
get_sidebar('sidebar-1');

get_footer();
