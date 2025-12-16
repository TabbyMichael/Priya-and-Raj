// FAQ Accordion Functionality
export function initFAQ() {
  const faqQuestions = document.querySelectorAll('.faq-question');
  
  faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
      // Toggle active class on question
      question.classList.toggle('active');
      
      // Get the corresponding answer
      const answer = question.nextElementSibling;
      
      // Toggle open class on answer
      answer.classList.toggle('open');
    });
  });
}