function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('active');
}

function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('active');
  }
  
  // Fotoğrafı basılı tutma olaylarını engelleme
  const images = document.querySelectorAll('.no-drag');
  
  images.forEach(img => {
    img.addEventListener('contextmenu', event => event.preventDefault());
    img.addEventListener('mousedown', event => event.preventDefault());
    img.addEventListener('touchstart', event => event.preventDefault());
  });
  