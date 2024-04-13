function loadContent(divId, link) {
  let divs = document.querySelectorAll(".content");
  divs.forEach(function (div) {
    div.style.display = "none";
  });

  let links = document.getElementsByTagName("a");
  for (let i = 0; i < links.length; i++) {
    links[i].classList.remove("active");
  }

  let divToShow = document.getElementById(divId);
  divToShow.style.display = "block";
  link.classList.add("active");
}

let addEvent = document.getElementById("addEvent");
let closeButton = document.getElementById("closebutton");
let eventForm = document.getElementById("eventForm");

addEvent.addEventListener("click", () => {
  eventForm.style.display = "block";
});

closebutton.addEventListener("click", () => {
  eventForm.style.display = "none";
});
