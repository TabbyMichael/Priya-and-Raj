function buildModalHtml(eventName, eventId) {
  return `
    <div id="rsvp-modal" class="modal-overlay">
      <div class="modal-container">
        <div class="modal-header">
          <h3>RSVP for ${eventName}</h3>
          <button class="modal-close" type="button" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">
          <form id="rsvp-form" class="rsvp-form">
            <input type="hidden" id="event-id" value="${eventId}">

            <div class="form-group">
              <label for="rsvp-name">Full Name *</label>
              <input type="text" id="rsvp-name" required placeholder="Your full name">
            </div>

            <div class="form-group">
              <label for="rsvp-email">Email Address *</label>
              <input type="email" id="rsvp-email" required placeholder="your.email@example.com">
            </div>

            <div class="form-group">
              <label for="rsvp-guests">Number of Guests</label>
              <select id="rsvp-guests">
                <option value="1">Just Me</option>
                <option value="2">2 People</option>
                <option value="3">3 People</option>
                <option value="4">4 People</option>
                <option value="5">5+ People</option>
              </select>
            </div>

            <div class="form-group">
              <label>Dietary Requirements</label>
              <div class="checkbox-group">
                <div>
                  <input type="checkbox" id="veg-${eventId}" name="dietary" value="Vegetarian">
                  <label for="veg-${eventId}">Vegetarian</label>
                </div>
                <div>
                  <input type="checkbox" id="non-veg-${eventId}" name="dietary" value="Non-Vegetarian">
                  <label for="non-veg-${eventId}">Non-Vegetarian</label>
                </div>
                <div>
                  <input type="checkbox" id="vegan-${eventId}" name="dietary" value="Vegan">
                  <label for="vegan-${eventId}">Vegan</label>
                </div>
                <div>
                  <input type="checkbox" id="allergies-${eventId}" name="dietary" value="Allergies">
                  <label for="allergies-${eventId}">Allergies (please specify)</label>
                </div>
              </div>
              <textarea id="allergies-info-${eventId}" placeholder="Please specify any allergies" class="allergies-textarea"></textarea>
            </div>

            <div class="form-group">
              <label for="rsvp-message">Special Message (Optional)</label>
              <textarea id="rsvp-message" placeholder="Any special requests or messages for the couple?"></textarea>
            </div>

            <div class="form-actions">
              <button type="button" id="cancel-rsvp" class="btn-secondary">Cancel</button>
              <button type="submit" class="btn-primary">Submit RSVP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  `;
}

function animateModalIn() {
  const modal = document.getElementById('rsvp-modal');
  if (!modal) return;
  const modalContainer = modal.querySelector('.modal-container');
  modal.classList.add('animated');
  if (modalContainer) modalContainer.classList.add('animated');
}

function closeModal() {
  const modal = document.getElementById('rsvp-modal');
  if (modal) modal.remove();
}

export function initRsvpModal() {
  const rsvpButtons = Array.from(document.querySelectorAll('.rsvp-btn'));
  if (rsvpButtons.length === 0) return;

  rsvpButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
      e.preventDefault();

      const card = button.closest('.event-card');
      if (!card) return;

      const eventNameEl = card.querySelector('.event-name');
      const eventName = eventNameEl ? eventNameEl.textContent : 'Event';
      const eventId = button.getAttribute('data-event') || 'event';

      document.body.insertAdjacentHTML('beforeend', buildModalHtml(eventName, eventId));

      setTimeout(animateModalIn, 10);

      const allergiesTextarea = document.querySelector(`#allergies-info-${eventId}`);
      if (allergiesTextarea) allergiesTextarea.style.display = 'none';

      const allergiesCheckbox = document.querySelector(`#allergies-${eventId}`);
      if (allergiesCheckbox && allergiesTextarea) {
        allergiesCheckbox.addEventListener('change', function () {
          allergiesTextarea.style.display = this.checked ? 'block' : 'none';
        });
      }

      const form = document.querySelector('#rsvp-form');
      if (form) {
        form.addEventListener('submit', (ev) => {
          ev.preventDefault();

          const name = document.querySelector('#rsvp-name')?.value;
          const email = document.querySelector('#rsvp-email')?.value;

          if (name && email) {
            const body = document.querySelector('.modal-body');
            if (body) {
              body.innerHTML = `
                <div class="success-message">
                  <h3>Thank You, ${name}!</h3>
                  <p>Your RSVP for <strong>${eventName}</strong> has been received.</p>
                  <p>We look forward to celebrating with you!</p>
                  <button id="close-modal" class="btn-primary" type="button">Close</button>
                </div>
              `;
            }
          } else {
            alert('Please fill in all required fields.');
          }
        });
      }

      const cancelBtn = document.querySelector('#cancel-rsvp');
      if (cancelBtn) cancelBtn.addEventListener('click', closeModal);

      const closeBtn = document.querySelector('.modal-close');
      if (closeBtn) closeBtn.addEventListener('click', closeModal);

      document.addEventListener('click', (ev) => {
        if (ev.target && ev.target.id === 'close-modal') closeModal();
      }, { once: true });
    });
  });

  document.addEventListener('click', (e) => {
    if (e.target && e.target.classList && e.target.classList.contains('modal-overlay')) {
      e.target.remove();
    }
  });

  document.addEventListener('keyup', (e) => {
    if (e.key === 'Escape') closeModal();
  });
}
