// TODO ANIMATION ICONE
const containerMenu = document.querySelector(".container-menu");
const btnMenu = document.querySelector(".btn-menu");

btnMenu.addEventListener("click", () => {
  containerMenu.classList.toggle("active");
});

// TODO ANIMATION MODULE
window.onload = () => {
  // récupération de tous les boutons d'ouverture de modale
  const modalButtons = document.querySelectorAll("[data-toggle=modal]");
  for (let button of modalButtons) {
    button.addEventListener("click", function (e) {
      // empêche la navigation
      e.preventDefault();
      // récupération  du "data-target"
      let target = this.dataset.target;
      console.log(target);
      // récupération de la bonne modale
      let modal = document.querySelector(target);
      // affichage de la bonne modale
      modal.classList.add("active");
      // Fermeture modules
      // récupération des boutons de fermeture
      const modalClose = modal.querySelectorAll("#modal-trigger");
      for (let close of modalClose) {
        close.addEventListener("click", () => {
          modal.classList.remove("active");
        });
      }
    });
  }
};

// TODO ANIMATION SCROLLING
const allRonds = document.querySelectorAll(".circle-article");
const allBoxes = document.querySelectorAll(".article-timeline");

const controller = new ScrollMagic.Controller();

allBoxes.forEach((box) => {
  for (i = 0; i < allRonds.length; i++) {
    if (
      allRonds[i].getAttribute("data-anim") === box.getAttribute("data-anim")
    ) {
      let tween = gsap.from(box, { y: -50, opacity: 0, duration: 0.5 });

      let scene = new ScrollMagic.Scene({
        triggerElement: allRonds[i],
        reverse: false,
      })
        .setTween(tween)
        // .addIndicators()
        .addTo(controller);
    }
  }
});
