const dialogueContent = document.querySelector(".dialogue-content"),
    characterImage = document.querySelectorAll(".character-image"),
    controls = document.querySelector(".controls");

document.addEventListener("DOMContentLoaded", () => {
    dialogueContent.style.opacity = 1;
    dialogueContent.style.transform = "translateY(0)";
    setTimeout(() => {
        let length = characterImage.length;
        for(i = 0; i < length; i++) {
            characterImage[i].style.transform = "translateY(0)";
            characterImage[i].style.opacity = 1;
        }
    }, 1000);
    setTimeout(() => {
        controls.style.opacity = 1;
        controls.style.scale = 1;
    }, 1600);
  });