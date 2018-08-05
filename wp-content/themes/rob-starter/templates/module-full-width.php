<?php
/**
 * The template for displaying full width pages.
 *	
 * Template Name: Module Full Width
 *
 * This is the template that displays full width pages.
 * Please note that this template was constructed to use with
 * advanced custom fields flexible content modules.
 * 
 *
 * @link https://www.robmcdonald.net
 *
 * @package Rob_MC_Starter
 */

get_header();
?>

	<div id="primary" class="content-area">
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
	</div><!-- #primary -->

<?php
get_footer();