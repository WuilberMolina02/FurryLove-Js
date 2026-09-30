 
  const hamburger = document.querySelector(".hamburger");
  const sideMenu = document.getElementById("sideMenu");
  const closeBtn = document.getElementById("closeBtn");
  const dropdownBtn = document.querySelector(".side-menu .dropbtn");
  const dropdown = document.querySelector(".side-menu .dropdown");
  const navbar = document.querySelector(".navbar");
 
  // Abrir sidebar y ocultar navbar horizontal
  hamburger.addEventListener("click", () => {
    sideMenu.classList.add("active");
    if (navbar) {
      navbar.style.display = "none"; // 🔥 se oculta navbar en móvil
    }
  });
 
  // Cerrar sidebar y volver a mostrar navbar solo si está en PC
  closeBtn.addEventListener("click", () => {
    sideMenu.classList.remove("active");
    if (window.innerWidth > 768 && navbar) {
      navbar.style.display = "flex"; // 🔥 vuelve a aparecer en escritorio
    }
  });
 
  // Toggle dropdown en sidebar
  dropdownBtn.addEventListener("click", () => {
    dropdown.classList.toggle("open");
  });
 
  // Ajustar navbar cuando se cambie tamaño de pantalla
  window.addEventListener("resize", () => {
    if (window.innerWidth > 768 && navbar) {
      navbar.style.display = "flex";
    } else if (!sideMenu.classList.contains("active") && navbar) {
      navbar.style.display = "none";
    }
  });
 