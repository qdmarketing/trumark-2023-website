<?php

$thumb = '';
if (has_post_thumbnail()) {
	$thumb = wp_get_attachment_image(get_post_thumbnail_id(), 'blog-main', false, array('class' => 'blog-single-top__image'));
}
?>
<article class="blog-single" id="post-<?php the_ID(); ?>" <?php post_class('is_content_single_php'); ?>>
	<?php if (get_post_type() == 'post') :  ?>
		<div class="blog-single-top">
			<div class="blog-single-top__waves">

			</div>
			<div class="blog-single-top__container container-1240">
				<?php get_template_part('template-parts/blog-topline'); ?>

				<div class="breadcrumbs">
					<?php custom_breadcrumbs(); ?>
				</div>
				<?php echo  $thumb ? $thumb : ''; ?>
			</div>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<div class="container-1240">
			<div class="blog-single-meta">
				<div class="blog-single-meta__date"><?php echo get_the_date(); ?></div>
				<h1 class="blog-single-meta__headline"><?php echo get_the_title(); ?></h1>
			</div>
			<div class="blog-single__content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</article>
<div class="blog-single-bottom">
	<div class="container-1240">

		<?php if (has_tag()) : ?>
			<div class="blog-single-bottom__tags">
				<div>Tags:</div>
				<div>
					<?php the_tags('', ' ', ''); ?>
				</div>
			</div>
			<div class="blog-single-bottom__share">
				<div>
					Share:
				</div>
				<div>
					<?php echo qntm_social_social_share_buttons(); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
<div class="blog-single-related">
	<div class="container-1240">

		<?php
		$args = array(
			'numberposts' => 3,  // Number of recent posts to retrieve
			'post_status' => 'publish',
		);
		$posts_page_id = get_option('page_for_posts');
		$posts_page_url = get_permalink($posts_page_id);

		$recent_posts = get_field('related_posts'); // Assuming you want to retrieve 'related_posts' if it exists

		$title = 'Related Posts';

		if (!$recent_posts) {
			$recent_posts = wp_get_recent_posts($args);
			$title = 'Recent Posts';
		}


		$recent_posts = wp_list_pluck($recent_posts, 'ID');
		?>
		<div class="blog-single-related__heading">
			<h4><?php echo $title; ?></h4>

		</div>
		<div class="blog-single-related__grid">

			<?php foreach ($recent_posts as $recent) :

			?>
				<div class="blog-single-related__item">

					<?php
					get_template_part('template-parts/blog-item', get_post_format(), array(
						'featured' => false,
						'ID' => $recent
					)); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>