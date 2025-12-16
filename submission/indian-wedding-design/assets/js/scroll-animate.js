export function initScrollAnimations() {
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;

      entry.target.classList.add('animated');

      const children = entry.target.querySelectorAll('*');
      children.forEach((child) => {
        if (child.classList) child.classList.add('animated');
      });

      observer.unobserve(entry.target);
    });
  }, observerOptions);

  const sections = document.querySelectorAll('.wedding-section, .section-title, .section-intro');
  sections.forEach((section) => observer.observe(section));

  const animatedElements = document.querySelectorAll(
    '.event-card, .tab-btn, .map-placeholder, .rituals-timeline, .ritual-item, .gallery-item, .social-icon, .dietary-image, .livestream-image, .contact-image, .couple-signature, .contact-info, .event-image, .ritual-image, .ritual-content, .venue-info, .hashtag'
  );
  animatedElements.forEach((element) => observer.observe(element));
}
