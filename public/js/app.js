/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

// Menu Burger
if (window.matchMedia("(max-width: 1280px)").matches) {
  var displayMenu = function displayMenu() {
    menu_burger.style.transform = 'translateX(0)';
    burger.style.transform = 'translateX(500px)';
  };

  var displayyMenu = function displayyMenu() {
    menu_burger.style.transform = 'translateX(500px)';
    burger.style.transform = 'translateX(0)';
  }; //events on click


  var menu_burger = document.getElementById('menu-burger');
  var close = document.getElementById('x');
  var burger = document.getElementById('burger');
  burger.addEventListener('click', displayMenu);
  close.addEventListener('click', displayyMenu);
}

document.getElementById('next_inscription').addEventListener('click', function () {
  document.getElementById('content_inscription_1').style.display = "none";
  document.getElementById('content_inscription_2').style.display = "flex";
  document.getElementById('submit_inscription').style.display = "flex";
  document.getElementById('next_inscription').style.display = "none";
});
document.getElementById('back_inscription').addEventListener('click', function () {
  document.getElementById('content_inscription_1').style.display = "flex";
  document.getElementById('content_inscription_2').style.display = "none";
  document.getElementById('submit_inscription').style.display = "none";
  document.getElementById('next_inscription').style.display = "block";
}); // -------------------------------------------------------------------
// Inscription options 
// -------------------------------------------------------------------

var count_select = 1;


var btns_add = document.querySelectorAll(".add_option");
btns_add.forEach(function (btn) {
  btn.addEventListener('click', function () {
    var container = btn.parentElement.parentElement.id;
    AddOption(container);
  });
});
var btns_dlt = document.querySelectorAll(".dlt_option");
btns_dlt.forEach(function (btn) {
  btn.addEventListener('click', function () {
    var container = btn.parentElement.parentElement.id;
    DltOption(container);
  });
}); // Add Options Inscription

function AddOption(container) {
  var add = document.getElementById(container).getElementsByClassName('add_option')[0];
  var dlt = document.getElementById(container).getElementsByClassName('dlt_option')[0];
  var div = document.getElementById(container).getElementsByClassName('options')[0];
  var parent = document.getElementById(container).getElementsByClassName('content')[0];
  dlt.disabled = false; // Enable button delete

  dlt.style.filter = 'none'; // Remove grayscale

  var clone = div.cloneNode(true); // Clone div Soft skills
  count_select += 1;
  var select = clone.getElementsByTagName('select')[0];
  var attr = select.getAttribute('name');
  select.setAttribute('name',  attr.slice(0, -1) + count_select );
  

  parent.appendChild(clone); // Add the clone as a child of the parent

  var count = parent.getElementsByTagName('div').length; // Calculate the number of div in the parent

  if (count > 1) {
    // If there are more than 1 div, display the Delete button
    dlt.style.display = 'flex';
    

    if (count >= 3) {
      // If there are 3 or more div, disable button add (so there are 5 options max) & add grayscale
      add.disabled = true;
      add.style.filter = "grayscale(100%)";
    }
  }
} // Delete Option Inscription


function DltOption(container) {
  var add = document.getElementById(container).getElementsByClassName('add_option')[0];
  var dlt = document.getElementById(container).getElementsByClassName('dlt_option')[0];
  var parent = document.getElementById(container).getElementsByClassName('content')[0];
  var count = parent.getElementsByTagName('div').length;
  add.disabled = false; // Enable button Add
  count_select -= 1;
  add.style.filter = 'none'; // Remove grayscale 
  

  if (count > 1) {
    parent.removeChild(parent.lastChild); // Remove the last child of  the parent

    if (count == 2) {
      // If there are 1 div (2 because it will refresh when user click), disable button delete (so there is alway one div) & add grayscale
      dlt.disabled = true;
      dlt.style.filter = "grayscale(100%)";
    }
  }
}

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
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
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;