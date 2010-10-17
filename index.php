<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header();
?>

<div id="container">
  <div id="content" role="main">

    <?php $categorylist = get_cat_ID('start');
        $query = new WP_Query("cat=$categorylist&showposts=1&orderby=post_date&order=DESC");
        if (have_posts()) : while ($query->have_posts()) : $query->the_post();  ?>
      <div class="cat-content">
        <?php the_content(); ?>
      </div>
      <div style="clear:both;"></div>
    <?php endwhile;
      else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
   </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>