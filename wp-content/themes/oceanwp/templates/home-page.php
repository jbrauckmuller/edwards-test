<?php
/**
 * Template Name: Home Page - Edwards
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OceanWP WordPress theme
 */
get_header(); ?>

<div>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
<?php endif; ?>	
</div>
<div id="content-wrap" class="container clr">
	<div class="home-numbers">
		<span class="number-figure">
		40
		</span>
		<div class="number-text">
			<p class="bold">Years</p>
			<p>Experience</p>
		</div>
	</div>
	<div class="home-numbers">
		<span class="number-figure">
		100%
		</span>
		<div class="number-text">
			<p class="bold">Customer</p>
			<p>Satisfaction</p>
		</div>
	</div>
	<div class="home-numbers">
		<span class="number-figure">
		50
		</span>
		<div class="number-text">
			<p class="bold">Million SF</p>
			<p>Built</p>
		</div>
	</div>
	
</div>


<?php get_footer(); ?>
