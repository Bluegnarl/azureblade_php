const a = document.querySelector("a"),
  parallax = document.querySelector(".parallax"),
  parallaxContainer = document.querySelector(".parallax-container"),
  modalsContainer = document.querySelector(".modals-container"),
  modalInfos = document.querySelector(".modal-infos"),
  modalEndings = document.querySelector(".modal-endings"),
  modalHelp = document.querySelector(".modal-help"),
  modalNewGame = document.querySelector(".modal-newgame"),
  modalLogin = document.querySelector(".modal-login"),
  modalSignup = document.querySelector(".modal-signup"),
  modalBackground = document.querySelector(".modal-background"),
  modalSubject = document.querySelectorAll(".modal-subject"),
  modalNavButton = document.querySelectorAll(".modal-nav-button"),
  arrowIcon = document.querySelectorAll(".arrow-icon"),
  endingsCounter = document.querySelector(".endings-counter");

// Parallax Effect for Background

let width = window.innerWidth / 2;
let height = window.innerHeight / 2;

window.addEventListener("resize", () => {
  width = window.innerWidth / 2;
  height = window.innerHeight / 2;
});

document.addEventListener("mousemove", (e) => {
  let x = e.clientX;
  let y = e.clientY;

  const posX = ((x - width) * -1) / 10;
  const posY = ((y - height) * -1) / 5;

  //   parallax.style.transform = `translate(${posX}px, ${posY}px)`;

  parallax.animate(
    { transform: `translate(${posX}px, ${posY}px)` },
    {
      duration: 7000,
      fill: "forwards",
    }
  );
});

// On Load Opacity 0 to 1

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    document.body.style.opacity = 1;
    parallaxContainer.style.opacity = 1;
  }, 100);
});

// Modal

function modal(modal) {
  switch (modal) {
    case "infos":
      modalsContainer.style.display = "flex";
      modalsContainer.style.alignItems = "flex-start";
      modalInfos.style.display = "flex";

      setTimeout(() => {
        modalInfos.style.transform = "translateY(0)";
        modalInfos.style.opacity = "1";
        modalBackground.style.opacity = "1";
      }, 100);
      break;
    case "help":
      modalsContainer.style.display = "flex";
      modalsContainer.style.alignItems = "flex-start";
      modalHelp.style.display = "flex";

      setTimeout(() => {
        modalHelp.style.transform = "translateY(0)";
        modalHelp.style.opacity = "1";
        modalBackground.style.opacity = "1";
      }, 100);
      break;
    case "endings":
      modalsContainer.style.display = "flex";
      modalsContainer.style.justifyContent = "flex-start";
      modalEndings.style.display = "flex";

      setTimeout(() => {
        modalEndings.style.transform = "translateX(0)";
        modalEndings.style.opacity = "1";
        modalBackground.style.opacity = "1";
      }, 100);
      break;
    case "newgame":
      modalsContainer.style.display = "flex";
      modalNewGame.style.display = "flex";

      setTimeout(() => {
        modalNewGame.style.transform = "translateY(0)";
        modalNewGame.style.opacity = "1";
        modalBackground.style.opacity = "1";
      }, 100);
      break;
    case "signup":
      modalsContainer.style.display = "flex";
      if (
        modalNewGame.style.display == "flex" ||
        modalLogin.style.display == "flex"
      ) {
        modalNewGame.style.transform = "translateY(-50%)";
        modalNewGame.style.opacity = "0";
        modalLogin.style.transform = "translateY(-50%)";
        modalLogin.style.opacity = "0";
        setTimeout(() => {
          modalNewGame.style.display = "none";
          modalLogin.style.display = "none";
        }, 400);
        setTimeout(() => {
          modalSignup.style.display = "flex";
        }, 450);
        setTimeout(() => {
          modalSignup.style.transform = "translateY(0)";
          modalSignup.style.opacity = "1";
          modalBackground.style.opacity = "1";
        }, 500);
      } else {
        setTimeout(() => {
          modalSignup.style.display = "flex";
        }, 50);
        setTimeout(() => {
          modalSignup.style.transform = "translateY(0)";
          modalSignup.style.opacity = "1";
          modalBackground.style.opacity = "1";
        }, 100);
      }
      break;
    case "login":
      modalsContainer.style.display = "flex";
      if (
        modalNewGame.style.display == "flex" ||
        modalSignup.style.display == "flex"
      ) {
        modalNewGame.style.transform = "translateY(-50%)";
        modalNewGame.style.opacity = "0";
        modalSignup.style.transform = "translateY(-50%)";
        modalSignup.style.opacity = "0";
        setTimeout(() => {
          modalNewGame.style.display = "none";
          modalSignup.style.display = "none";
        }, 400);
        setTimeout(() => {
          modalLogin.style.display = "flex";
        }, 450);
        setTimeout(() => {
          modalLogin.style.transform = "translateY(0)";
          modalLogin.style.opacity = "1";
          modalBackground.style.opacity = "1";
        }, 500);
      } else {
        setTimeout(() => {
          modalLogin.style.display = "flex";
        }, 50);
        setTimeout(() => {
          modalLogin.style.transform = "translateY(0)";
          modalLogin.style.opacity = "1";
          modalBackground.style.opacity = "1";
        }, 100);
      }
      break;
    default:
      break;
  }
}

function closeOverlay() {
  if (modalInfos) {
    modalInfos.style.transform = "translateY(-50%)";
    modalInfos.style.opacity = "0";
  }
  if (modalNewGame) {
    modalNewGame.style.transform = "translateY(-50%)";
    modalNewGame.style.opacity = "0";
  }
  if (modalLogin) {
    modalLogin.style.transform = "translateY(-50%)";
    modalLogin.style.opacity = "0";
  }
  if (modalSignup) {
    modalSignup.style.transform = "translateY(-50%)";
    modalSignup.style.opacity = "0";
  }
  modalHelp.style.transform = "translateY(-50%)";
  modalHelp.style.opacity = "0";
  modalEndings.style.transform = "translateX(-50%)";
  modalEndings.style.opacity = "0";
  modalBackground.style.opacity = "0";

  setTimeout(() => {
    modalsContainer.style.justifyContent = "center";
    modalsContainer.style.alignItems = "center";
    modalsContainer.style.display = "none";
    if (modalInfos) {
      modalInfos.style.display = "none";
    }
    if (modalNewGame) {
      modalNewGame.style.display = "none";
    }
    if (modalLogin) {
      modalLogin.style.display = "none";
    }
    if (modalSignup) {
      modalSignup.style.display = "none";
    }
    modalHelp.style.display = "none";
    modalEndings.style.display = "none";
  }, 400);
}

function subjectCase(subjectCase) {
  switch (subjectCase) {
    case 0:
      modalSubject[1].style.display = "none";
      modalSubject[2].style.display = "none";
      modalSubject[0].style.display = "flex";
      modalNavButton[0].classList.add("modal-nav-button-selected");
      modalNavButton[1].classList.remove("modal-nav-button-selected");
      modalNavButton[2].classList.remove("modal-nav-button-selected");

      break;
    case 1:
      modalSubject[0].style.display = "none";
      modalSubject[2].style.display = "none";
      modalSubject[1].style.display = "flex";
      modalNavButton[0].classList.remove("modal-nav-button-selected");
      modalNavButton[1].classList.add("modal-nav-button-selected");
      modalNavButton[2].classList.remove("modal-nav-button-selected");

      break;
    case 2:
      modalSubject[1].style.display = "none";
      modalSubject[0].style.display = "none";
      modalSubject[2].style.display = "flex";
      modalNavButton[0].classList.remove("modal-nav-button-selected");
      modalNavButton[1].classList.remove("modal-nav-button-selected");
      modalNavButton[2].classList.add("modal-nav-button-selected");

      break;
    default:
      break;
  }
}

// Sound Effect on Click

// document.addEventListener("click", () => {
//   const pingnoob = new Audio("/assets/audio/pingnoob.wav");
//   pingnoob.play();
// });
