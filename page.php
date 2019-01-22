<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

  <main class="Main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/page' ); ?>

    <?php endwhile; // end of the loop. ?>

  </main><!-- .Main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
