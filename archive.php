<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>

  <main class="Main" role="main">

    <?php if ( have_posts() ) : ?>

      <section class="Archive">

        <header class="Archive-header">
          <?php
            the_archive_title( '<h1 class="Archive-title">', '</h1>' );
            the_archive_description( '<div class="Archive-description">', '</div>' );
          ?>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/post', 'summary' );  ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      </section><!-- .Archive -->

    <?php else : ?>

      <?php get_template_part( 'template-parts/page', 'not-found' ); ?>

    <?php endif; ?>

  </main><!-- .Main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
