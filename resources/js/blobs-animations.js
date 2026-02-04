import gsap from "gsap";

//Blob 1 :
gsap.to("#blob1", {
    x: 1900,            // déplacement horizontal
    scale: 1.2,         // pulse
    opacity: 0.2,       // opacité
    duration: 19.5,
    repeat: -1,
    yoyo: true,         // droite-gauche
    transformOrigin: "50% 50%",
    ease: "power1.inOut"
});

gsap.to("#blob1", {
    rotate: 360,
    duration: 10,
    repeat: -1,
    ease: "linear",
});

//Blob 2 :
gsap.to("#blob2", {
    x: -1900,            // déplacement horizontal
    scale: 1.2,         // pulse
    opacity: 0.2,       // opacité
    duration: 19.5,
    repeat: -1,
    yoyo: true,         // droite-gauche
    transformOrigin: "50% 50%",
    ease: "power1.inOut"
});

gsap.to("#blob2", {
    rotate: 360,
    duration: 10,
    repeat: -1,
    ease: "linear",
});


