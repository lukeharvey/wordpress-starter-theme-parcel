<?php
/**
 * The sidebar containing the main widget area.
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>

<aside class="Sidebar" role="complementary">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- .Sidebar -->
