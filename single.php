<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nextfolio
 */

get_header(); ?>
<?php get_template_part('sections/hero'); ?>
<section class="section white">
	<div class="container-full">
		<div class="row">
			<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>
		
			<?php //dynamic_sidebar(); ?>
		</div>
	</div><!-- end container -->
</section>

<?php
get_footer();
