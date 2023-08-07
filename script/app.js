const afterScrollDiv = document.querySelector('.after-scroll');
const introParagraph = document.querySelector('.intro');

function updateScroll() {
  const scrollPosition = window.scrollY;
  const introPosition = introParagraph.getBoundingClientRect().top;
  const windowHeight = window.innerHeight;

  if (scrollPosition > introPosition - windowHeight + 100) {
    afterScrollDiv.classList.add('show-after-scroll');
  } else {
    afterScrollDiv.classList.remove('show-after-scroll');
  }
}

document.addEventListener('DOMContentLoaded', () => {
  // Call the updateScroll function on page load
  updateScroll();

  // Call the updateScroll function on scroll events
  window.addEventListener('scroll', updateScroll);
});
