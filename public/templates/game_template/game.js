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
  angerNext = document.querySelectorAll(".anger-next"),
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
let anger = 0;

let kairusHealth = 3;
let enemyHealth = 10;

function angerMeter() {
  anger += 1;
  console.log(anger);
}

function dilemmasChoiceAction(choice) {
  const hoverAudio = new Audio("./assets/audio/hover.wav");
  hoverAudio.play();
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
      if (anger == 3) {
        console.log("highanger");
        nextMessage.style.display = "flex";
        angerNext[0].style.display = "flex";
        document.querySelector(".message-result").style.display = "flex";
        document.querySelector(".message-result").style.opacity = "1";
        document.querySelector(".high-anger").style.display = "flex";
        setTimeout(() => {
          document.querySelector(".high-anger").style.transform =
            "translate(0)";
          document.querySelector(".message-result").style.transform =
            "translate(0)";
          document.querySelector(".high-anger").style.opacity = "1";
          nextMessage.style.opacity = "1";
          nextMessage.style.transform = "translate(0)";
        }, 100);
      } else if (anger < 3) {
        console.log("lowanger");
        nextMessage.style.display = "flex";
        angerNext[1].style.display = "flex";
        document.querySelector(".message-result").style.display = "flex";
        document.querySelector(".message-result").style.opacity = "1";
        document.querySelector(".low-anger").style.display = "flex";
        setTimeout(() => {
          document.querySelector(".low-anger").style.transform = "translate(0)";
          document.querySelector(".low-anger").style.opacity = "1";
          document.querySelector(".message-result").style.transform =
            "translate(0)";
          nextMessage.style.opacity = "1";
          nextMessage.style.transform = "translate(0)";
        }, 100);
      }
    }, 1500);
  }
}

function next(type) {
  const hoverAudio = new Audio("./assets/audio/hover.wav");
  hoverAudio.play();
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

    function removeHref(event) {
      setTimeout(() => {
        event.preventDefault();
        newLink.removeAttribute("href");
      }, 10);
    }

    newLink.addEventListener("click", removeHref);

    while (primaryControl.firstChild) {
      newLink.appendChild(primaryControl.firstChild);
    }

    primaryControl.parentNode.replaceChild(newLink, primaryControl);
  }
}
if (!document.querySelector(".qte-content")) next();

function qte(action) {
  if (action == "ready") {
    document.querySelector(".qte-content").style.opacity = "0";
    document.querySelector(".qte-content").style.scale = "0";
    setTimeout(() => {
      document.querySelector(".qte-content").style.display = "none";
      qte("qte");
    }, 1000);
  } else if (action == "qte" && enemyHealth > 0 && kairusHealth > 0) {
    const qteContainer = document.querySelector(".qte-container");
    const qtebutton = document.createElement("div");
    qtebutton.className = "qte-button";

    const img = document.createElement("img");
    img.src = "../../assets/img/target.svg";
    qtebutton.appendChild(img);

    const qteContainerRect = qteContainer.getBoundingClientRect();
    const buttonWidth = 50;
    const buttonHeight = 50;
    const posX = Math.random() * (qteContainerRect.width - buttonWidth);
    const posY = Math.random() * (qteContainerRect.height - buttonHeight);

    qtebutton.style.left = `${posX}px`;
    qtebutton.style.top = `${posY}px`;

    qtebutton.addEventListener("click", () => {
      const damageAudio = new Audio("./assets/audio/damage.wav");
      damageAudio.play();
      qteContainer.removeChild(qtebutton);
      enemyHealth -= 1;
      characterLeft[0].classList.add("damage");
      characterLeft[1].classList.add("damage");
      setTimeout(() => {
        characterLeft[0].classList.remove("damage");
        characterLeft[1].classList.remove("damage");
      }, 200);
      qte("qte");
    });

    qteContainer.appendChild(qtebutton);

    setTimeout(() => {
      if (qteContainer.contains(qtebutton)) {
        const damageReceiveAudio = new Audio(
          "./assets/audio/damage_receive.wav"
        );
        damageReceiveAudio.play();
        characterRight[0].classList.add("damage");
        characterRight[1].classList.add("damage");
        setTimeout(() => {
          characterRight[0].classList.remove("damage");
          characterRight[1].classList.remove("damage");
        }, 200);
        qteContainer.removeChild(qtebutton);
        kairusHealth -= 1;
        qte("qte");
      }
    }, 2000);
  } else if (enemyHealth <= 0) {
    characterLeft[0].classList.add("dead");
    characterLeft[1].classList.add("dead");
    document.querySelector(".win-qte").style.display = "flex";
    setTimeout(() => {
      const winAudio = new Audio("./assets/audio/win.wav");
      winAudio.play();
      document.querySelector(".win-qte").style.opacity = "1";
      document.querySelector(".win-qte").style.transform = "translate(0)";
      document.querySelector(".next").style.display = "flex";
      setTimeout(() => {
        document.querySelector(".next").style.opacity = "1";
        document.querySelector(".next").style.scale = "1";
      }, 500);
    }, 500);
  } else if (kairusHealth <= 0) {
    characterRight[0].classList.add("dead");
    characterRight[1].classList.add("dead");
    document.querySelector(".loose-qte").style.display = "flex";
    setTimeout(() => {
            const looseAudio = new Audio("./assets/audio/loose.wav");
            looseAudio.play();
      document.querySelector(".loose-qte").style.opacity = "1";
      document.querySelector(".loose-qte").style.transform = "translate(0)";
      document.querySelectorAll(".next")[1].style.display = "flex";
      setTimeout(() => {
        document.querySelectorAll(".next")[1].style.opacity = "1";
        document.querySelectorAll(".next")[1].style.scale = "1";
      }, 500);
    }, 500);
  }
}

function hoverAudioFunction() {
  const hoverAudio = new Audio("./assets/audio/hover.wav");
  hoverAudio.play();
}