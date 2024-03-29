<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

							get_template_part( 'template-parts/content', 'page' );

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

<?php get_footer(); ?>
