<?php
/**
 * A custom template for the front page
 */

get_header(); ?>

  <main class="Main" role="main">

    <?php if ( have_posts() ) : ?>

      <section class="FrontPage">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/post', 'summary' ); ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      </section><!-- .FrontPage -->

    <?php else : ?>

      <?php get_template_part( 'template-parts/page', 'none' ); ?>

    <?php endif; ?>

  </main><!-- .Main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
