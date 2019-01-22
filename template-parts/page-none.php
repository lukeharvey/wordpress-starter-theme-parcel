<?php
/**
 * The template part for displaying a message that posts cannot be found.
 */
?>
<article class="Page">

  <header class="Page-header">
    <h1 class="Page-title">Sorry! We can't find the page you're looking for.</h1>
  </header>

  <div class="Page-content">

    <?php if ( is_search() ) : ?>

      <p>Please try again with some different keywords.</p>

      <?php get_search_form(); ?>

    <?php else : ?>

      <p>Perhaps searching can help.</p>

      <?php get_search_form(); ?>

      <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Or return to Home</a></p>

    <?php endif; ?>

  </div>

</article><!-- .Page -->
