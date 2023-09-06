/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }
function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
// Navigation toggle
window.addEventListener("load", function () {
  var main_navigation = document.querySelector("#primary-menu");
  document.querySelector("#primary-menu-toggle").addEventListener("click", function (e) {
    e.preventDefault();
    main_navigation.classList.toggle("hidden");
  });
});
jQuery(document).ready(function ($) {
  $(".header").removeClass("opacity-0");
  if ($("#primary-menu")) {
    $("#primary-menu").removeClass("hidden");
  }
  $("#primary-menu > ul > li > ul").addClass("col-1").wrap('<div class="header__primary__submenu"></div>').wrap('<div class="container"></div>').parent().parent().prev().addClass("hasSubmenu");

  // Add the blank columns that we will populate with the stuff

  var numElements = 3; // Number of total elements including existing first column
  var container = $(".header__primary__submenu .container"); // Target container element

  for (var i = 1; i < numElements; i++) {
    var className = "col-" + (i + 1); // Create class name with increasing number
    var newElement = $("<ul>"); // Create new element with the class
    container.append(newElement); // Append the new element to the container
  }

  $('.mobileHeader__menu__allCategories').on('click', function ($event) {
    $event.preventDefault();
    $menu = $('.mobileHeader__primary');
    $('.mobileHeader__primary').css('min-height', 0);
    $(this).removeClass('active');
    if ($menu.hasClass('move2')) {
      $menu.removeClass('move2').addClass('move');
    }
    if ($menu.hasClass('move')) {
      $menu.removeClass('move');
    }
    $('.mobileHeader__primary__colTwo li, mobileHeader__primary__colThree li, mobileHeader__primary__colFour li').removeClass('active');
  });
  $('#mobile-primary-menu').append('<ul class="mobileHeader__primary__colTwo">').append('<ul class="mobileHeader__primary__colThree">').append('<ul class="mobileHeader__primary__colFour">');
  var previousSelectorMobile = null;
  // const shouldAnimate = false;

  $('#mobile-primary-menu').on("click", "a", function () {
    var currentSelector = this;
    if (currentSelector !== previousSelectorMobile) {
      var $nextList = $(this).next("ul");
      if ($nextList.length && $nextList.is("ul")) {
        var $grandparent = $(this).parent().parent(); // Get the grandparent element
        $grandparent.find('li').removeClass('active');
        $(this).parent().addClass("active");
        var classes = "mobileHeader__primary__colTwo"; // Default value for classes

        var setMinHeight = true;
        var changeCta = false;
        if ($grandparent.hasClass("mobileHeader__primary__colTwo")) {
          classes = "mobileHeader__primary__colThree";
          $('.mobileHeader__primary').addClass('move');
          $('.mobileHeader__primary__colFour').empty();
          $grandparent.parent().prev().addClass('active');
        } else if ($grandparent.hasClass("mobileHeader__primary__colOne")) {
          classes = "mobileHeader__primary__colTwo";
          $('.mobileHeader__primary__colThree').empty();
          $('.mobileHeader__primary__colFour').empty();
          changeCta = true;
          setMinHeight = false;
        } else if ($grandparent.hasClass("mobileHeader__primary__colThree")) {
          classes = "mobileHeader__primary__colFour";
          $('.mobileHeader__primary').removeClass('move');
          $('.mobileHeader__primary').addClass('move2');
        }
        var $clonedList = $nextList.clone(); // Clone the list
        var $existingList = $(this).parent().parent().next("ul"); // Select the existing list to be replaced
        var replacementHeight = '';
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
        $(this).parent().parent().next("ul").css('position', 'static');
        replacementHeight = $(this).parent().parent().next("ul").outerHeight();
        $(this).parent().parent().next("ul").css('position', '');

        // Set the min-height of 'mobileHeader__primary' to the height of the replacement list

        // Get the existing min-height of 'mobileHeader__primary'
        var existingMinHeight = parseInt($('.mobileHeader__primary').css('min-height'));

        // Check if the existing min-height is less than the replacementHeight
        if (existingMinHeight < replacementHeight && setMinHeight) {
          // Set the min-height of 'mobileHeader__primary' to the height of the replacement list
          $('.mobileHeader__primary').css('min-height', replacementHeight);
        }
        //   }

        console.log('replacementHeight: ', replacementHeight);
        console.log('$clonedList', $clonedList);

        // Update the previousSelector with the current selector
        previousSelectorMobile = currentSelector;
        var $cta = $nextList.find('.menu-item.cta');
        console.log('$nextList', $nextList);
        console.log('cta', $cta);
        var $ctaHolder = $('.mobileHeader__cta');
        if (changeCta) {
          if ($cta.length > 0 && $cta.hasClass('cta')) {
            console.log('TRUEEEEEEE');
            var $clonedCta = $cta.clone();
            $ctaHolder.replaceWith($('<div>').addClass('mobileHeader__cta').append($clonedCta.contents()));
          } else {
            $ctaHolder.replaceWith($('<div>').addClass('mobileHeader__cta'));
            console.log('NOT TRUEEEEEEE');
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
    var newDiv = $("<div>").addClass("menuCallToAction").append(listItem.contents()); // Create a new div and append the contents of the list item
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

  var breakpoint = 920;
  var menuDesktop = function menuDesktop() {
    $(".header__primary > ul > li > a.hasSubmenu").on("click", function ($event) {
      if (window.innerWidth >= breakpoint) {
        $event.preventDefault();
        var $next = $(this).next();
        var wasActive = false;
        if ($next.hasClass("active")) {
          wasActive = true;
        }
        $(".header__primary__submenu").removeClass("active").prev().removeClass('active');
        $(".header").removeClass("menuOpen");
        if (!wasActive) {
          $(this).addClass('active');
          $next.addClass("active");
          $(".header").addClass("menuOpen");
        }
      }
    });
    var leaveTimeout;
    $(".header__primary__submenu").on("mouseleave", function () {
      if (window.innerWidth >= breakpoint) {
        var $submenu = $(this);
        clearTimeout(leaveTimeout);
        leaveTimeout = setTimeout(function () {
          $submenu.removeClass("active").prev().removeClass('active');
          $(".header").removeClass("menuOpen");
        }, 350); // Adjust the delay time in milliseconds (e.g., 500ms)
      }
    });

    var shouldAnimate = true; // Set this variable to true or false based on your requirement
    var previousSelector = null; // Variable to store the previously hovered selector

    $(".header__primary__submenu").on("click", "a", function () {
      var currentSelector = this;
      if (currentSelector !== previousSelector) {
        var $nextList = $(this).next("ul");
        if ($nextList.length && $nextList.is("ul")) {
          console.log("Bang!", this);
          // const classes = $nextList.attr('class');
          var $grandparent = $(this).parent().parent(); // Get the grandparent element
          $grandparent.find('li').removeClass('active');
          $(this).parent().addClass("active");
          var classes = "col-2"; // Default value for classes
          if ($grandparent.hasClass("col-2")) {
            classes = "col-3"; // If grandparent has class 'col-2', update classes to 'col-3'
          } else if ($grandparent.hasClass("col-1")) {
            classes = "col-2"; // If grandparent has class 'col-1', update classes to 'col-2'
            // Clear the content from all 'col-3' elements
            $('.col-3').empty().removeClass('col-3');
          }
          var $clonedList = $nextList.clone(); // Clone the list

          var $existingList = $(this).parent().parent().next("ul"); // Select the existing list to be replaced

          if (shouldAnimate) {
            // Store the cloned element that will be used for replacement
            var $replacementList = $("<ul>").addClass(classes).append($clonedList.contents());

            // Set the initial opacity of the replacement list to 0 (hidden)
            $replacementList.css("opacity", 0);

            // Fade out the existing list slowly ('slow' duration)
            $existingList.fadeOut(50, function () {
              // After fade out is complete, replace the list with the new div and fade it in quickly ('fast' duration)
              $existingList.replaceWith($replacementList);

              // Fade in the replacement list quickly ('fast' duration)
              $replacementList.animate({
                opacity: 1
              }, "fast");
            });
          } else {
            // If shouldAnimate is false, replace the list without animation
            $existingList.replaceWith($("<ul>").addClass(classes).append($clonedList.contents()));
          }

          // Update the previousSelector with the current selector
          previousSelector = currentSelector;
        }
      }
    });
    $('.header__primary__submenu > div > ul > li:first >  a ').click(); // Open the first menu automatically
    $('.mobileHeader__primary__colOne > li:first >  a ').click(); // Open the first menu automatically
  };

  menuDesktop();
  var menuMobile = function menuMobile() {
    $(".header__primary__submenu__back").on("click", function () {
      $(this).parent().parent().removeClass("active");
      $(".header").removeClass("menuOpen");
    });
    $(".header__primary > ul > li > a.hasSubmenu").on("click", function ($event) {
      $event.preventDefault();
      var $next = $(this).next();
      if (window.innerWidth < breakpoint) {
        $next.addClass("active");
        $(".header").addClass("menuOpen");
      }
    });
    $(".toggleMenu__wrapper").on("click", function () {
      // const $this = $(this).find('.toggleMenu');
      var $this = $(this);
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
  if ($('.mainstage')) {
    var count = $('.mainstage').data('count');
    var dots = true;
    console.log(count);
    if (count < 2) {
      dots = false;
    } else {
      $('.mainstage').slick({
        autoplay: false,
        arrows: false,
        dots: dots,
        fade: false,
        draggable: true,
        adaptiveHeight: true,
        autofocusVideos: true
      });
    }
    var options = {};
    var lightbox = GLightbox(_objectSpread({}, options));
  }
  if ($('.comparison__more-open')[0]) {
    console.log('comparison block');
    $('.comparison__more-open').on('click', function (event) {
      event.preventDefault();
      var $block = $(this).closest('.comparison');
      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $block.removeClass('active');
      } else {
        $(this).addClass('active');
        $block.addClass('active');
      }
    });
    $('.comparison__more-open--mobile').on('click', function (event) {
      event.preventDefault();
      var $block = $(this).parent().prev();
      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $block.removeClass('active');
      } else {
        $(this).addClass('active');
        $block.addClass('active');
      }
    });
  }
  if ($('.image-pathways__more-open')[0]) {
    console.log('pathways');
    $('.image-pathways__more-open').on('click', function (event) {
      event.preventDefault(); // Prevents the default link behavior (e.g., following the href)

      var clickedItem = $(this).data('item'); // Get the data-item value of the clicked link
      var contentToShow = $('.image-pathways__more-content[data-item="' + clickedItem + '"]');

      // Check if the content is currently visible or hidden
      if (contentToShow.is(':visible')) {
        // If the content is visible, slide up to hide it

        $(this).removeClass('active');
        contentToShow.slideUp();
      } else {
        // If the content is hidden, slide down to show it
        $(this).addClass('active');
        contentToShow.slideDown();
      }
    });
  }
  if ($('.accordion')[0]) {
    $('.accordion__title').on('click', function (event) {
      event.preventDefault();
      var contentToShow = $(this).next();
      if (contentToShow.is(':visible')) {
        // If the content is visible, slide up to hide it
        $(this).removeClass('active');
        contentToShow.slideUp();
      } else {
        // If the content is hidden, slide down to show it
        $(this).addClass('active');
        contentToShow.slideDown();
      }
    });
    var openOne = false;
    if ($('.accordion--rates')[0]) {
      $('.accordion__title').first().click();
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

  if ($('.featured-rates')[0]) {
    $('.featured-rates__tab').click(function () {
      console.log('featured rates Click');
      if ($(this).hasClass('featured-rates__tab--active')) {
        return;
      } else {
        $('.featured-rates__tab').removeClass('featured-rates__tab--active');
        $(this).addClass('featured-rates__tab--active');
        var target = '.' + $(this).data('target');
        console.log(target);
        $('.featured-rates__show-hide').hide();
        $(target).fadeIn();
      }
    });
  }
  $('a[href$="#modal"]').on('click', function (event) {
    // Your event handling code here
    // This function will be executed when a matching link is clicked
    $(this).modal();
    return false;
  });
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/editor-style.css":
/*!****************************************!*\
  !*** ./resources/css/editor-style.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/editor-style": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunktailpress"] = self["webpackChunktailpress"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/editor-style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;