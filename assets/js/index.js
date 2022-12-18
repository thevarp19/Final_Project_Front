let inputEmail = document.querySelector(".input");
let submit = document.querySelector("#submit");
let toggleClick = document.querySelector(".nav__toggle");
let block = document.querySelector(".block");

let toggle = false;

const setToggle = () => {
  return !toggle;
};

toggleClick.addEventListener("click", () => {
    block.classList.toggle("show");
});

submit.addEventListener('click', () => {
    if (submit) {
        window.localStorage.setItem('submit', inputEmail)
    }
});