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

// add event popup
document.addEventListener("DOMContentLoaded", function () {
  let addEvent = document.getElementById("addEvent");
  let closeButton = document.getElementById("closebutton");
  let eventForm = document.getElementById("eventForm");

  addEvent.addEventListener("click", () => {
    eventForm.classList.add("open-form");
  });
  closeButton.addEventListener("click", () => {
    eventForm.classList.remove("open-form");
  });
});
// edit event popup
//  function openEditPopup() {
//   let addEvent = document.getElementById("editForm");
//   let closeButton = document.getElementById("closebutton");
//   let eventForm = document.getElementById("eventForm");

//   addEvent.addEventListener("click", () => {
//     eventForm.classList.add("open-form");
//   });
//   closeButton.addEventListener("click", () => {
//     eventForm.classList.remove("open-form");
//   });
// });

//add contact popup
document.addEventListener("DOMContentLoaded", function () {
  let addContact = document.getElementById("addContact");
  let closeButton1 = document.getElementById("closebutton");
  let contactForm = document.getElementById("contactForm");

  addContact.addEventListener("click", () => {
    contactForm.classList.add("open-form");
  });

  closeButton1.addEventListener("click", () => {
    contactForm.classList.remove("open-form");
  });
});

//***** pagination******
function changeRowsPerPage(rows) {
  let urlParams = new URLSearchParams(window.location.search);
  urlParams.set("page", "1");
  urlParams.set("records_per_page", rows);
  window.location.search = urlParams.toString();
}
//***table search */
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

//*****delete donor *****//
function deletePopup(id) {
  let confirmationPopup = document.getElementById("confirmationPopup");
  let confirmDelete = document.getElementById("confirmDelete");
  confirmationPopup.classList.add("open-popup");
  confirmDelete.onclick = function () {
    window.location.href = "backend/deletedonor.php?id=" + id;
  };
  document.getElementById("cancelDelete").onclick = function () {
    confirmationPopup.classList.remove("open-popup");
  };
}

//******** Accept blood request*******//
function acceptRequest(id) {
  let confirmationPopup = document.getElementById("confirmationPopup");
  let confirmAccept = document.getElementById("confirmAccept");
  confirmationPopup.classList.add("open-popup");
  confirmAccept.onclick = function () {
    window.location.href = "backend/requestmanaged.php?id=" + id;
  };
  document.getElementById("cancelAccept").onclick = function () {
    confirmationPopup.classList.remove("open-popup");
  };
}

//****** Reject blood request ********//
function rejectRequest(id) {
  let confirmationPopup = document.getElementById("confirmationPopupReject");
  let confirmReject = document.getElementById("confirmReject");
  confirmationPopup.classList.add("open-popup");
  confirmReject.onclick = function () {
    window.location.href = "backend/requestnotmanaged.php?id=" + id;
  };
  document.getElementById("cancelReject").onclick = function () {
    confirmationPopup.classList.remove("open-popup");
  };
}

//******** Accept blood donation request*******//
function acceptDonationrequest(id) {
  let confirmationPopup = document.getElementById("confirmationPopup");
  let confirmAccept = document.getElementById("donationAccept");
  confirmationPopup.classList.add("open-popup");
  confirmAccept.onclick = function () {
    window.location.href = "backend/acceptdonation.php?id=" + id;
  };
  document.getElementById("canceldonationAccept").onclick = function () {
    confirmationPopup.classList.remove("open-popup");
  };
}

//****** Reject blood donation request ********//
function rejectDonationrequest(id) {
  let confirmationPopup = document.getElementById("confirmationPopupReject");
  let confirmReject = document.getElementById("donationReject");
  confirmationPopup.classList.add("open-popup");
  confirmReject.onclick = function () {
    window.location.href = "backend/rejectdonation.php?id=" + id;
  };
  document.getElementById("canceldonationReject").onclick = function () {
    confirmationPopup.classList.remove("open-popup");
  };
}

//******  delete event ********//
function deleteEvent(id) {
  let confirmationPopup = document.getElementById("eventdeletePopup");
  let confirmDeleteevent = document.getElementById("confirmDeleteevent");
  confirmationPopup.classList.add("open-popup");
  confirmDeleteevent.onclick = function () {
    window.location.href = "backend/deleteEvent.php?id=" + id;
  };
  document.getElementById("cancelDeleteevent").onclick = function () {
    confirmationPopup.classList.remove("open-popup");
  };
}

//******  delete admin ********//
function deleteAdmin(id) {
  let confirmationPopup = document.getElementById("confirmationPopup");
  let confirmDelete = document.getElementById("confirmDelete");
  confirmationPopup.classList.add("open-popup");
  confirmDelete.onclick = function () {
    window.location.href = "backend/deleteAdmin.php?id=" + id;
  };
  document.getElementById("cancelDelete").onclick = function () {
    confirmationPopup.classList.remove("open-popup");
  };
}
