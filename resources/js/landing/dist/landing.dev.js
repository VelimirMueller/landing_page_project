"use strict";

// animate helper - calls TW Animation class, works with multiple class childs
var vAnimateHelper = function vAnimateHelper(event, element, value) {
  var v = document.getElementsByClassName(element); // className Selector

  var _loop = function _loop(i) {
    //forloop 0 - lenght of DOM array
    v[i].addEventListener(event, function () {
      v[i].classList.add(value); // Add tw animation class name to v[i]

      setTimeout(function () {
        // Start timeout function to automatically stop bounce animation
        v[i].classList.remove(value);
      }, 1500); //End timeout function
    });
  };

  for (var i = 0; i < document.getElementsByClassName(element).length; i++) {
    _loop(i);
  }
}; // End Animate Helper


vAnimateHelper('mouseenter', 'hover-bounce-images', 'animate-bounce'); // Start function 

vAnimateHelper('mouseenter', 'login-button-hero', 'animate-bounce'); // Start function 

var progressBarFiller = function progressBarFiller(progressBarId) {
  // Start fill progress bar function
  var progress = 100;
  var invervalSpeed = 25;
  var incrementSpeed = 1;
  var bar = document.getElementById(progressBarId);
  progressInterval = setInterval(function () {
    progress += incrementSpeed;
    bar.style.width = progress + "%";

    if (progress >= 100) {
      clearInterval(progressInterval);
    }
  }, invervalSpeed);
  console.log(progress);
}; // End fill progress bar function


var fillProgressBar = function fillProgressBar() {
  document.getElementById('bar-event-starter').addEventListener('pointerenter', function doit() {
    progressBarFiller('bar');
    featuresFadeIn();
  });
};

var featuresFadeIn = function featuresFadeIn() {
  var classList = document.getElementsByClassName('featuresValues');

  var _loop2 = function _loop2(i) {
    setTimeout(function () {
      classList[i].classList.remove('opacity-0');
    }, 10);
  };

  for (var i = 0; i < classList.length; i++) {
    _loop2(i);
  }
};

fillProgressBar();

var autoScrollWindow = function autoScrollWindow(yOffSet, behaviour) {
  window.scrollTo({
    top: yOffset,
    behavior: behaviour
  });
};