/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/src/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/src/js/main.js":
/*!*******************************!*\
  !*** ./assets/src/js/main.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _test__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../test */ "./assets/src/test/index.js");
/* harmony import */ var _test__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_test__WEBPACK_IMPORTED_MODULE_0__);
// main.js
// Webpack

jQuery(document).ready(function () {
  // Links
  //
  // Links - Navigation
  var medecins_link = jQuery("#chp_nav_medecins_link");
  var cliniques_link = jQuery("#chp_nav_cliniques_link");
  var navbar = jQuery("#chp_nav"); //
  //
  // Links - Consignes

  var c_pre_link = jQuery("#c_pre_o");
  var c_post_link = jQuery("#c_post_o"); // Dropdowns

  var medecins_nav = jQuery("#chp_nav_medecins");
  var cliniques_nav = jQuery("#chp_nav_cliniques"); // Consignes

  var c_pre_content = jQuery("#c_pre_o_content");
  var c_post_content = jQuery("#c_post_o_content");
  medecins_link.hover(function () {
    cliniques_nav.hide();
    medecins_nav.show();
  });
  cliniques_link.hover(function () {
    medecins_nav.hide();
    cliniques_nav.show();
  });
  c_pre_link.on("click", function () {
    c_pre_content.toggle();
  });
  c_post_link.on("click", function () {
    c_post_content.toggle();
  });
  navbar.hover(function () {
    return null;
  }, function () {
    medecins_nav.hide();
    cliniques_nav.hide();
  });
});

/***/ }),

/***/ "./assets/src/test/index.js":
/*!**********************************!*\
  !*** ./assets/src/test/index.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Navigation
jQuery( document ).ready(function() {
    // Links
    const medecins_link = jQuery("#chp_nav_medecins_link");
    const cliniques_link = jQuery("#chp_nav_cliniques_link");
    const navbar = jQuery("#chp_nav");

    // Dropdowns
    const medecins_nav = jQuery("#chp_nav_medecins");
    const cliniques_nav = jQuery("#chp_nav_cliniques");

    medecins_link.hover(() => {
        cliniques_nav.hide();
        medecins_nav.show();
    });

    cliniques_link.hover(() => {
        medecins_nav.hide();
        cliniques_nav.show();
    });

    navbar.hover(() => {
        return null;
    }, () => {
        medecins_nav.hide();
        cliniques_nav.hide();
    })
});

/***/ })

/******/ });
//# sourceMappingURL=main.js.map