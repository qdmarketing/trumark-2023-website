<?php
$phone_number = get_field('phone_number', 'option');
$primary_address = get_field('primary_address', 'option');
$disclaimer_text = get_field('disclaimer_text', 'option');
$social_media = get_field('social_media', 'option');
$routing_number = get_field('routing_number', 'option');
$copyright = get_field('copyright', 'option');
$cta_headline = get_field('cta_headline', 'option');
$cta_button = get_field('cta_button', 'option');
$cta_enabled = get_field('footer_cta_enabled');


$svgContent = file_get_contents(get_template_directory() . '/resources/images/QNTM_Wordmark_Horizontal.svg');



















?>
</main>
<?php do_action('tailpress_content_end'); ?>
</div>
<?php do_action('tailpress_content_after'); ?>

<?php if ($cta_enabled) : ?>
	<div class="site-footer-cta">
		<div class="container-lg">
			<?php echo $cta_headline ? '<h4 class="site-footer-cta__headline">' . $cta_headline . '</h4>' : '';
			echo qntm_acf_link('a', 'site-footer-cta__button', $cta_button, false, false);
			?>
		</div>
	</div>
<?php endif; ?>
<footer id="colophon" class="site-footer bg-gray-50 py-12" role="contentinfo">
	<div class="container-xxl">
		<div class="site-footer__grid">
			<div class="site-footer__col site-footer__col--one">
				<?php echo $phone_number ? '<div class="site-footer__phone">' . $phone_number . '</div>' : ''; ?>
				<?php echo $routing_number ? '<div class="site-footer__routing">Routing Number: <span>' . $routing_number . '</span></div>' : ''; ?>
				<?php echo $primary_address ? '<div class="site-footer__address">' . $primary_address . '</div>' : ''; ?>
			</div>
			<div class="site-footer__col site-footer__col--two">
				<?php wp_nav_menu(
					array(
						'container_id'    => 'footer-menu',
						'container_class' => 'footer-menu',
						'menu_class'      => '',
						'theme_location'  => 'footer-main',
						'li_class'        => '',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
			<div class="site-footer__col site-footer__col--three">
				<div class="site-footer__social">
					<?php if (get_field('social_media', 'option')) :
						$social =  (get_field('social_media', 'option'));
						foreach ($social as $item) :

					?>

							<a target="_blank" href="<?php echo $item['link']['url']; ?>">
								<i class="fa-brands fa-<?php echo $item['website']; ?>"></i></a>
					<?php
						endforeach;
					endif; ?>
				</div>
				<?php echo $disclaimer_text ? '<div class="site-footer__disclaimer-text">' . $disclaimer_text . '</div>' : ''; ?>
			</div>
			<div class="site-footer__col site-footer__col--four">
				<a class="site-footer__return" href="#">Return to top</a>
				<?php if (have_rows('footer_logos', 'option')) : ?>
					<div class="site-footer__footer-logos">
						<?php while (have_rows('footer_logos', 'option')) : the_row(); ?>
							<?php
							$image =  wp_get_attachment_image(get_sub_field('image'), 'full', false, array('class' => ''));
							$link = get_sub_field('link');
							echo qntm_acf_link('a', 'site-footer__footer-logo-image', $link, false, $image); ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="site-footer__bottom">
				<div class="site-footer__copyright">
					<?php echo $copyright ?  $copyright  : ''; ?>
				</div>
				<div class="site-footer__powered-by">
					<a href="https://qntm.marketing" rel="nofollow" target="_blank">
						<span>Site powered by</span> <?php echo $svgContent; ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<aside id="leaveSiteCover" class="" style="display:none;">
		<div id="leaveSite">
			<h6 id="leaveTitle"><?php the_field('leaveSite_headline', 'option'); ?></h6>
			<div id="leaveText"><?php the_field('leaveSite_content', 'option'); ?></div>
			<div id="leaveLinks">
				<a href="" id="continueLink" class="noWarning buttons-block__button style1" target="_blank">Continue</a>
				<a href="" id="cancelLink" class="noWarning buttons-block__button style2 leaveSiteClose">Cancel To Site <i class="fa-solid fa-xmark"></i></a>
			</div>
			<div id="leaveSiteClose" class="leaveSiteClose noWarning"><i class="fa-solid fa-xmark"></i></div>
		</div>
	</aside>
	<?php do_action('tailpress_footer'); ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>