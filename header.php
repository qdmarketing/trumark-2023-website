<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>
		<header class="mobileHeader">
			<div class="mobileHeader__container mx-auto">
				<div>
					<?php if (has_custom_logo()) { ?>
						<?php the_custom_logo(); ?>
					<?php } else { ?>
						<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
							<?php echo get_bloginfo('name'); ?>
						</a>
					<?php } ?>
				</div>
				<div class="toggleMenu__wrapper">
					<div class="toggleMenu">
						<div class="line line1"></div>
						<div class="line line2"></div>
						<div class="line line3"></div>
					</div>
				</div>
			</div>
			<div class="mobileHeader__menu">
				<div class="container">

					<?php wp_nav_menu(
						array(
							'container_id'    => 'mobile-header-utility',
							'container_class' => 'mobileHeader__utility__menu',
							'menu_class'      => '',
							'theme_location'  => 'header-utility',
							'li_class'        => '',
							'fallback_cb'     => false,
						)
					);
					?>
					<a class="mobileHeader__menu__allCategories" href="#">All Categories</a>
					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'mobile-primary-menu',
							'container_class' => 'mobileHeader__primary',
							'menu_class'      => 'mobileHeader__primary__colOne',
							'theme_location'  => 'primary',
							'li_class'        => '',
							'fallback_cb'     => false,
						)
					);
					?>
					<div class="mobileHeader__cta"></div>
				</div>
			</div>
			<div class="mobile-search-bar bg-secondary text-white">
				<div class="mobile-search-bar__container">
					<a class="mobile-search-bar__search" href="#"><i class="fa-solid fa-magnifying-glass"></i>Search</a>
					<?php echo qntm_acf_link('a', 'mobile-search-bar__acct', get_field('account_login_link', 'options'), 'fa-solid fa-lock', false); ?>
				</div>
			</div>
		</header>
		<header class="header opacity-0">

			<div class="header__container mx-auto container-2k  ">
				<div class="hidden lg:flex justify-between">
					<div class="header__logo">
						<div>
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo('name'); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>

							<?php } ?>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>
					<div class="header__menus">
						<div class="header__menus__top">

							<i class="fa-solid fa-magnifying-glass"></i>
							<?php wp_nav_menu(
								array(
									'container_id'    => 'header-utility',
									'container_class' => 'header__utility__menu',
									'menu_class'      => 'flex lg:-mx-4',
									'theme_location'  => 'header-utility',
									'li_class'        => '',
									'fallback_cb'     => false,
								)
							);
							?>

							<?php echo qntm_acf_link('a', 'header__menus__top__acct', get_field('account_login_link', 'options'), 'fa-solid fa-lock', false); ?>
						</div>


						<?php
						wp_nav_menu(
							array(
								'container_id'    => 'primary-menu',
								'container_class' => 'header__primary hidden',
								'menu_class'      => 'lg:flex lg:-mx-4',
								'theme_location'  => 'primary',
								'li_class'        => 'lg:mx-4',
								'fallback_cb'     => false,
							)
						);
						?>
					</div>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>