<?php
/**
 * The template for displaying the front page..
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
    <section>      <div>
        <h3>Adventures</h3>
      </div>

    </section>
	</div><!-- #primary -->

<?php get_footer(); ?>
