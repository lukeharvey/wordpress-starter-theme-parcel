<?php
/**
 * Custom template tags
 */

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */

function lh_posted_on() {
  $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
  if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
  }

  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() ),
    esc_attr( get_the_modified_date( 'c' ) ),
    esc_html( get_the_modified_date() )
  );

  $posted_on = sprintf(
    esc_html_x( 'Posted on %s', 'post date', 'lh' ),
    '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
  );

  $byline = sprintf(
    esc_html_x( 'by %s', 'post author', 'lh' ),
    '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
  );

  echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */

function lh_post_footer() {

  // Hide category and tag text for pages.
  if ( 'post' == get_post_type() ) {
    /* translators: used between list items, there is a space after the comma */
    $categories_list = get_the_category_list( esc_html__( ', ', 'lh' ) );
    if ( $categories_list && _lh_categorized_blog() ) {
      printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'lh' ) . '</span>', $categories_list );
    }

    /* translators: used between list items, there is a space after the comma */
    $tags_list = get_the_tag_list( '', esc_html__( ', ', 'lh' ) );
    if ( $tags_list ) {
      printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'lh' ) . '</span>', $tags_list );
    }
  }

  edit_post_link( esc_html__( 'Edit', 'lh' ), '<span class="edit-link">', '</span>' );
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */

function lh_categorized_blog() {
  if ( false === ( $all_the_cool_cats = get_transient( 'lh_categories' ) ) ) {
    // Create an array of all the categories that are attached to posts.
    $all_the_cool_cats = get_categories( array(
      'fields'     => 'ids',
      'hide_empty' => 1,

      // We only need to know if there is more than one category.
      'number'     => 2,
    ) );

    // Count the number of categories that are attached to the posts.
    $all_the_cool_cats = count( $all_the_cool_cats );

    set_transient( 'lh_categories', $all_the_cool_cats );
  }

  if ( $all_the_cool_cats > 1 ) {
    // This blog has more than 1 category so _lh_categorized_blog should return true.
    return true;
  } else {
    // This blog has only 1 category so _lh_categorized_blog should return false.
    return false;
  }
}

/**
 * Flush out the transients used in lh_categorized_blog.
 */

function lh_category_transient_flusher() {
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return;
  }
  // Like, beat it. Dig?
  delete_transient( 'lh_categories' );
}
add_action( 'edit_category', 'lh_category_transient_flusher' );
add_action( 'save_post',     'lh_category_transient_flusher' );
