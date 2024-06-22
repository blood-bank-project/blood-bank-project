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

// document.addEventListener("DOMContentLoaded", function () {
//   const form = document.getElementById("myForm");
//   const popup = document.getElementById("successPopup");

//   form.addEventListener("submit", (event) => {
//     event.preventDefault();
//     setTimeout(() => {
//       popup.classList.add("show");
//       popup.style.display = "block";
//       setTimeout(() => {
//         popup.classList.remove("show");
//         setTimeout(() => {
//           popup.style.display = "none";
//         }, 500);
//         form.reset();
//       }, 3000);
//     }, 500);
//   });
// });

// window.addEventListener("scroll", function () {
//   const nav = document.getElementById("navbar");
//   nav.classList.add("fix");
// });

// login async
document
  .querySelector(".donorloginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const email = document.querySelector(".username").value;
    const password = document.querySelector(".password").value;

    // Debugging statements to check values
    console.log("Email:", email);
    console.log("Password:", password);

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
      .then((response) => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.json();
      })
      .then((data) => {
        console.log("Response data:", data); // Debugging statement to check response
        if (data.success) {
          window.location.href = "donor/index.php";
        } else {
          console.log("Response data:", data);
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

// donor register
// function formValidate(event) {
//   event.preventDefault();

//   const fname = document.getElementById("fname");
//   const lname = document.getElementById("lname");
//   const dob = document.getElementById("dob");
//   const email = document.getElementById("email");
//   const gender = document.getElementById("gender");
//   const occupation = document.getElementById("occupation");
//   const phone = document.getElementById("phone");
//   const bgroup = document.getElementById("bgroup");
//   const tole = document.getElementById("tole");
//   const ward = document.getElementById("ward");
//   const pass = document.getElementById("pass");
//   const cpass = document.getElementById("cpass");

//   const evalid = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
//   const pvalid =
//     /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;

//   let isValid = true;

//   if (fname.value.trim() === "") {
//     document.querySelector("#ferror").innerHTML = "First name is required";
//     isValid = false;
//   } else {
//     document.querySelector("#ferror").innerHTML = "";
//   }

//   if (lname.value.trim() === "") {
//     document.querySelector("#lerror").innerHTML = "Last name is required";
//     isValid = false;
//   } else {
//     document.querySelector("#lerror").innerHTML = "";
//   }

//   if (dob.value.trim() === "") {
//     document.querySelector("#derror").innerHTML = "DOB is required";
//     isValid = false;
//   } else {
//     document.querySelector("#derror").innerHTML = "";
//   }

//   if (email.value.trim() === "") {
//     document.querySelector("#eerror").innerHTML = "Email is required";
//     isValid = false;
//   } else if (!evalid.test(email.value)) {
//     document.querySelector("#eerror").innerHTML = "Please enter a valid email";
//     isValid = false;
//   } else {
//     document.querySelector("#eerror").innerHTML = "";
//   }

//   if (gender.value.trim() === "") {
//     document.querySelector("#gerror").innerHTML = "Gender is required";
//     isValid = false;
//   } else {
//     document.querySelector("#gerror").innerHTML = "";
//   }

//   if (occupation.value.trim() === "") {
//     document.querySelector("#oerror").innerHTML = "Occupation is required";
//     isValid = false;
//   } else {
//     document.querySelector("#oerror").innerHTML = "";
//   }

//   if (phone.value.trim() === "") {
//     document.querySelector("#perror").innerHTML = "Phone no. is required";
//     isValid = false;
//   } else if (!/^\d{10}$/.test(phone.value)) {
//     // Assuming 10 digits for phone number
//     document.querySelector("#perror").innerHTML =
//       "Please enter a valid phone no.";
//     isValid = false;
//   } else {
//     document.querySelector("#perror").innerHTML = "";
//   }

//   if (bgroup.value.trim() === "") {
//     document.querySelector("#berror").innerHTML = "Blood-group is required";
//     isValid = false;
//   } else {
//     document.querySelector("#berror").innerHTML = "";
//   }

//   if (tole.value.trim() === "") {
//     document.querySelector("#terror").innerHTML = "Tole is required";
//     isValid = false;
//   } else {
//     document.querySelector("#terror").innerHTML = "";
//   }

//   if (ward.value.trim() === "") {
//     document.querySelector("#werror").innerHTML = "Ward no. is required";
//     isValid = false;
//   } else {
//     document.querySelector("#werror").innerHTML = "";
//   }

//   if (pass.value.trim() === "") {
//     document.querySelector("#perror").innerHTML = "Password is required";
//     isValid = false;
//   } else if (!pvalid.test(pass.value)) {
//     document.querySelector("#perror").innerHTML =
//       "Password should be 8-20 characters long and must contain one uppercase, one lowercase, one digit, and one special character.";
//     isValid = false;
//   } else {
//     document.querySelector("#perror").innerHTML = "";
//   }

//   if (cpass.value.trim() === "") {
//     document.querySelector("#cperror").innerHTML =
//       "Re-enter the password is required.";
//     isValid = false;
//   } else if (cpass.value !== pass.value) {
//     document.querySelector("#cperror").innerHTML = "Password does not match.";
//     isValid = false;
//   } else {
//     document.querySelector("#cperror").innerHTML = "";
//   }

//   if (isValid) {
//     document.getElementById("error").innerHTML = "";
//     // If there are no errors, proceed with form submission
//     window.location.href = "../donor/backend/registerdonor.php";
//   } else {
//     document.getElementById("error").innerHTML = "All fields are required.";
//   }
// }

// function empty(input) {
//   return input.value.trim() === "";
// }
