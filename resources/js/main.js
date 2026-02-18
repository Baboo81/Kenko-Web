"use strict";

//-----------------------
// Librairie : Lucide
//-----------------------
document.addEventListener("DOMContentLoaded", () => {
    if(window.lucide) {
        lucide.createIcons();
    }
});

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
  const color = '#8ccece';
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
window.showPopup = function (popupId) {
    const popup = document.getElementById(popupId);
    if (popup) popup.style.display = "flex";
};

window.closePopup = function (popupId) {
    const popup = document.getElementById(popupId);
    if (popup) popup.style.display = "none";
};

// ----------------------------
// Trust Section : logos animation
// ----------------------------
document.addEventListener("DOMContentLoaded", () => {
    const logos = document.querySelectorAll(".logo");
    let index = 0;
    if (logos.length > 0) {
        setInterval(() => {
            logos[index].classList.remove("active");
            index = (index + 1) % logos.length;
            logos[index].classList.add("active");
        }, 3000);
    }
});

// ----------------------------
// Kenko : Footer
// ----------------------------
document.addEventListener('DOMContentLoaded', () => {
    const mapContainer = document.getElementById('mapid');

    if (!mapContainer || typeof L === 'undefined') return;
    if (mapContainer._leaflet_id) return;

    const map = L.map(mapContainer).setView([50.71036, 4.36889], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    L.marker([50.71036, 4.36889]).addTo(map);

    // ✅ Forcer Leaflet à recalculer la taille après que le div soit visible
    setTimeout(() => map.invalidateSize(), 200);
});


