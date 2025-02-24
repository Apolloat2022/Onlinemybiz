// scripts.js

// Example: Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Example: Form validation for the registration form
document.querySelector('form[action="register.php"]').addEventListener('submit', function (e) {
  const name = document.querySelector('input[name="name"]').value;
  const email = document.querySelector('input[name="email"]').value;
  const phone = document.querySelector('input[name="phone"]').value;

  if (!name || !email || !phone) {
    e.preventDefault();
    alert('Please fill out all required fields.');
  }
});

// Example: Form validation for the contact form
document.querySelector('form[action="contact.php"]').addEventListener('submit', function (e) {
  const name = document.querySelector('input[name="name"]').value;
  const email = document.querySelector('input[name="email"]').value;
  const message = document.querySelector('textarea[name="message"]').value;

  if (!name || !email || !message) {
    e.preventDefault();
    alert('Please fill out all required fields.');
  }
});

// Example: Toggle mobile navigation menu
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarCollapse = document.querySelector('.navbar-collapse');

navbarToggler.addEventListener('click', () => {
  navbarCollapse.classList.toggle('show');
});

// Example: Add a simple animation to the hero section
const heroSection = document.querySelector('.hero-section');
if (heroSection) {
  heroSection.style.opacity = '0';
  setTimeout(() => {
    heroSection.style.transition = 'opacity 1s ease-in-out';
    heroSection.style.opacity = '1';
  }, 500);
}