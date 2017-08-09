<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nextfolio
 */

?>
<div id="post-<?php the_ID(); ?>" class="col-md-6 col-sm-6">
	<div class="blog-wrapper">
		<div class="blog-image">
			<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('blog-image'); ?></a>
		</div><!-- end image -->
		<div class="blog-title">
			<?php
				if ( is_singular() ) :
					the_title( '<h2>', '</h2>' );
				else :
					the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			?>
			<?php
				if ( 'post' === get_post_type() ) : ?>
				<div class="post-meta">
					<?php nextfolio_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; 
			?>
			
			<?php
				if(!is_single())
				{
					the_excerpt();
				}
				else
				{
					the_content();
				}
			?>
			
		</div><!-- end desc -->
	</div><!-- end blog-wrapper -->
</div><!-- end col -->