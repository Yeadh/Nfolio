<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nextfolio
 */

?>
<div  id="post-<?php the_ID(); ?>"  id="content" class="single-post col-md-8 col-sm-12 col-xs-12">
	<div class="blog-wrapper">
		<div class="blog-image">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<?php the_post_thumbnail('single_post'); ?>
					</div>
				</div>
			<?php if ( 'post' === get_post_type() ) : ?>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="fa fa-angle-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="fa fa-angle-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			<?php endif; ?>
			</div>
		</div><!-- end blog-image --> 

		<hr class="invis">

		<div class="blog-title">
			<h2><?php the_title(); ?></h2>
			<div class="post-meta">
				<?php nextfolio_posted_on(); ?>
			</div>
			<?php the_content(); ?>
		</div><!-- end desc -->
	</div><!-- end blog-wrapper -->
</div>


