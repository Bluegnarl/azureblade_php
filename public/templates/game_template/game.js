const dialogueContent = document.querySelector(".dialogue-content"),
  characterImage = document.querySelectorAll(".character-image"),
  controls = document.querySelector(".controls"),
  messages = document.querySelectorAll(".message"),
  nbElements = document.querySelector("input").dataset.dialogueLength,
  characterRight = document.querySelectorAll(".character-right"),
  characterLeft = document.querySelectorAll(".character-left"),
  primaryControl = document.querySelector(".primary-control");

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

function next() {
  if (iMessage <= nbElements - 2) {
    iMessage += 1;
    messages[iMessage].style.display = "flex";
    if (iMessage === 0) {
      setTimeout(() => {
        messages[0].style.opacity = 1;
        messages[0].style.transform = "translateX(0)";
      }, 1200);
    } else {
      setTimeout(() => {
        messages[iMessage].style.opacity = "1";
        messages[iMessage].style.transform = "translateX(0)";
      }, 100);
      const pingnoob = new Audio("/assets/audio/next.wav");
      pingnoob.play();
    }
    if (messages[iMessage].classList.contains("message-right")) {
      characterRight[0].style.filter = "brightness(1)";
      characterLeft[0].style.filter = "brightness(0.5)";
      characterRight[1].style.filter = "brightness(1)";
      characterLeft[1].style.filter = "brightness(0.5)";
    } else {
      characterRight[0].style.filter = "brightness(0.5)";
      characterLeft[0].style.filter = "brightness(1)";
      characterRight[1].style.filter = "brightness(0.5)";
      characterLeft[1].style.filter = "brightness(1)";
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
