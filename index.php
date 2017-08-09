<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nextfolio
 */

get_header(); ?>
<?php get_template_part('sections/hero'); ?>
<section class="section white">
	<div class="container-full">
		<div class="row">
			<div id="content" class="col-md-8">
				<div class="row blog-list module-wrapper blog-widget text-center">
					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							
						<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				
				</div><!-- end row -->

				<nav class="pagi clearfix text-center">
					<?php
						the_posts_pagination( array(
							'mid_size'  => 4,
							'prev_text' => __( '<i class="fa fa-angle-left" aria-hidden="true"></i>', 'premix' ),
							'next_text' => __( '<i class="fa fa-angle-right" aria-hidden="true"></i>', 'premix' ),
						) );
					?>
				</nav>

			</div>
			<?php get_template_part('template-parts/widget-areas/blog'); ?>
			  
		</div>
	</div><!-- end container -->
</section><!-- end section -->
<?php
get_footer();
