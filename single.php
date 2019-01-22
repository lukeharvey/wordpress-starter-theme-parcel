<?php
/**
 * The template for displaying all single posts.
 */

get_header(); ?>

  <main class="Main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/post' ); ?>

      <?php the_post_navigation(); ?>

    <?php endwhile; // end of the loop. ?>

  </main><!-- .Main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
