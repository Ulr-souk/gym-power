// Exemple : menu simple pour mobile
const nav = document.querySelector('nav');
document.querySelector('#hero p').addEventListener('click', () => {
  nav.classList.toggle('open');
});