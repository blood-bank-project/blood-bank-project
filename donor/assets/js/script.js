document.addEventListener("DOMContentLoaded", function () {
  let donateButton = document.getElementById("donateButton");
  let donationForm = document.getElementById("donationForm");
  let closebutton = document.getElementById("closebutton");

  donateButton.addEventListener("click", function () {
    donationForm.classList.add("open-form");
  });

  closebutton.addEventListener("click", function () {
    donationForm.classList.remove("open-form");
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

function deletePopup() {
  let confirmationPopup = document.getElementById("confirmationPopup");
  let deleteReject = document.getElementById("cancelDelete");

  confirmationPopup.classList.add("open-popup");

  deleteReject.addEventListener("click", function () {
    confirmationPopup.classList.remove("open-popup");
  });
}

//sticky navbar
// window.addEventListener("scroll", function () {
//   const navbar = document.querySelector(".navbar");
//   navbar.classList.toogle("sticky", scrollY > 0);
// });
