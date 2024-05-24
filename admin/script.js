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

function changeRowsPerPage(rows) {
  let urlParams = new URLSearchParams(window.location.search);
  urlParams.set("page", "1");
  urlParams.set("records_per_page", rows);
  window.location.search = urlParams.toString();
}

function searchTable() {
  let input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search-input");
  filter = input.value.toUpperCase();
  table = document.querySelector(".table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td");
    for (let j = 0; j < td.length; j++) {
      if (td[j]) {
        txtValue = td[j].textContent || td[j].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          break;
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
}
