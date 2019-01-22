<?php
/**
 * The template used for displaying post content in index.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('Post'); ?>>

  <header class="Post-header">
    <?php the_title( sprintf( '<h1 class="Post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

    <div class="Post-meta">
      <?php lh_posted_on(); ?>
    </div>
  </header>

  <?php /* Show featured image (if present) and add lazyloading markup */ ?>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="Post-thumbnail">
      <?php the_post_thumbnail( 'large', array( 'class' => 'lazyload' ) ); ?>
    </div>
  <?php endif; ?>

  <div class="Post-content entry-content">
    <?php the_content(); ?>
  </div>

  <footer class="Post-footer">
    <?php lh_post_footer(); ?>
  </footer>

</article><!-- .Post -->
