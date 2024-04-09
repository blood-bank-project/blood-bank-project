const redbtn = document.getElementById("redbloodbtn");
const plasmabtn = document.getElementById("plasmabtn");
const plateletbtn = document.getElementById("plateletbtn");
const redcontent = document.getElementById("about-whole-blood");
const plasmacontent = document.getElementById("about-plasma");
const plateletcontent = document.getElementById("about-platelet");

plasmacontent.style.display = "none";
plateletcontent.style.display = "none";

plasmabtn.classList.remove("active");
plateletbtn.classList.remove("active");

redbtn.addEventListener("click", () => {
  hideAllContent();
  redcontent.style.display = "flex";
  redbtn.classList.add("active");
  plasmabtn.classList.remove("active");
  plateletbtn.classList.remove("active");
});

plasmabtn.addEventListener("click", () => {
  hideAllContent();
  plasmacontent.style.display = "flex";
  plasmabtn.classList.add("active");
  redbtn.classList.remove("active");
  plateletbtn.classList.remove("active");
});

plateletbtn.addEventListener("click", () => {
  hideAllContent();
  plateletcontent.style.display = "flex";
  plateletbtn.classList.add("active");
  redbtn.classList.remove("active");
  plasmabtn.classList.remove("active");
});

function hideAllContent() {
  redcontent.style.display = "none";
  plasmacontent.style.display = "none";
  plateletcontent.style.display = "none";
}

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
