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

// document.addEventListener("DOMContentLoaded", function () {
//   function showPopupMessage() {
//     document.getElementById("popupMessage").style.display = "block";
//   }
//   function hidePopupMessage() {
//     document.getElementById("popupMessage").style.display = "none";
//   }
//   setTimeout(hidePopupMessage, 3000);

//   $.ajax({
//     url: "bloodrequest.php",
//     type: "post",
//     data: formData,
//     success: function (response) {
//       if (response.success) {
//         showPopupMessage(); // Display popup message
//       }
//     },
//   });
// });

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

// window.addEventListener("scroll", function () {
//   const nav = document.getElementById("navbar");
//   nav.classList.add("fix");
// });

// login async
document
  .querySelector(".donorloginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    console.log("SUBMITTED");
    const email = document.querySelector(".username").value;
    const password = document.querySelector(".password").value;

    fetch("donor/backend/donorlogincheck.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        email: email,
        password: password,
      }),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          window.location.href = "donor/index.php";
        } else {
          document.querySelector(".error").innerText = data.error;
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });

document
  .querySelector(".adminloginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const emailid = document.querySelector(".emailid").value;
    const pass = document.querySelector(".pass").value;

    console.log("SUBMIT");

    fetch("admin/backend/adminlogincheck.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        email1: emailid,
        password1: pass,
      }),
    })
      .then((response) => {
        // Check if the response is OK (status in the range 200-299)
        if (!response.ok) {
          throw new Error(
            `Network response was not ok: ${response.statusText}`
          );
        }
        // Return the response text (it might not be JSON)
        return response.text();
      })
      .then((text) => {
        try {
          // Try to parse the text as JSON
          const data = JSON.parse(text);
          console.log(data);
          if (data.success) {
            window.location.href = "admin/index.php";
          } else {
            document.querySelector(".error1").innerText = data.error;
          }
        } catch (error) {
          // Handle the case where the response is not valid JSON
          console.error("Failed to parse JSON:", text);
          document.querySelector(".error1").innerText =
            "Unexpected response from the server.";
        }
      })
      .catch((error) => {
        console.error("Fetch error:", error);
        document.querySelector(".error1").innerText =
          "There was a problem with the fetch operation.";
      });
  });

//donor register
document.querySelector("form").addEventListener("submit", function (event) {
  event.preventDefault();

  const form = event.target;
  const formData = new FormData(form);
  const jsonData = {};

  formData.forEach((value, key) => {
    jsonData[key] = value;
  });

  fetch("backend/registerdonor.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(jsonData),
  })
    .then((response) => response.json())
    .then((data) => {
      const errorContainer = document.getElementById("errorContainer");

      // Clear previous errors
      errorContainer.innerHTML = "";

      if (data.success) {
        window.location.href = "../index.php";
      } else {
        if (data.errors) {
          for (const [key, value] of Object.entries(data.errors)) {
            const errorElement = document.createElement("p");
            errorElement.style.color = "red";
            errorElement.innerText = value;
            errorContainer.appendChild(errorElement);
          }
        } else if (data.error) {
          const errorElement = document.createElement("p");
          errorElement.style.color = "red";
          errorElement.innerText = data.error;
          errorContainer.appendChild(errorElement);
        }
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});
