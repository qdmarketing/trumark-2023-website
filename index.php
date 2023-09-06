<?php get_header(); ?>
<?php if (is_home() || is_archive() || is_category()) : ?>
	<?php get_template_part('template-parts/blog'); ?>
<?php elseif (is_search()) :
	get_template_part('template-parts/search');
elseif (is_404()) : ?>
	<?php get_template_part('template-parts/404'); ?>
<?php else : ?>
	<div class="is-index-php">



		<?php if (have_posts()) : ?>
			<?php
			while (have_posts()) :
				the_post();
			?>

				<?php get_template_part('template-parts/content', get_post_format()); ?>

			<?php endwhile; ?>

		<?php endif; ?>
		<?php if (get_field('location')) : ?>
			<?php get_template_part('template-parts/location'); ?>
		<?php endif; ?>

	</div>

<?php endif; ?>
<?php
get_footer();
