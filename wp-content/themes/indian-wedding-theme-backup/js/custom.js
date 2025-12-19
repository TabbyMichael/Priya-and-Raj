jQuery(document).ready(function($) {
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $($(this).attr('href'));
        
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // Tab switching functionality
    $('.tab-btn').on('click', function() {
        var tabId = $(this).data('tab');
        
        // Remove active class from all buttons and contents
        $('.tab-btn').removeClass('active');
        $('.tab-content').removeClass('active');
        
        // Add active class to clicked button
        $(this).addClass('active');
        
        // Show corresponding content
        $('#' + tabId + '-tab').addClass('active');
    });
    
    // RSVP Form Handling
    $('.rsvp-btn').on('click', function(e) {
        e.preventDefault();
        
        // Get the event name and ID from the button's parent card
        var eventName = $(this).closest('.event-card').find('.event-name').text();
        var eventId = $(this).data('event');
        
        // Create a modal for RSVP
        var modalHtml = `
            <div id="rsvp-modal" class="modal-overlay">
                <div class="modal-container">
                    <div class="modal-header">
                        <h3>RSVP for ${eventName}</h3>
                        <button class="modal-close">&times;</button>
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
        
        $('body').append(modalHtml);
        
        // Hide allergies textarea initially
        $(`.allergies-textarea`).hide();
        
        // Show allergies textarea when checkbox is checked
        $(`#allergies-${eventId}`).change(function() {
            if(this.checked) {
                $(`#allergies-info-${eventId}`).show();
            } else {
                $(`#allergies-info-${eventId}`).hide();
            }
        });
        
        // Handle form submission
        $('#rsvp-form').on('submit', function(e) {
            e.preventDefault();
            
            var name = $('#rsvp-name').val();
            var email = $('#rsvp-email').val();
            var guests = $('#rsvp-guests').val();
            var eventId = $('#event-id').val();
            
            // Collect dietary preferences
            var dietary = [];
            $('input[name="dietary"]:checked').each(function() {
                dietary.push($(this).val());
            });
            
            var allergiesInfo = $(`#allergies-info-${eventId}`).val();
            var message = $('#rsvp-message').val();
            
            if(name && email) {
                // In a real implementation, this would send data to the server
                // For now, we'll show a success message
                $('.modal-body').html(`
                    <div class="success-message">
                        <h3>Thank You, ${name}!</h3>
                        <p>Your RSVP for <strong>${eventName}</strong> has been received.</p>
                        <p>We look forward to celebrating with you!</p>
                        <button id="close-modal" class="btn-primary">Close</button>
                    </div>
                `);
            } else {
                alert('Please fill in all required fields.');
            }
        });
        
        // Handle cancel button
        $('#cancel-rsvp, .modal-close').on('click', function() {
            $('#rsvp-modal').remove();
        });
        
        // Handle close button in success message
        $(document).on('click', '#close-modal', function() {
            $('#rsvp-modal').remove();
        });
    });
    
    // Close modal when clicking outside
    $(document).on('click', '.modal-overlay', function(e) {
        if(e.target.classList.contains('modal-overlay')) {
            $(this).remove();
        }
    });
    
    // Close modal with Escape key
    $(document).on('keyup', function(e) {
        if(e.key === "Escape") {
            $('#rsvp-modal').remove();
        }
    });
});