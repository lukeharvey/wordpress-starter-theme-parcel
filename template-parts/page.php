<?php
/**
 * The template used for displaying page content in page.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('Page'); ?>>

  <header class="Page-header">
    <h1 class="Page-title"><?php the_title(); ?></h1>
  </header>

  <?php /* Show featured image (if present) and add lazyloading markup */ ?>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="Page-thumbnail">
      <?php the_post_thumbnail( 'large', array( 'class' => 'lazyload' ) ); ?>
    </div>
  <?php endif; ?>

  <div class="Page-content">
    <?php the_content(); ?>
  </div>

</article><!-- .Page -->
