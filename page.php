<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eyewp
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="container"><!-- start container -->

			<div class="row"><!-- row -->

				<main id="main" class="site-main col-md-8">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->

		  <div class="col-md-4">

		    <?php get_sidebar(); ?>

	      </div><!-- end sidebar col-md-4 -->

	     </div><!--end row-->

	   </div><!-- end container --> 

	</div><!-- #primary -->

<?php

get_footer();
