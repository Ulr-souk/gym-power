// main.js
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) e.target.classList.add('visible');
      });
    }, { threshold: 0.2 });
  
    sections.forEach(sec => {
      sec.classList.add('hidden');
      observer.observe(sec);
    });
  });