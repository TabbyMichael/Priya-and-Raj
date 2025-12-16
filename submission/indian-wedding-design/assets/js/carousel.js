export function initCarousel() {
  const carouselInner = document.querySelector('.carousel-inner');
  const indicators = Array.from(document.querySelectorAll('.carousel-indicator'));
  const prevBtn = document.querySelector('.carousel-btn.prev');
  const nextBtn = document.querySelector('.carousel-btn.next');

  if (!carouselInner || indicators.length === 0 || !prevBtn || !nextBtn) return;

  let currentIndex = 0;
  const totalItems = indicators.length;

  function updateCarousel() {
    const offset = -currentIndex * (100 / totalItems);
    carouselInner.style.transform = `translateX(${offset}%)`;

    indicators.forEach((indicator, index) => {
      indicator.classList.toggle('active', index === currentIndex);
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    updateCarousel();
  }

  indicators.forEach((indicator, index) => {
    const handler = () => {
      currentIndex = index;
      updateCarousel();
    };
    indicator.addEventListener('click', handler);
    indicator.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        handler();
      }
    });
  });

  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);

  setInterval(nextSlide, 5000);
  updateCarousel();
}
