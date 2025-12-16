import { includePartials } from './include.js';
import { initCarousel } from './carousel.js';
import { initLoader, showLoader } from './loader.js';
import { initScrollAnimations } from './scroll-animate.js';
import { initTabs } from './tabs.js';
import { initRsvpModal } from './rsvp-modal.js';
import { initTheme } from './theme.js';
import { initFooter } from './footer.js';
import { initFAQ } from './faq.js';

document.addEventListener('DOMContentLoaded', async () => {
  await includePartials(document);

  initCarousel();
  initTabs();
  initScrollAnimations();
  initRsvpModal();
  initLoader();
  initFooter();
  initTheme();
  initFAQ();
  
  // Add loader to navigation links
  attachLoaderToNavigation();
});

function attachLoaderToNavigation() {
  // Add click event to header navigation links
  document.querySelectorAll('.header-nav .nav-links a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      showLoader();
    });
  });
  
  // Add click event to footer navigation links
  document.querySelectorAll('.footer-links a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      showLoader();
    });
  });
}