"use strict";

document.addEventListener("DOMContentLoaded", function () {
// Dropdowns

var $dropdowns = getAll(".dropdown:not(.is-hoverable)");

if ($dropdowns.length > 0) {
  $dropdowns.forEach(function ($el) {
    $el.addEventListener("click", function (event) {
      event.stopPropagation();
      $el.classList.toggle("is-active");
    });
  });

  document.addEventListener("click", function (event) {
    closeDropdowns();
  });
}

function closeDropdowns() {
  $dropdowns.forEach(function ($el) {
    $el.classList.remove("is-active");
  });
}

// Toggles

var $burgers = getAll(".navbar-burger");

if ($burgers.length > 0) {
  $burgers.forEach(function ($el) {
    if (!$el.dataset.target) {
      return;
    }

    $el.addEventListener("click", function () {
      var target = $el.dataset.target;
      var $target = document.getElementById(target);
      $el.classList.toggle("is-active");
      $target.classList.toggle("is-active");
    });
  });
}

// Utils

function getAll(selector) {
  var parent =
    arguments.length > 1 && arguments[1] !== undefined
      ? arguments[1]
      : document;

  return Array.prototype.slice.call(parent.querySelectorAll(selector), 0);
}
});