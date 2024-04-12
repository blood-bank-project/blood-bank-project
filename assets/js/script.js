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
  let patientlogin = document.getElementById("patientlogin");
  let adminlogin = document.getElementById("adminlogin");
  let donorloginpopup = document.getElementById("donorloginpopup");
  let patientloginpopup = document.getElementById("patientloginpopup");
  let adminloginpopup = document.getElementById("adminloginpopup");
  let closebutton1 = document.getElementById("closebutton1");
  let closebutton2 = document.getElementById("closebutton2");
  let closebutton3 = document.getElementById("closebutton3");

  donorlogin.addEventListener("click", function () {
    donorloginpopup.style.display = "block";
  });
  adminlogin.addEventListener("click", function () {
    adminloginpopup.style.display = "block";
  });
  patientlogin.addEventListener("click", function () {
    patientloginpopup.style.display = "block";
  });

  closebutton1.addEventListener("click", function () {
    donorloginpopup.style.display = "none";
  });
  closebutton2.addEventListener("click", function () {
    adminloginpopup.style.display = "none";
  });
  closebutton3.addEventListener("click", function () {
    patientloginpopup.style.display = "none";
  });
});
