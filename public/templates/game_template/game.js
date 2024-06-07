const dialogueContent = document.querySelector(".dialogue-content"),
  characterImage = document.querySelectorAll(".character-image"),
  controls = document.querySelector(".controls"),
  messages = document.querySelectorAll(".message"),
  nbElements = document.querySelector("input").dataset.dialogueLength,
  characterRight = document.querySelectorAll(".character-right"),
  characterLeft = document.querySelectorAll(".character-left"),
  primaryControl = document.querySelector(".primary-control"),
  validateButton = document.querySelector(".validate"),
  dilemmasChoice = document.querySelectorAll(".dilemmas-choice"),
  dilemmasChoice1 = document.querySelectorAll(".dilemmas-choice-1"),
  dilemmasChoice2 = document.querySelectorAll(".dilemmas-choice-2"),
  messageChoice = document.querySelectorAll(".message-choice"),
  messageDilemmas = document.querySelectorAll(".message-dilemmas"),
  nextMessage = document.querySelector(".next-message");

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    let length = characterImage.length;
    for (i = 0; i < length; i++) {
      characterImage[i].style.transform = "translateY(0)";
      characterImage[i].style.opacity = 1;
    }
    setTimeout(() => {
      controls.style.opacity = 1;
      controls.style.scale = 1;
    }, 600);
  }, 100);
});

let iMessage = -1;
let iChoice = 0;

function dilemmasChoiceAction(choice) {
  if (choice == 1) {
    dilemmasChoice[iChoice].style.display = "none";
    dilemmasChoice1[iChoice].style.display = "flex";
    setTimeout(() => {
      dilemmasChoice1[iChoice].style.opacity = "1";
      dilemmasChoice1[iChoice].style.transform = "translate(0)";
    }, 100);
  } else if (choice == 2) {
    dilemmasChoice[iChoice].style.display = "none";
    dilemmasChoice2[iChoice].style.display = "flex";
    setTimeout(() => {
      dilemmasChoice2[iChoice].style.opacity = "1";
      dilemmasChoice2[iChoice].style.transform = "translate(0)";
    }, 100);
  }
  characterRight[0].style.filter = "brightness(1)";
  characterLeft[0].style.filter = "brightness(0.5)";
  characterRight[1].style.filter = "brightness(1)";
  characterLeft[1].style.filter = "brightness(0.5)";

  if (iChoice < 2) {
    setTimeout(() => {
      iChoice += 1;
      dilemmasChoice[iChoice].style.display = "flex";
      dilemmasChoice[iChoice].style.opacity = "1";
      messageDilemmas[iChoice].style.display = "flex";
      messageChoice[iChoice].style.display = "flex";
      setTimeout(() => {
        messageDilemmas[iChoice].style.opacity = "1";
        messageDilemmas[iChoice].style.transform = "translate(0)";
        messageChoice[iChoice].style.opacity = "1";
        messageChoice[iChoice].style.transform = "translate(0)";
      }, 100);
      characterRight[0].style.filter = "brightness(0.5)";
      characterLeft[0].style.filter = "brightness(1)";
      characterRight[1].style.filter = "brightness(0.5)";
      characterLeft[1].style.filter = "brightness(1)";
    }, 1500);
  } else {
    setTimeout(() => {
      messageDilemmas[iChoice + 1].style.display = "flex";
      setTimeout(() => {
        messageDilemmas[iChoice + 1].style.opacity = "1";
        messageDilemmas[iChoice + 1].style.transform = "translate(0)";
      }, 100);
      setTimeout(() => {
        nextMessage.style.display = "flex";
        setTimeout(() => {
          nextMessage.style.opacity = "1";
          nextMessage.style.transform = "translate(0)";
        }, 100);
      }, 1500);
    }, 1500);

  }
}

function next(type) {
  if (iMessage <= nbElements - 2) {
    if (type == "dilemmas") {
      validateButton.style.display = "none";
    }
    iMessage += 1;
    messages[iMessage].style.display = "flex";
    if (type == "dilemmas") {
      messages[iMessage + 1].style.display = "flex";
    }
    if (iMessage === 0) {
      setTimeout(() => {
        messages[0].style.opacity = 1;
        messages[0].style.transform = "translateX(0)";
      }, 1200);
    } else {
      setTimeout(() => {
        messages[iMessage].style.opacity = "1";
        messages[iMessage].style.transform = "translate(0, 0)";
        if (type == "dilemmas") {
          messages[iMessage + 1].style.opacity = "1";
          messages[iMessage + 1].style.transform = "translate(0, 0)";
        }
      }, 100);
      // const pingnoob = new Audio("/assets/audio/next.wav");
      // pingnoob.play();
    }
    if (messages[iMessage].classList.contains("message-right")) {
      characterRight[0].style.filter = "brightness(1)";
      characterLeft[0].style.filter = "brightness(0.5)";
      characterRight[1].style.filter = "brightness(1)";
      characterLeft[1].style.filter = "brightness(0.5)";
    } else if (messages[iMessage].classList.contains("message-left")) {
      characterRight[0].style.filter = "brightness(0.5)";
      characterLeft[0].style.filter = "brightness(1)";
      characterRight[1].style.filter = "brightness(0.5)";
      characterLeft[1].style.filter = "brightness(1)";
    } else {
      characterRight[0].style.filter = "brightness(0.5)";
      characterLeft[0].style.filter = "brightness(0.5)";
      characterRight[1].style.filter = "brightness(0.5)";
      characterLeft[1].style.filter = "brightness(0.5)";
    }
  }
  if (iMessage == nbElements - 1) {
    const newLink = document.createElement("a");
    newLink.classList.add(
      "primary-control",
      "buttons-clickable",
      "buttons-clickable-w-border"
    );
    newLink.href = "/?page=game&next=true";

    // function removeHref(event) {
    //   setTimeout(() => {
    //     event.preventDefault();
    //     newLink.removeAttribute("href");
    //   }, 10);
    // }

    // newLink.addEventListener("click", removeHref);

    while (primaryControl.firstChild) {
      newLink.appendChild(primaryControl.firstChild);
    }

    primaryControl.parentNode.replaceChild(newLink, primaryControl);
  }
}
next();
