const mainMenu = document.querySelector(".mainMenu");
const openMenu = document.querySelector(".openMenu");
const closeMenu = document.querySelector(".closeMenu");

openMenu.addEventListener("click", function () {
  mainMenu.style.display = "flex";
  mainMenu.style.top = "0";
});
closeMenu.addEventListener("click", function () {
  mainMenu.style.top = "-100vh";
});

const residentialBTN = document.querySelector("#residential");
const comercialBtn = document.querySelector("#comercial");
const residential = document.querySelector(".residential");
const comercial = document.querySelector(".comercial");

residentialBTN.addEventListener("click", function () {
  residential.classList.add("show");
  residential.classList.remove("hidden");
  comercial.classList.add("hidden");
  residentialBTN.classList.add("active");
  comercialBtn.classList.remove("active");
});

comercialBtn.addEventListener("click", function() {
  residential.classList.remove("show");
  residential.classList.show("hidden");
  comercial.classList.remove("hidden");
  residentialBTN.classList.remove("active");
  comercialBtn.classList.add("active");

})
