/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

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

  // Find the list item with the selector '.header__primary__submenu .menu-item.cta'
  var listItem = $(".header__primary__submenu .menu-item.cta");

  // Move the list item into its parent element and change it to a div
  if (listItem.length) {
    var parentElement = listItem.parent().parent(); // Get the parent element
    listItem.remove(); // Remove the list item from its current position
    var newDiv = $("<div>").addClass("menuCallToAction").append(listItem.contents()); // Create a new div and append the contents of the list item
    parentElement.append(newDiv); // Append the new div to the parent element
  }

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
      if (window.innerWidth >= breakpoint) {
        var $submenu = $(this);
        clearTimeout(leaveTimeout);
        leaveTimeout = setTimeout(function () {
          $submenu.removeClass("active");
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
  };

  menuDesktop();
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