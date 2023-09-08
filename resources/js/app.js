// Navigation toggle
window.addEventListener("load", function () {
	let main_navigation = document.querySelector("#primary-menu");
	document
		.querySelector("#primary-menu-toggle")
		.addEventListener("click", function (e) {
			e.preventDefault();
			main_navigation.classList.toggle("hidden");
		});
});
jQuery(document).ready(function ($) {
	$(".header").removeClass("opacity-0");
	if ($("#primary-menu")) {
		$("#primary-menu").removeClass("hidden");
	}
	$("#primary-menu > ul > li > ul")
		.addClass("col-1")
		.wrap('<div class="header__primary__submenu"></div>')
		.wrap('<div class="container"></div>')
		.parent()
		.parent()
		.prev()
		.addClass("hasSubmenu");

	// Add the blank columns that we will populate with the stuff

	var numElements = 3; // Number of total elements including existing first column
	var container = $(".header__primary__submenu .container"); // Target container element

	for (var i = 1; i < numElements; i++) {
		var className = "col-" + (i + 1); // Create class name with increasing number
		var newElement = $("<ul>"); // Create new element with the class
		container.append(newElement); // Append the new element to the container
	}
	$(".mobileHeader__menu__allCategories").on("click", function ($event) {
		$event.preventDefault();
		$menu = $(".mobileHeader__primary");
		$(".mobileHeader__primary").css("min-height", 0);

		$(this).removeClass("active");
		if ($menu.hasClass("move2")) {
			$menu.removeClass("move2").addClass("move");
		}
		if ($menu.hasClass("move")) {
			$menu.removeClass("move");
		}

		$(
			".mobileHeader__primary__colTwo li, mobileHeader__primary__colThree li, mobileHeader__primary__colFour li"
		).removeClass("active");
	});
	$("#mobile-primary-menu")
		.append('<ul class="mobileHeader__primary__colTwo">')
		.append('<ul class="mobileHeader__primary__colThree">')
		.append('<ul class="mobileHeader__primary__colFour">');
	let previousSelectorMobile = null;
	// const shouldAnimate = false;

	$("#mobile-primary-menu").on("click", "a", function () {
		const currentSelector = this;

		if (currentSelector !== previousSelectorMobile) {
			const $nextList = $(this).next("ul");

			if ($nextList.length && $nextList.is("ul")) {
				const $grandparent = $(this).parent().parent(); // Get the grandparent element
				$grandparent.find("li").removeClass("active");
				$(this).parent().addClass("active");

				let classes = "mobileHeader__primary__colTwo"; // Default value for classes

				let setMinHeight = true;

				let changeCta = false;

				if ($grandparent.hasClass("mobileHeader__primary__colTwo")) {
					classes = "mobileHeader__primary__colThree";
					$(".mobileHeader__primary").addClass("move");
					$(".mobileHeader__primary__colFour").empty();
					$grandparent.parent().prev().addClass("active");
				} else if ($grandparent.hasClass("mobileHeader__primary__colOne")) {
					classes = "mobileHeader__primary__colTwo";
					$(".mobileHeader__primary__colThree").empty();
					$(".mobileHeader__primary__colFour").empty();
					changeCta = true;
					setMinHeight = false;
				} else if ($grandparent.hasClass("mobileHeader__primary__colThree")) {
					classes = "mobileHeader__primary__colFour";
					$(".mobileHeader__primary").removeClass("move");
					$(".mobileHeader__primary").addClass("move2");
				}

				const $clonedList = $nextList.clone(); // Clone the list
				const $existingList = $(this).parent().parent().next("ul"); // Select the existing list to be replaced
				let replacementHeight = "";
				//   if (shouldAnimate || $grandparent.hasClass("mobileHeader__primary__colOne")) {
				//   if (shouldAnimate) {
				// 	// Store the cloned element that will be used for replacement
				// 	const $replacementList = $("<ul>")
				// 	  .addClass(classes)
				// 	  .append($clonedList.contents());

				// 	// Set the initial opacity of the replacement list to 0 (hidden)
				// 	$replacementList.css("opacity", 0);

				// 	// Fade out the existing list slowly ('slow' duration)
				// 	$existingList.fadeOut(50, () => {
				// 	  // After fade out is complete, replace the list with the new div and fade it in quickly ('fast' duration)
				// 	  $existingList.replaceWith($replacementList);

				// 	           // Use promise() to wait for the fadeIn animation to complete
				// 			   $replacementList.promise().done(() => {
				// 				// Get the height of the replacement list after fadeIn animation
				// 				const replacementHeight = $replacementList.outerHeight();

				// 				// Set the min-height of 'mobileHeader__primary' to the height of the replacement list
				// 				$('.mobileHeader__primary').css('min-height', replacementHeight);
				// 			  });

				// 			  // Fade in the replacement list quickly ('fast' duration)
				// 			  $replacementList.animate({ opacity: 1 }, "fast");
				// 			});
				//   } else {
				// If shouldAnimate is false, replace the list without animation

				$existingList.empty().append($clonedList.contents());

				// Get the height of the replacement list
				$(this).parent().parent().next("ul").css("position", "static");
				replacementHeight = $(this).parent().parent().next("ul").outerHeight();
				$(this).parent().parent().next("ul").css("position", "");

				// Set the min-height of 'mobileHeader__primary' to the height of the replacement list

				// Get the existing min-height of 'mobileHeader__primary'
				const existingMinHeight = parseInt(
					$(".mobileHeader__primary").css("min-height")
				);

				// Check if the existing min-height is less than the replacementHeight
				if (existingMinHeight < replacementHeight && setMinHeight) {
					// Set the min-height of 'mobileHeader__primary' to the height of the replacement list
					$(".mobileHeader__primary").css("min-height", replacementHeight);
				}
				//   }

				console.log("replacementHeight: ", replacementHeight);
				console.log("$clonedList", $clonedList);

				// Update the previousSelector with the current selector
				previousSelectorMobile = currentSelector;

				const $cta = $nextList.find(".menu-item.cta");
				console.log("$nextList", $nextList);
				console.log("cta", $cta);

				const $ctaHolder = $(".mobileHeader__cta");
				if (changeCta) {
					if ($cta.length > 0 && $cta.hasClass("cta")) {
						console.log("TRUEEEEEEE");

						const $clonedCta = $cta.clone();
						$ctaHolder.replaceWith(
							$("<div>")
								.addClass("mobileHeader__cta")
								.append($clonedCta.contents())
						);
					} else {
						$ctaHolder.replaceWith($("<div>").addClass("mobileHeader__cta"));

						console.log("NOT TRUEEEEEEE");
					}
				}
			}
		}
	});

	// Find the list item with the selector '.header__primary__submenu .menu-item.cta'
	var listItem = $(".header__primary__submenu .menu-item.cta");

	// Move the list item into its parent element and change it to a div
	if (listItem.length) {
		var parentElement = listItem.parent().parent(); // Get the parent element
		listItem.remove(); // Remove the list item from its current position
		var newDiv = $("<div>")
			.addClass("menuCallToAction")
			.append(listItem.contents()); // Create a new div and append the contents of the list item
		parentElement.append(newDiv); // Append the new div to the parent element
	}
	// Find the list item with the selector '.header__primary__submenu .menu-item.cta'
	// var mobileCtaListItem = $(".mobileHeader__primary .menu-item.cta");

	// // Move the list item into its parent element and change it to a div
	// if (mobileCtaListItem.length) {

	// 	var parentElement = mobileCtaListItem.parent().parent().parent(); // Get the parent element
	// 	mobileCtaListItem.remove(); // Remove the list item from its current position
	// 	var newDiv = $("<div>")
	// 		.addClass("menuCallToAction")
	// 		.append(mobileCtaListItem.contents()); // Create a new div and append the contents of the list item
	// 	parentElement.append(newDiv); // Append the new div to the parent element
	// }

	// Open the first one automatically - for development

	// $(".header__primary__submenu:first").addClass("active");

	// $('.header__primary__submenu > div > ul > li > ul:first').addClass('active');

	const breakpoint = 920;
	const menuDesktop = () => {
		$(".header__primary > ul > li > a.hasSubmenu").on(
			"click",
			function ($event) {
				if (window.innerWidth >= breakpoint) {
					$event.preventDefault();

					const $next = $(this).next();

					let wasActive = false;
					if ($next.hasClass("active")) {
						wasActive = true;
					}
					$(".header__primary__submenu")
						.removeClass("active")
						.prev()
						.removeClass("active");
					$(".header").removeClass("menuOpen");

					if (!wasActive) {
						$(this).addClass("active");
						$next.addClass("active");
						$(".header").addClass("menuOpen");
					}
				}
			}
		);

		var leaveTimeout;
		$(".header__primary__submenu").on("mouseleave", function () {
			if (window.innerWidth >= breakpoint) {
				var $submenu = $(this);
				clearTimeout(leaveTimeout);
				leaveTimeout = setTimeout(function () {
					$submenu.removeClass("active").prev().removeClass("active");

					$(".header").removeClass("menuOpen");
				}, 350); // Adjust the delay time in milliseconds (e.g., 500ms)
			}
		});

		let shouldAnimate = true; // Set this variable to true or false based on your requirement
		let previousSelector = null; // Variable to store the previously hovered selector

		$(".header__primary__submenu").on("click", "a", function () {
			const currentSelector = this;

			if (currentSelector !== previousSelector) {
				const $nextList = $(this).next("ul");

				if ($nextList.length && $nextList.is("ul")) {
					console.log("Bang!", this);
					// const classes = $nextList.attr('class');
					const $grandparent = $(this).parent().parent(); // Get the grandparent element
					$grandparent.find("li").removeClass("active");
					$(this).parent().addClass("active");

					let classes = "col-2"; // Default value for classes
					if ($grandparent.hasClass("col-2")) {
						classes = "col-3"; // If grandparent has class 'col-2', update classes to 'col-3'
					} else if ($grandparent.hasClass("col-1")) {
						classes = "col-2"; // If grandparent has class 'col-1', update classes to 'col-2'
						// Clear the content from all 'col-3' elements
						$(".col-3").empty().removeClass("col-3");
					}
					const $clonedList = $nextList.clone(); // Clone the list

					const $existingList = $(this).parent().parent().next("ul"); // Select the existing list to be replaced

					if (shouldAnimate) {
						// Store the cloned element that will be used for replacement
						const $replacementList = $("<ul>")
							.addClass(classes)
							.append($clonedList.contents());

						// Set the initial opacity of the replacement list to 0 (hidden)
						$replacementList.css("opacity", 0);

						// Fade out the existing list slowly ('slow' duration)
						$existingList.fadeOut(50, () => {
							// After fade out is complete, replace the list with the new div and fade it in quickly ('fast' duration)
							$existingList.replaceWith($replacementList);

							// Fade in the replacement list quickly ('fast' duration)
							$replacementList.animate({ opacity: 1 }, "fast");
						});
					} else {
						// If shouldAnimate is false, replace the list without animation
						$existingList.replaceWith(
							$("<ul>").addClass(classes).append($clonedList.contents())
						);
					}

					// Update the previousSelector with the current selector
					previousSelector = currentSelector;
				}
			}
		});
		$(".header__primary__submenu > div > ul > li:first >  a ").click(); // Open the first menu automatically
		$(".mobileHeader__primary__colOne > li:first >  a ").click(); // Open the first menu automatically
	};
	menuDesktop();
	const menuMobile = () => {
		$(".header__primary__submenu__back").on("click", function () {
			$(this).parent().parent().removeClass("active");
			$(".header").removeClass("menuOpen");
		});

		$(".header__primary > ul > li > a.hasSubmenu").on(
			"click",
			function ($event) {
				$event.preventDefault();
				const $next = $(this).next();
				if (window.innerWidth < breakpoint) {
					$next.addClass("active");
					$(".header").addClass("menuOpen");
				}
			}
		);

		$(".toggleMenu__wrapper").on("click", function () {
			// const $this = $(this).find('.toggleMenu');
			const $this = $(this);
			if ($this.hasClass("toggle")) {
				$this.removeClass("toggle");
				$(".mobileHeader__menu").removeClass("active");
				// $(".mobileHeader__menu").slideUp(300);
			} else {
				$this.addClass("toggle");
				$(".mobileHeader__menu").addClass("active");
				// $(".mobileHeader__menu").slideDown(300);
			}
		});
	};
	menuMobile();

	if ($(".mainstage")) {
		const count = $(".mainstage").data("count");
		let dots = true;
		console.log(count);
		if (count < 2) {
			dots = false;
		} else {
			$(".mainstage").slick({
				autoplay: false,
				arrows: false,
				dots: dots,
				fade: false,
				draggable: true,
				adaptiveHeight: true,
				autofocusVideos: true,
			});
		}

		const options = {};

		const lightbox = GLightbox({
			...options,
		});
	}
	if ($(".comparison__more-open")[0]) {
		console.log("comparison block");
		$(".comparison__more-open").on("click", function (event) {
			event.preventDefault();
			var $block = $(this).closest(".comparison");
			if ($(this).hasClass("active")) {
				$(this).removeClass("active");
				$block.removeClass("active");
			} else {
				$(this).addClass("active");
				$block.addClass("active");
			}
		});

		$(".comparison__more-open--mobile").on("click", function (event) {
			event.preventDefault();
			var $block = $(this).parent().prev();
			if ($(this).hasClass("active")) {
				$(this).removeClass("active");
				$block.removeClass("active");
			} else {
				$(this).addClass("active");
				$block.addClass("active");
			}
		});
	}
	if ($(".image-pathways__more-open")[0]) {
		console.log("pathways");

		$(".image-pathways__more-open").on("click", function (event) {
			event.preventDefault(); // Prevents the default link behavior (e.g., following the href)

			var clickedItem = $(this).data("item"); // Get the data-item value of the clicked link
			var contentToShow = $(
				'.image-pathways__more-content[data-item="' + clickedItem + '"]'
			);

			// Check if the content is currently visible or hidden
			if (contentToShow.is(":visible")) {
				// If the content is visible, slide up to hide it

				$(this).removeClass("active");
				contentToShow.slideUp();
			} else {
				// If the content is hidden, slide down to show it
				$(this).addClass("active");
				contentToShow.slideDown();
			}
		});
	}

	if ($(".accordion")[0]) {
		$(".accordion__title").on("click", function (event) {
			event.preventDefault();
			const contentToShow = $(this).next();

			if (contentToShow.is(":visible")) {
				// If the content is visible, slide up to hide it
				$(this).removeClass("active");
				contentToShow.slideUp();
			} else {
				// If the content is hidden, slide down to show it
				$(this).addClass("active");
				contentToShow.slideDown();
			}
		});
		let openOne = false;
		if ($(".accordion--rates")[0]) {
			$(".accordion__title").first().click();
		}
	}

	// console.log('hello');
	// const scrollContent = $('.scroll-content');
	// const scrollStep = 300; // Adjust the step size as needed

	// $('.left-button').on('click', function() {

	// 	scrollContent.animate({
	// 		scrollLeft: '-=' + scrollStep
	// 	}, 300);
	// });

	// $('.right-button').on('click', function() {
	// 	console.log('click');
	// 	scrollContent.animate({
	// 		scrollLeft: '+=' + scrollStep
	// 	}, 300);
	// });

	if ($(".featured-rates")[0]) {
		$(".featured-rates__tab").click(function () {
			console.log("featured rates Click");
			if ($(this).hasClass("featured-rates__tab--active")) {
				return;
			} else {
				$(".featured-rates__tab").removeClass("featured-rates__tab--active");
				$(this).addClass("featured-rates__tab--active");
				const target = "." + $(this).data("target");
				console.log(target);
				$(".featured-rates__show-hide").hide();
				$(target).fadeIn();
			}
		});
	}

	$('a[href$="#modal"]').on("click", function (event) {
		// Your event handling code here
		// This function will be executed when a matching link is clicked
		$(this).modal();
		return false;
	});

	if ($(".careers-carousel")[0]) {
		$(".careers-carousel__ticker").slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 0,
			speed: 5000,
			cssEase: "linear",
			responsive: [
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
					},
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
					},
				},
			],
		});
	}

	if ($(".careers-tst__grid")[0]) {
		$(".careers-tst__grid").slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 5000,
			speed: 200,
			arrows: true,
			responsive: [
				{
					breakpoint: 940,
					settings: {
						slidesToShow: 1,
					},
				},
				 
			],
		});
	}

	 

	//   if ($('.careers-carousel')[0]) {
	// 	const ticker = $('#ticker');
	// 	let isDragging = false;
	// 	let startOffset;
	// 	let animationFrame;
	// 	let animationDuration = 20000; // Updated duration to 20000 milliseconds
	// 	let currentPosition = 0; // Store the current position within the animation
	// 	let animationPaused = false; // Flag to track animation state
	// 	let animationStartTime = null; // Timestamp when animation starts
	// 	let pausedTime = 0; // Track total paused time
	// 	let animationPercent;

	// 	function pauseAnimation() {
	// 	  if (!animationPaused) {
	// 		ticker.css('animation-play-state', 'paused');
	// 		animationPaused = true;
	// 		console.log('Animation Paused');
	// 		animationStartTime = null; // Set animationStartTime to null when paused
	// 	  }
	// 	}

	// 	function resumeAnimation() {
	// 	  if (animationPaused) {
	// 		ticker.css('animation-play-state', 'running');
	// 		animationPaused = false;
	// 		console.log('Animation Resumed');
	// 		animationStartTime = Date.now() - pausedTime; // Adjust animationStartTime to account for paused time
	// 	  }
	// 	}

	// 	function updateAnimationProgress() {
	// 	  if (!animationPaused && animationStartTime !== null) {
	// 		const currentTime = Date.now();
	// 		const timeElapsed = currentTime - animationStartTime;
	// 		const relativeProgress = (timeElapsed % animationDuration) / animationDuration * 100;
	// 		console.log('Animation Progress (from Timer): ' + relativeProgress.toFixed(2) + '%');
	// 		return relativeProgress.toFixed(2);
	// 	  }
	// 	}

	// 	ticker.on('mousedown touchstart', function(e) {
	// 	  isDragging = true;
	// 	  startOffset = e.pageX || e.originalEvent.touches[0].pageX;
	// 	  ticker.addClass('grabbing');
	// 	  cancelAnimationFrame(animationFrame);
	// 	  pauseAnimation(); // Pause animation when dragging starts
	// 	  console.log('Drag Start');
	// 	});

	// 	$(document).on('mouseup touchend', function() {
	// 	  if (isDragging) {
	// 		isDragging = false;
	// 		ticker.removeClass('grabbing');
	// 		console.log('Drag End');
	// 		const delta = currentPosition % animationDuration;
	// 		currentPosition += delta; // Align currentPosition with animation cycle
	// 		pausedTime += Date.now() - animationStartTime; // Update pausedTime
	// 		animationStartTime = null; // Reset animationStartTime
	// 		resumeAnimation(); // Resume animation when dragging ends
	// 	  }
	// 	});

	// 	$(document).on('mousemove touchmove', function(e) {
	// 	  if (isDragging) {
	// 		e.preventDefault();
	// 		const x = e.pageX || e.originalEvent.touches[0].pageX;
	// 		const delta = x - startOffset;
	// 		const percentage = (delta / ticker.width()) * 100;
	// 		const newPosition = (percentage / 100) * animationDuration + currentPosition;

	// 		ticker.css('animation-delay', `${(newPosition - currentPosition) % animationDuration}ms`);
	// 		console.log('Dragging to ' + newPosition, (newPosition - currentPosition) % animationDuration);
	// 	  }
	// 	});

	// 	ticker.on('animationiteration', function() {
	// 	  // When the animation completes one iteration (cycle), update the current position
	// 	  currentPosition += animationDuration;
	// 	  animationStartTime = Date.now(); // Reset animation start time on iteration
	// 	});

	// 	// Start the animation timer
	// 	setInterval(updateAnimationProgress, 100);
	//   }
});
