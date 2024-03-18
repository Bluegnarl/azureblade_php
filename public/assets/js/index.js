const parallax = document.querySelector(".parallax");
const a = document.querySelector("a");

// Sound Effect on Click

document.addEventListener("click", () => {
  const pingnoob = new Audio("/assets/audio/pingnoob.wav");
  pingnoob.play();
});

// On Load Opacity 0 to 1

document.addEventListener("DOMContentLoaded", () => {
  document.body.style.opacity = 1;
});

// Parallax Effect for Home Page

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
