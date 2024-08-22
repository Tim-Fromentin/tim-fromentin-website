const loader = document.querySelector("#window-loader")


window.addEventListener("load", loaderFunct)
document.addEventListener("DOMContentLoaded", loaderFunct)

function loaderFunct(){
  loader.style.display = 'none'
}



new Typewriter('#typewriter-effect', {
    strings: ['Développeur web...', 'WebDesigner...','HTML', 'CSS','JS'],
    autoStart: true,
    cursor: ''
  });


  const title = document.querySelectorAll('#sec-landing-page h1.title');
  const img = document.querySelector("#sec-landing-page img");
  
  window.addEventListener('load', () => {
      var tl = gsap.timeline();
  
      tl.to(title, { duration: 0, x: "-1000px" }) // Déplacer le titre hors de l'écran vers la gauche
        .to(title, { duration: 2, x: 0 }); // Ramener le titre à sa position initiale
  
      tl.to(img, {duration: 0, y: "-1000px"}, 0) // Déplacer l'image hors de l'écran vers le haut (départ simultané avec le titre)
        .to(img, {duration: 2, y: 0}, 0); // Ramener l'image à sa position initiale
  
      tl.play();
  });
  



