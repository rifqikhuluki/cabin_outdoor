document.addEventListener("DOMContentLoaded", function () {
    const navbarNav = document.querySelector('.navbar-nav');
    const hamburger = document.querySelector('#hamburger-menu');
  
    // Toggle saat hamburger diklik
    if (hamburger) {
      hamburger.onclick = () => {
        navbarNav.classList.toggle('active');
      };
    }
  
    // Klik di luar navbar/hamburger untuk menutup menu
    document.addEventListener('click', function (e) {
      if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
      }
    });
  });
  