/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/javascript/index.js":
/*!*********************************!*\
  !*** ./src/javascript/index.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _sass_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../sass/styles.scss */ \"./src/sass/styles.scss\");\n\n\n(function ($) {\n  var initSemiStickyHeader = function initSemiStickyHeader() {\n    var scrollUp = 'scroll-up',\n        scrollDown = 'scroll-down';\n    var lastScroll = 0;\n    window.addEventListener('scroll', function () {\n      var body = document.body;\n      var currentScroll = window.pageYOffset;\n\n      if (currentScroll <= 0) {\n        body.classList.remove(scrollUp);\n        return false;\n      }\n\n      if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {\n        // down\n        body.classList.remove(scrollUp);\n        body.classList.add(scrollDown);\n      } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {\n        // up\n        body.classList.remove(scrollDown);\n        body.classList.add(scrollUp);\n      }\n\n      lastScroll = currentScroll;\n    });\n  };\n\n  $(document).ready(function () {\n    initSemiStickyHeader();\n    $('.owl-carousel').owlCarousel({\n      loop: false,\n      dots: true,\n      items: 1,\n      responsive: {\n        0: {\n          items: 1\n        },\n        600: {\n          items: 1\n        }\n      }\n    });\n    $('.hamburger').click(function () {\n      if ($(this).hasClass(\"actv\")) {\n        $(this).removeClass(\"actv\");\n        $('.main-nav').hide();\n      } else {\n        $(this).addClass(\"actv\");\n        $('.main-nav').show();\n      }\n    });\n  });\n})(jQuery);\n\n//# sourceURL=webpack://webpack/./src/javascript/index.js?");

/***/ }),

/***/ "./src/sass/styles.scss":
/*!******************************!*\
  !*** ./src/sass/styles.scss ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://webpack/./src/sass/styles.scss?");

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
/************************************************************************/
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
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/javascript/index.js");
/******/ 	
/******/ })()
;