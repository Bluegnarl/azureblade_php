const a = document.querySelector("a"),
  parallax = document.querySelector(".parallax"),
  parallaxContainer = document.querySelector(".parallax-container"),
  modalsContainer = document.querySelector(".modals-container"),
  modalInfos = document.querySelector(".modal-infos"),
  modalEndings = document.querySelector(".modal-endings"),
  modalHelp = document.querySelector(".modal-help"),
  modalNewGame = document.querySelector(".modal-newgame"),
  modalBackground = document.querySelector(".modal-background"),
  helpCase1 = document.querySelector(".help-case-1"),
  helpCase2 = document.querySelector(".help-case-2"),
  helpCase3 = document.querySelector(".help-case-3"),
  arrowIcon = document.querySelectorAll(".arrow-icon"),
  endingsCounter = document.querySelector(".endings-counter");

// On Load Opacity 0 to 1

document.addEventListener("DOMContentLoaded", () => {
  document.body.style.opacity = 1;
  parallaxContainer.style.opacity = 1;
});

// Modal

function modal(modal) {
  switch (modal) {
    case "infos":
      modalsContainer.style.display = "flex";
      modalInfos.style.display = "flex";

      setTimeout(() => {
        modalInfos.style.transform = "translateY(0)";
        modalInfos.style.opacity = "1";
        modalBackground.style.opacity = "1";
      }, 1);
      break;
    case "endings":
      modalsContainer.style.display = "flex";
      modalsContainer.style.justifyContent = "flex-start";
      modalEndings.style.display = "flex";

      setTimeout(() => {
        modalEndings.style.transform = "translateX(0)";
        modalEndings.style.opacity = "1";
        modalBackground.style.opacity = "1";
      }, 1);
      break;
    case "help":
      modalsContainer.style.display = "flex";
      modalHelp.style.display = "flex";

      setTimeout(() => {
        modalHelp.style.transform = "translateY(0)";
        modalHelp.style.opacity = "1";
        modalBackground.style.opacity = "1";
      }, 1);
      break
      case "newgame":
        modalsContainer.style.display = "flex";
        modalNewGame.style.display = "flex";
  
        setTimeout(() => {
          modalNewGame.style.transform = "translateY(0)";
          modalNewGame.style.opacity = "1";
          modalBackground.style.opacity = "1";
        }, 1);
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
  modalHelp.style.transform = "translateY(-50%)";
  modalHelp.style.opacity = "0";
  modalEndings.style.transform = "translateX(-50%)";
  modalEndings.style.opacity = "0";
  modalBackground.style.opacity = "0";

  setTimeout(() => {
    modalsContainer.style.justifyContent = "center";
    modalsContainer.style.display = "none";
    if (modalInfos) {
      modalInfos.style.display = "none";
    }
    if (modalNewGame) {
      modalNewGame.style.display = "none";
    }
    modalHelp.style.display = "none";
    modalEndings.style.display = "none";
  }, 400);
}

let helpCaseBool1 = true;
let helpCaseBool2 = false;
let helpCaseBool3 = false;

helpCase1.style.display = "flex";
arrowIcon[0].style.rotate = "180deg";
helpCase1.style.scale = "1";

function helpCase(helpCase) {
  switch (helpCase) {
    case 1:
      helpCaseBool1 = !helpCaseBool1;
      helpCaseBool2 = false;
      helpCaseBool3 = false;
      if (helpCaseBool1) {
        helpCase1.style.display = "flex";
        arrowIcon[0].style.rotate = "180deg";
        setTimeout(() => {
          helpCase1.style.scale = "1";
        }, 1);

        helpCase2.style.scale = "0";
        arrowIcon[1].style.rotate = "0deg";
        helpCase2.style.display = "none";
        helpCase2.style.scale = "0";
        arrowIcon[1].style.rotate = "0deg";
        helpCase2.style.display = "none";
        helpCase3.style.scale = "0";
        arrowIcon[2].style.rotate = "0deg";
        helpCase3.style.display = "none";
      } else {
        helpCase1.style.scale = "0";
        arrowIcon[0].style.rotate = "0deg";
        helpCase1.style.display = "none";
      }
      break;
    case 2:
      helpCaseBool1 = false;
      helpCaseBool2 = !helpCaseBool2;
      helpCaseBool3 = false;
      if (helpCaseBool2) {
        helpCase2.style.display = "flex";
        arrowIcon[1].style.rotate = "180deg";
        setTimeout(() => {
          helpCase2.style.scale = "1";
        }, 1);

        helpCase1.style.scale = "0";
        arrowIcon[0].style.rotate = "0deg";
        helpCase1.style.display = "none";
        helpCase3.style.scale = "0";
        arrowIcon[2].style.rotate = "0deg";
        helpCase3.style.display = "none";
      } else {
        helpCase2.style.scale = "0";
        arrowIcon[1].style.rotate = "0deg";
        helpCase2.style.display = "none";
      }
      break;
    case 3:
      helpCaseBool1 = false;
      helpCaseBool2 = false;
      helpCaseBool3 = !helpCaseBool3;
      if (helpCaseBool3) {
        helpCase3.style.display = "flex";
        arrowIcon[2].style.rotate = "180deg";
        setTimeout(() => {
          helpCase3.style.scale = "1";
        }, 1);

        helpCase1.style.scale = "0";
        arrowIcon[0].style.rotate = "0deg";
        helpCase1.style.display = "none";
        helpCase2.style.scale = "0";
        arrowIcon[1].style.rotate = "0deg";
        helpCase2.style.display = "none";
      } else {
        helpCase3.style.scale = "0";
        arrowIcon[2].style.rotate = "0deg";
        helpCase3.style.display = "none";
      }
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

// Parallax Effect for Home and Game Page

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
