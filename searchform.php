<?php
/**
 * The search form template.
 */
?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="Form" method="get" role="search">
  <div class="Form-container">
    <label class="u-visuallyHidden" for="s">Search for:</label>
    <input class="Form-control" name="s" placeholder="Search &hellip;" title="Search for:" type="search" value="<?php get_search_query(); ?>">
    <input class="Form-button" type="submit" value="Search">
  </div>
</form>
