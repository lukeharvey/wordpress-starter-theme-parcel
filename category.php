<?php
/**
 * The template for displaying category archive pages.
 */

get_header(); ?>

  <main class="Main" role="main">

    <?php if ( have_posts() ) : ?>

      <section class="Category">

        <header class="Category-header">
          <?php
            the_archive_title( '<h1 class="Category-title">', '</h1>' );
            the_archive_description( '<div class="Category-description">', '</div>' );
          ?>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/post', 'summary' );  ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      </section><!-- .Category -->

    <?php else : ?>

      <?php get_template_part( 'template-parts/page', 'none' ); ?>

    <?php endif; ?>

  </main><!-- .Main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
