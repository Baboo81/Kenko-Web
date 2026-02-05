import gsap from "gsap";

/* ================================
   CONFIG
================================ */

// Sélection de tous les blobs
const blobs = gsap.utils.toArray(".blob");

// Zone interdite (banner)
const banner = document.querySelector("#banner");

// Taille écran
let screenW = window.innerWidth;
let screenH = window.innerHeight;


/* ================================
   FONCTION COLLISION
   Détecte si 2 éléments se touchent
================================ */

function isColliding(a, b) {
    const ar = a.getBoundingClientRect();
    const br = b.getBoundingClientRect();

    return !(
        ar.right < br.left ||
        ar.left > br.right ||
        ar.bottom < br.top ||
        ar.top > br.bottom
    );
}


/* ================================
   INIT BLOB
   Position + direction aléatoire
================================ */

blobs.forEach((blob, index) => {

    const rect = blob.getBoundingClientRect();

    const blobW = rect.width;
    const blobH = rect.height;

    // Position de départ dans écran
    const startX = gsap.utils.random(0, screenW - blobW);
    const startY = gsap.utils.random(0, screenH - blobH);

    gsap.set(blob, {
        x: startX,
        y: startY
    });

    // Direction : moitié gauche / moitié droite
    let dirX = index % 2 === 0 ? 1 : -1;
    let dirY = gsap.utils.random([-1, 1]);


    /* ================================
       MOUVEMENT PRINCIPAL
    ================================= */

    function move() {

        // Distance aléatoire à parcourir
        const nextX = gsap.utils.random(100, 300) * dirX;
        const nextY = gsap.utils.random(50, 150) * dirY;

        gsap.to(blob, {

            x: `+=${nextX}`,
            y: `+=${nextY}`,

            duration: gsap.utils.random(6, 12),
            ease: "sine.inOut",

            /* ================================
               UPDATE → rebonds + collisions
            ================================= */
            onUpdate: () => {

                const bounds = blob.getBoundingClientRect();

                /* ----- Rebond bords écran ----- */

                if (bounds.left <= 0 || bounds.right >= screenW) {
                    dirX *= -1;
                }

                if (bounds.top <= 0 || bounds.bottom >= screenH) {
                    dirY *= -1;
                }

                /* ----- Collision banner ----- */

                if (banner && isColliding(blob, banner)) {

                    // Rebond vers le bas uniquement
                    dirY = 1;

                    gsap.to(blob, {
                        y: "+=150",
                        duration: 2,
                        ease: "power2.out"
                    });
                }

                /* ----- Collision cards ----- */

                document.querySelectorAll(".card").forEach(card => {

                    if (isColliding(blob, card)) {

                        // Effet compression
                        gsap.to(blob, {
                            scale: 0.8,
                            duration: 0.5,
                            yoyo: true,
                            repeat: 1,
                            ease: "power1.inOut"
                        });

                    }

                });

            },

            // Boucle infinie
            onComplete: move
        });
    }

    move();


    /* ================================
       ROTATION ORGANIQUE
    ================================= */

    gsap.to(blob, {
        rotate: gsap.utils.random(-360, 360),
        duration: gsap.utils.random(20, 40),
        repeat: -1,
        ease: "none"
    });

});
