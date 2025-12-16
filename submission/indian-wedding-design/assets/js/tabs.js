export function initTabs() {
  const tabBtns = Array.from(document.querySelectorAll('.tab-btn'));
  const tabContents = Array.from(document.querySelectorAll('.tab-content'));
  if (tabBtns.length === 0 || tabContents.length === 0) return;

  tabBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      tabBtns.forEach((b) => b.classList.remove('active'));
      tabContents.forEach((c) => c.classList.remove('active'));

      btn.classList.add('active');
      const tabId = btn.getAttribute('data-tab') + '-tab';
      const target = document.getElementById(tabId);
      if (target) target.classList.add('active');
    });
  });
}
