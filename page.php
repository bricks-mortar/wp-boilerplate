<?php
/**
 * Single page template
 * 
 * @package WordPress
 * @version 1.0
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<div>

</div>

<?php endwhile; endif; ?>

<?php get_footer();