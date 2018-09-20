<?php
/**
 * Template Name: Blank Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OceanWP WordPress theme
 */
get_header(); ?>
<div id="content-wrap" class="container clr">
	<div>
	<?php if (have_posts()) : ?>
	    <?php while (have_posts()) : the_post(); ?>
	        <article>
	            <?php the_content(); ?>
	        </article>
	    <?php endwhile; ?>
	<?php endif; ?>	
	</div>
</div>
<?php get_footer(); ?>
