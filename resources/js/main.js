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

// ----------------------------
// Zone de progression
// ----------------------------
window.addEventListener('scroll', () => {
  const circle = document.getElementById('scroll-indicator');
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const scrollPercent = (scrollTop / docHeight) * 100;
  const color = 'green';
  const arrow = document.querySelector('.scroll-arrow');

  circle.style.background = `conic-gradient(${color} ${scrollPercent}%, transparent 0%)`;

  //Mise à jour de la direction de la flèche :
  if (scrollPercent >= 98) {
    arrow.innerHTML = '&#8593;'; // flèche vers le haut ↑
  } else {
    arrow.innerHTML = '&#x2193;'; // flèche vers le bas ↓
  }

});

//---------------------------
// Cards-popup
//---------------------------
function showPopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) popup.style.display = "flex";
}

function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) popup.style.display = "none";
}

