window.onload = function() {
  var alerta = document.getElementById("alerta");
  if (alerta) {
    alerta.style.display = "block";
    setTimeout(() => {
      alerta.style.display = "none";
    }, 4000);
  }
}