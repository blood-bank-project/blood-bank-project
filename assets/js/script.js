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

window.addEventListener("scroll", function () {
  const nav = document.getElementById("navbar");
  nav.classList.add("fix");
});

// login async
document
  .querySelector(".donorloginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

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

// ********* register donor********/
function formValidate(event) {
  event.preventDefault();

  const fname = document.getElementById("fname").value.trim();
  const mname = document.getElementById("mname").value.trim();
  const lname = document.getElementById("lname").value.trim();
  const dob = document.getElementById("dob").value.trim();
  const email = document.getElementById("email").value.trim();
  const gender = document.getElementById("gender").value.trim();
  const occupation = document.getElementById("occupation").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const bgroup = document.getElementById("bgroup").value.trim();
  const province = document.getElementById("province").value.trim();
  const district = document.getElementById("district").value.trim();
  const municipality = document.getElementById("municipality").value.trim();
  const tole = document.getElementById("tole").value.trim();
  const ward = document.getElementById("ward").value.trim();
  const pass = document.getElementById("pass").value.trim();
  const cpass = document.getElementById("cpass").value.trim();

  const evalid = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const pvalid =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;

  let isValid = true;

  if (fname === "") {
    document.querySelector("#ferror").innerHTML = "First name is required";
    isValid = false;
  } else {
    document.querySelector("#ferror").innerHTML = "";
  }

  if (lname === "") {
    document.querySelector("#lerror").innerHTML = "Last name is required";
    isValid = false;
  } else {
    document.querySelector("#lerror").innerHTML = "";
  }

  if (dob === "") {
    document.querySelector("#doberror").innerHTML = "DOB is required";
    isValid = false;
  } else {
    document.querySelector("#doberror").innerHTML = "";
  }

  if (email === "") {
    document.querySelector("#eerror").innerHTML = "Email is required";
    isValid = false;
  } else if (!evalid.test(email)) {
    document.querySelector("#eerror").innerHTML = "Please enter a valid email";
    isValid = false;
  } else {
    document.querySelector("#eerror").innerHTML = "";
  }

  if (gender === "") {
    document.querySelector("#gerror").innerHTML = "Gender is required";
    isValid = false;
  } else {
    document.querySelector("#gerror").innerHTML = "";
  }

  if (occupation === "") {
    document.querySelector("#oerror").innerHTML = "Occupation is required";
    isValid = false;
  } else {
    document.querySelector("#oerror").innerHTML = "";
  }

  if (phone === "") {
    document.querySelector("#perror").innerHTML = "Phone no. is required";
    isValid = false;
  } else if (!/^\d{10}$/.test(phone)) {
    document.querySelector("#perror").innerHTML =
      "Please enter a valid phone no.";
    isValid = false;
  } else {
    document.querySelector("#perror").innerHTML = "";
  }

  if (bgroup === "") {
    document.querySelector("#berror").innerHTML = "Blood-group is required";
    isValid = false;
  } else {
    document.querySelector("#berror").innerHTML = "";
  }

  if (province === "") {
    document.querySelector("#proerror").innerHTML = "Province is required";
    isValid = false;
  } else {
    document.querySelector("#proerror").innerHTML = "";
  }

  if (district === "") {
    document.querySelector("#diserror").innerHTML = "District is required";
    isValid = false;
  } else {
    document.querySelector("#diserror").innerHTML = "";
  }

  if (municipality === "") {
    document.querySelector("#rulerror").innerHTML = "Municipality is required";
    isValid = false;
  } else {
    document.querySelector("#rulerror").innerHTML = "";
  }

  if (tole === "") {
    document.querySelector("#terror").innerHTML = "Tole is required";
    isValid = false;
  } else {
    document.querySelector("#terror").innerHTML = "";
  }

  if (ward === "") {
    document.querySelector("#werror").innerHTML = "Ward no. is required";
    isValid = false;
  } else {
    document.querySelector("#werror").innerHTML = "";
  }

  if (pass === "") {
    document.querySelector("#paserror").innerHTML = "Password is required";
    isValid = false;
  } else if (!pvalid.test(pass)) {
    document.querySelector("#paserror").innerHTML =
      "Password should be 8-20 characters long and must contain one uppercase, one lowercase, one digit, and one special character.";
    isValid = false;
  } else {
    document.querySelector("#paserror").innerHTML = "";
  }

  if (cpass === "") {
    document.querySelector("#cperror").innerHTML =
      "Re-enter the password is required.";
    isValid = false;
  } else if (cpass !== pass) {
    document.querySelector("#cperror").innerHTML = "Password does not match.";
    isValid = false;
  } else {
    document.querySelector("#cperror").innerHTML = "";
  }

  if (isValid) {
    const formData = new URLSearchParams({
      fname: fname,
      mname: mname,
      lname: lname,
      dob: dob,
      email: email,
      gender: gender,
      occupation: occupation,
      phone: phone,
      bgroup: bgroup,
      province: province,
      district: district,
      municipality: municipality,
      tole: tole,
      ward: ward,
      pass: pass,
    });

    fetch("donor/backend/registerdonor.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: formData,
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          window.location.href = "index.php";
        } else {
          document.getElementById("error").innerHTML = data.error;
        }
      })
      .catch((error) => {
        document.getElementById("error").innerHTML =
          "An error occurred. Please try again.";
      });
  } else {
    document.getElementById("error").innerHTML = "All fields are required.";
  }
}

function empty(input) {
  return input.value.trim() === "";
}
