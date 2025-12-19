# Indian Wedding Invitation Website

[![License](https://img.shields.io/badge/license-GPL--2.0-blue.svg)](LICENSE)
[![Platform](https://img.shields.io/badge/platform-WordPress-green.svg)](https://wordpress.org/)
[![Responsive](https://img.shields.io/badge/responsive-yes-brightgreen.svg)](#)

A custom one-page Indian wedding invitation website built with WordPress for a North-Indian Hindu wedding. This culturally-sensitive design features multi-event RSVP functionality, venue information, ritual explanations, and social sharing capabilities.

## 🎯 Features

- **Multi-Event RSVP System** - Selective attendance for each wedding event with guest count and dietary preferences
- **Interactive Venue Information** - Tabbed interface for different locations with maps and directions
- **Cultural Education** - Timeline explaining traditional wedding rituals and ceremonies
- **Dietary Transparency** - Clear vegetarian menu information with allergen accommodations
- **Livestream Integration** - Remote participation options with timezone details
- **Social Media Gallery** - Hashtag promotion and photo sharing capabilities
- **Fully Responsive Design** - Mobile-first approach with cross-device compatibility
- **Accessibility Focused** - WCAG compliant with keyboard navigation and screen reader support
- **Print-Friendly Version** - Optimized for physical invitations and sharing

## 🚀 Installation & Setup

### Prerequisites
- WordPress 5.0 or higher
- PHP 7.4 or higher
- MySQL 5.6 or higher
- Web server (Apache/Nginx)

### Installation Steps

1. **Clone or Download Repository**
   ```bash
   git clone https://github.com/yourusername/indian-wedding-invitation.git
   ```

2. **Upload Theme**
   - Copy the `wp-content/themes/indian-wedding-theme` folder to your WordPress installation's themes directory
   - Or upload via WordPress Admin → Appearance → Themes → Add New → Upload Theme

3. **Activate Theme**
   - Go to WordPress Admin → Appearance → Themes
   - Activate "Indian Wedding Invitation" theme

4. **Configure Content**
   - Edit template parts in `wp-content/themes/indian-wedding-theme/template-parts/`
   - Update couple names, dates, and venue information
   - Add actual venue maps and livestream links

5. **Customize Styling (Optional)**
   - Modify `wp-content/themes/indian-wedding-theme/style.css` for design changes
   - Update images in `wp-content/themes/indian-wedding-theme/images/`

## 💡 Usage Examples

### Customizing Wedding Details
Edit `template-parts/hero.php` to update couple names and wedding date:
```php
<h1 class="couple-names">Your Names</h1>
<div class="wedding-date">Wedding Date • Location</div>
```

### Adding New Events
Modify `template-parts/events.php` to add or remove wedding events:
```php
<div class="event-card" data-event="unique-id">
    <h3 class="event-name">Event Name</h3>
    <div class="event-details">
        <p><strong>Date:</strong> Event Date</p>
        <p><strong>Time:</strong> Event Time</p>
        <p><strong>Venue:</strong> Event Venue</p>
    </div>
    <button class="rsvp-btn" data-event="unique-id">RSVP</button>
</div>
```

### Updating RSVP Handling
Modify `functions.php` to customize RSVP email notifications or database storage:
```php
// In handle_rsvp_submission() function
wp_mail($admin_email, 'New RSVP', $message_content);
```

## ⚙️ Configuration

### Color Scheme
The theme uses CSS variables for consistent color management:
- `--primary-color`: Deep Maroon (#8B0000) - Luxury and celebration
- `--secondary-color`: Gold (#D4AF37) - Prosperity and elegance
- `--accent-color`: Peacock Blue (#008080) - Traditional Indian aesthetics
- `--light-color`: Ivory (#FEFDFC) - Sophisticated backdrop

To customize colors, modify the `:root` variables in `style.css`.

### Typography
- **Headings**: Playfair Display (Serif) - Elegant and traditional
- **Body Text**: Montserrat (Sans-serif) - Clean and modern

### RSVP Settings
Configure RSVP behavior in `functions.php`:
- Email notifications
- Database storage options
- Validation rules

## 🛠 Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 7.4+, WordPress 5.0+
- **Database**: MySQL 5.6+
- **Styling**: CSS Variables, Flexbox, CSS Grid
- **Fonts**: Google Fonts (Playfair Display, Montserrat)
- **Icons**: Unicode emojis and Font Awesome
- **Build Tools**: None required (vanilla implementation)

## 🤝 Contribution Guidelines

We welcome contributions to improve this wedding invitation theme!

### Getting Started
1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Code Standards
- Follow WordPress Coding Standards
- Use meaningful variable and function names
- Comment complex logic
- Maintain responsive design principles
- Ensure accessibility compliance

### Reporting Issues
- Use the GitHub issue tracker
- Provide detailed reproduction steps
- Include browser/device information
- Tag issues appropriately (bug, enhancement, question)

## 🧪 Testing & Deployment

### Testing Checklist
- [ ] All RSVP forms submit correctly
- [ ] Venue tabs switch properly
- [ ] Mobile responsiveness verified
- [ ] Cross-browser compatibility tested
- [ ] Accessibility features functional
- [ ] Print styles render correctly
- [ ] Performance optimization validated

### Deployment Steps
1. Test locally with WordPress development environment
2. Validate all functionality with sample data
3. Optimize images for web delivery
4. Minify CSS/JS for production (optional)
5. Upload theme to production server
6. Configure WordPress permalinks
7. Test live site functionality

### Hosting Recommendations
- **Shared Hosting**: Bluehost, SiteGround (budget option)
- **Managed WordPress**: WP Engine, Kinsta (performance option)
- **Cloud Hosting**: AWS, Google Cloud (enterprise option)

## 🗺 Roadmap

### Version 1.1 (Planned)
- [ ] Multilingual support (Hindi, regional languages)
- [ ] Calendar integration for event reminders
- [ ] Enhanced admin dashboard for content management
- [ ] Improved RSVP analytics and reporting

### Version 1.2 (Future)
- [ ] Mobile app companion with push notifications
- [ ] Virtual venue tours with 360° photography
- [ ] Video testimonials from wedding party
- [ ] Gift registry integration

### Long-term Vision
- [ ] Template marketplace for different cultural weddings
- [ ] AI-powered guest seating arrangements
- [ ] AR/VR wedding experience previews
- [ ] Blockchain-based digital invitations

## 📄 License

This project is licensed under the GNU General Public License v2.0 - see the [LICENSE](LICENSE) file for details.

---

<p align="center">Made with ❤️ for celebrating love and culture</p># Priya-Raj
# Priya-and-Raj
# Priya-and-Raj
# Priya-and-Raj
