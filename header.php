<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!-- <script src="https://kit.fontawesome.com/5318d5e5fe.js" crossorigin="anonymous"></script> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">
		<?php if (is_front_page()) {
			get_template_part('template-parts/alerts');
		}  ?>
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

			<form style="display:none; " id="mobile-search-form" class="mobile-search-form" class="" role="search" method="get" action="<?php echo home_url('/'); ?>">

				<input placeholder="Search..." type="search" id="s" name="s" value="" class="" style="">
				<button type="submit" id="s">


					<i class="fa-solid fa-magnifying-glass open-menu-search"></i>
				</button>

			</form>
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

							<form id="header-search" class="header-search" class="" role="search" method="get" action="<?php echo home_url('/'); ?>">

								<input placeholder="Search..." type="search" id="s" name="s" value="" class="" style="width:22px;">
								<!-- <button type="submit" id="s">


									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
										<g clip-path="url(#clip0_673_41374)">
											<path d="M23.6719 21.2516L18.9984 16.5781C18.7875 16.3672 18.5016 16.25 18.2016 16.25H17.4375C18.7313 14.5953 19.5 12.5141 19.5 10.25C19.5 4.86406 15.1359 0.5 9.75 0.5C4.36406 0.5 0 4.86406 0 10.25C0 15.6359 4.36406 20 9.75 20C12.0141 20 14.0953 19.2313 15.75 17.9375V18.7016C15.75 19.0016 15.8672 19.2875 16.0781 19.4984L20.7516 24.1719C21.1922 24.6125 21.9047 24.6125 22.3406 24.1719L23.6672 22.8453C24.1078 22.4047 24.1078 21.6922 23.6719 21.2516ZM9.75 16.25C6.43594 16.25 3.75 13.5688 3.75 10.25C3.75 6.93594 6.43125 4.25 9.75 4.25C13.0641 4.25 15.75 6.93125 15.75 10.25C15.75 13.5641 13.0688 16.25 9.75 16.25Z" fill="#15636E" />
										</g>
										<defs>
											<clipPath id="clip0_673_41374">
												<rect width="24" height="24" fill="white" transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</button> -->
								<i class="fa-solid fa-magnifying-glass open-menu-search"></i>
							</form>

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