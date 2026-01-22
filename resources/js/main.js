"use strict";

// ----------------------------
// Sticky navbar
// ----------------------------
window.addEventListener('scroll', function() {
    let scroll = window.scrollY;
    const nav = document.querySelector('nav');

    if (scroll > 200) {
        nav.classList.add('sticky');
    } else {
        nav.classList.remove('sticky');
    }
});
