export function initLoader() {
  const loading = document.getElementById('loading');
  if (!loading) {
    document.body.classList.remove('is-loading');
    return;
  }

  // Ensure the main content is visible but blurred behind the loader
  document.body.classList.add('is-loading');
  
  setTimeout(() => {
    loading.style.opacity = '0';

    setTimeout(() => {
      loading.style.display = 'none';
      document.body.classList.remove('is-loading');
    }, 500);
  }, 1000); // Changed to 1 second as requested
}

// Function to show loader manually
export function showLoader() {
  const loading = document.getElementById('loading');
  if (!loading) return;
  
  // Reset styles if hidden
  loading.style.display = 'flex';
  loading.style.opacity = '1';
  document.body.classList.add('is-loading');
  
  // Hide after 1 second
  setTimeout(() => {
    loading.style.opacity = '0';

    setTimeout(() => {
      loading.style.display = 'none';
      document.body.classList.remove('is-loading');
    }, 500);
  }, 1000);
}