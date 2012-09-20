<?php
/**
 * The template for displaying Category Projekt Archive page.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header();
?>

<div id="container">
  <div id="content" role="main">
    <?php query_posts(array('orderby' => 'date', 'order' => 'DESC', 'category_name' => 'projekt'));
    if (have_posts()) : while (have_posts()) : the_post();
        ?>
        <div class="cat-content">
          <?php the_content(); ?>
    <?php edit_post_link(); ?>
        </div>
        <div style="clear:both;"></div>
      <?php endwhile;
    else:
      ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
  </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>