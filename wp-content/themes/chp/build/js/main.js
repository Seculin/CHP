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
  var c_post_content = jQuery("#c_post_o_content"); // Icons

  var c_pre_o_icon = document.getElementById("c_pre_o_icon");
  var c_post_o_icon = document.getElementById("c_post_o_icon");
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

    if (c_pre_o_icon.classList.contains("icon-rotate")) {
      c_pre_o_icon.classList.remove("icon-rotate");
    } else {
      c_pre_o_icon.classList.add("icon-rotate");
    }
  });
  c_post_link.on("click", function () {
    c_post_content.toggle();

    if (c_post_o_icon.classList.contains("icon-rotate")) {
      c_post_o_icon.classList.remove("icon-rotate");
    } else {
      c_post_o_icon.classList.add("icon-rotate");
    }
  });
  navbar.hover(function () {
    return null;
  }, function () {
    medecins_nav.hide();
    cliniques_nav.hide();
  }); // --------------------------------------
  //
  // Pathologies

  var pathologies = document.getElementsByClassName("chp_pathology");
  var i;

  for (i = 0; i < pathologies.length; i++) {
    pathologies[i].addEventListener("click", function () {
      /* Toggle between adding and removing the "active" class,
      to highlight the button that controls the panel */
      this.classList.toggle("chp_pathology_active");
      /* Toggle between hiding and showing the active panel */

      var panel = this.nextElementSibling;

      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  } // --------------------------------------
  //
  // Mobile Navigation


  var nav_1_mobile = document.getElementById("chp_nav_1_mobile");
  nav_1_mobile.addEventListener("click", function () {
    this.classList.toggle("chp_nav_1_mobile_active");
    var panel = this.nextElementSibling;

    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
  var nav_main_mobile = document.getElementById("chp_mobile_nav_button");
  var nav_main_mobile_collapsible = document.getElementById("chp_mobile_navbar");
  nav_main_mobile.addEventListener("click", function () {
    this.classList.toggle("chp_mobile_nav_button_active");

    if (nav_main_mobile_collapsible.classList.contains("chp_mobile_navbar_show")) {
      nav_main_mobile_collapsible.classList.remove("chp_mobile_navbar_show");
    } else {
      nav_main_mobile_collapsible.classList.add("chp_mobile_navbar_show");
    }
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