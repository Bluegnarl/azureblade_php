const nav = document.querySelector("nav");
const titleContainer = document.querySelector(".title-container");

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    nav.style.opacity = 1;
    titleContainer.style.opacity = 1;
  }, 100);
});
