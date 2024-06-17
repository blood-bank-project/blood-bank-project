$(document).ready(function () {
  let w = window.innerWidth;

  if (w > 767) {
    $("#menu-jk").scrollToFixed();
  } else {
    $("#menu-jk").scrollToFixed();
  }
});

document.addEventListener("DOMContentLoaded", function () {
  let donorlogin = document.getElementById("donorlogin");
  let adminlogin = document.getElementById("adminlogin");
  let donorloginpopup = document.getElementById("donorloginpopup");
  let adminloginpopup = document.getElementById("adminloginpopup");
  let closebutton1 = document.getElementById("closebutton1");
  let closebutton2 = document.getElementById("closebutton2");

  donorlogin.addEventListener("click", function () {
    donorloginpopup.classList.add("open-popup");
  });
  adminlogin.addEventListener("click", function () {
    adminloginpopup.classList.add("open-popup");
  });

  closebutton1.addEventListener("click", function () {
    donorloginpopup.classList.remove("open-popup");
  });
  closebutton2.addEventListener("click", function () {
    adminloginpopup.classList.remove("open-popup");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  function showPopupMessage() {
    document.getElementById("popupMessage").style.display = "block";
  }
  function hidePopupMessage() {
    document.getElementById("popupMessage").style.display = "none";
  }
  setTimeout(hidePopupMessage, 3000);

  $.ajax({
    url: "bloodrequest.php",
    type: "post",
    data: formData,
    success: function (response) {
      if (response.success) {
        showPopupMessage(); // Display popup message
      }
    },
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

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("myForm");
  const popup = document.getElementById("successPopup");

  form.addEventListener("submit", (event) => {
    event.preventDefault();
    setTimeout(() => {
      popup.classList.add("show");
      popup.style.display = "block";
      setTimeout(() => {
        popup.classList.remove("show");
        setTimeout(() => {
          popup.style.display = "none";
        }, 500);
        form.reset();
      }, 3000);
    }, 500);
  });
});

window.addEventListener("scroll", function () {
  const nav = document.getElementById("navbar");
  nav.classList.add("fix");
});
