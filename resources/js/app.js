// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
});
jQuery(document).ready(function ($) {

$('.header').removeClass('opacity-0');
if ($('#primary-menu')){
      $('#primary-menu').removeClass('hidden');
}
$("#primary-menu > ul > li > ul")
.addClass('col-1')
.wrap('<div class="header__primary__submenu"></div>')
.wrap('<div class="container"></div>')
.parent()
.parent()
.prev()
.addClass("hasSubmenu")

// Add the blank columns that we will populate with the stuff

var numElements = 2; // Number of total elements including existing first column
var container = $('.header__primary__submenu .container'); // Target container element

for (var i = 1; i < numElements; i++) {
  var className = 'col-' + (i + 1); // Create class name with increasing number
  var newElement = $('<ul>').addClass(className); // Create new element with the class
  container.append(newElement); // Append the new element to the container
}

// Find the list item with the selector '.header__primary__submenu .menu-item.cta'
var listItem = $('.header__primary__submenu .menu-item.cta');

// Move the list item into its parent element and change it to a div
if (listItem.length) {
  var parentElement = listItem.parent().parent(); // Get the parent element
  listItem.remove(); // Remove the list item from its current position
  var newDiv = $('<div>').addClass('menuCallToAction').append(listItem.contents()); // Create a new div and append the contents of the list item
  parentElement.append(newDiv); // Append the new div to the parent element
}

$('.header__primary__submenu .menu-item.cta')

// Open the first one automatically - for development

$('.header__primary__submenu:first').addClass('active');


// $('.header__primary__submenu > div > ul > li > ul:first').addClass('active');


const breakpoint = 920;
		const menuDesktop = () => {
                  $(".header__primary > ul > li > a.hasSubmenu").on("mouseenter", function ($event) {
                       if (window.innerWidth >= breakpoint){
                              
                              $event.preventDefault();
                         
					const $next = $(this).next();
            
					let wasActive = false;
					if ($next.hasClass("active")) {
						return;
					}
					$(".header__primary__submenu").removeClass("active");
					$(".header").removeClass("menuOpen");
					if (!wasActive) {
						$next.addClass("active");
						$(".header").addClass("menuOpen");
					} 
				 }
				});
				
				var leaveTimeout;
				$(".header__primary__submenu").on("mouseleave", function () {
					if (window.innerWidth >= breakpoint){

						var $submenu = $(this);
						clearTimeout(leaveTimeout);
						leaveTimeout = setTimeout(function () {
							// $submenu.removeClass("active");
							$(".header").removeClass("menuOpen");
						}, 250); // Adjust the delay time in milliseconds (e.g., 500ms)
					}
				});
		 
                  
                        let shouldAnimate = true; // Set this variable to true or false based on your requirement
                        let previousSelector = null; // Variable to store the previously hovered selector
                        
                        $('.header__primary__submenu a').on('mouseenter', function() {
                      
                          const currentSelector = this;
                        
                          if (currentSelector !== previousSelector) {
           
                        
                            const $nextList = $(this).next('ul');
                       
                            if ($nextList.length && $nextList.is('ul')) {
                              // const classes = $nextList.attr('class');
                              const classes = 'col-2';
                              const $clonedList = $nextList.clone(); // Clone the list
                        
                              const $existingList = $(this).parent().parent().next('ul'); // Select the existing list to be replaced
                        
                              if (shouldAnimate) {
                                // Store the cloned element that will be used for replacement
                                const $replacementList = $('<ul>').addClass(classes).append($clonedList.contents());
                        
                                // Set the initial opacity of the replacement list to 0 (hidden)
                                $replacementList.css('opacity', 0);
                        
                                // Fade out the existing list slowly ('slow' duration)
                                $existingList.fadeOut(50, () => {
                                  // After fade out is complete, replace the list with the new div and fade it in quickly ('fast' duration)
                                  $existingList.replaceWith($replacementList);
                        
                                  // Fade in the replacement list quickly ('fast' duration)
                                  $replacementList.animate({ opacity: 1 }, 'fast');
                                });
                              } else {
                                // If shouldAnimate is false, replace the list without animation
                                $existingList.replaceWith($('<ul>').addClass(classes).append($clonedList.contents()));
                              }
                        
                              // Update the previousSelector with the current selector
                              previousSelector = currentSelector;
                            }
                          }
                        });
		}
		  menuDesktop();



});
