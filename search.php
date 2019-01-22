<?php
/**
 * The template for displaying search results pages.
 */

get_header(); ?>

  <main class="Main" role="main">

    <?php if ( have_posts() ) : ?>

      <section class="Search">

        <header class="Search-header">
          <h1 class="Search-title"><?php printf( esc_html__( 'Search Results for: %s', 'lh' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/post', 'summary' ); ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      </section><!-- .Search -->

    <?php else : ?>

      <?php get_template_part( 'template-parts/page', 'none' ); ?>

    <?php endif; ?>

  </main><!-- .Main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
