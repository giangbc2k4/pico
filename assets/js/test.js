var list = document.getElementById('messac');
var listchat = document.getElementById('mess');

document.getElementById("messac").addEventListener("click", function() {
    list.style.display = "none";
    listchat.style.display ="block"
  });
  document.getElementById("thei").addEventListener("click", function() {
    listchat.style.display = "none";
    list.style.display = "block";
  });