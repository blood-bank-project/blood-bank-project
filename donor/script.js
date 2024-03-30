function loadContent(url) {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", url, true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status == 200) {
      document.getElementById("main-content").innerHTML = xhr.responseText;
      document.getElementById("main-content").classList.remove("loading");
    }
  };
  xhr.send();
}
