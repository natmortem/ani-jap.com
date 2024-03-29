<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package anime
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="col-lg-8 col-md-8">
				<div class="row">
					<main id="main" class="site-main" role="main">
					
					<?php
					while ( have_posts() ) : the_post();
/*______________________________________Для вывода мимниатюры___________________________________________*/
						?>
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
						<?php

/*----------------------------------------------------------------------------------*/
						get_template_part( 'template-parts/content', get_post_format() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div><!-- row -->
			</div><!-- col-lg-8 -->
			<?php get_sidebar(); ?>
		</div><!-- container -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
