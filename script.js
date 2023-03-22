// Animation cercle icone
const containerMenu = document.querySelector(".container-menu");
const btnMenu = document.querySelector(".btn-menu");

btnMenu.addEventListener("click", () => {
  containerMenu.classList.toggle("active");
});

// Affichage modules
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
