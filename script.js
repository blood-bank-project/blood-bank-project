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
