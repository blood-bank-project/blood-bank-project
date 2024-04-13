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

document.addEventListener("DOMContentLoaded", function () {
  let addEvent = document.getElementById("addEvent");
  let closeButton = document.getElementById("closebutton");
  let eventForm = document.getElementById("eventForm");

  addEvent.addEventListener("click", () => {
    eventForm.style.display = "block";
  });

  closeButton.addEventListener("click", () => {
    eventForm.style.display = "none";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  let addContact = document.getElementById("addContact");
  let closeButton1 = document.getElementById("closebutton");
  let contactForm = document.getElementById("contactForm");

  addContact.addEventListener("click", () => {
    console.log("clicked");
    contactForm.style.display = "block";
  });

  closeButton1.addEventListener("click", () => {
    contactForm.style.display = "none";
  });
});
