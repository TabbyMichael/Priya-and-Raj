# Backend Services

## 1. Custom WordPress Theme
**Files:** `style.css`, `index.php`, `header.php`, `footer.php`, `functions.php`
**Purpose:** Provides the foundation for the entire website

### Component Details:
- Theme metadata in `style.css` with proper WordPress theme headers
- Template hierarchy with `index.php` as main template file
- Header and footer templating with embedded CSS and JavaScript
- WordPress theme setup and configuration with after_setup_theme hook
- Script and style enqueueing with proper dependencies
- Navigation menu registration with esc_html__ for internationalization

### Technical Implementation:
- WordPress Coding Standards compliance
- Proper hook usage for theme initialization
- Secure enqueueing of scripts and styles
- Responsive design with mobile-first approach
- Accessibility features with semantic HTML

## 2. RSVP Custom Post Type
**File:** `functions.php`
**Purpose:** Stores and manages RSVP submissions

### Component Details:
- Custom post type registration: `wedding_rsvp` with proper labels
- Supports title, editor, and custom fields functionality
- Publicly accessible with archive enabled for administrative viewing
- Labels for admin interface with singular and plural forms
- Menu icon and position customization

### Technical Implementation:
- register_post_type() with proper arguments
- init hook for registration
- Internationalization-ready labels
- REST API exposure control
- Capability type configuration

## 3. AJAX-Powered Form Handlers
**File:** `functions.php` and `js/custom.js`
**Purpose:** Processes RSVP submissions without page reloads

### Component Details:
- AJAX actions for authenticated (`wp_ajax_`) and non-authenticated (`wp_ajax_nopriv_`) users
- Security measures including nonce verification with wp_verify_nonce()
- Data sanitization for all inputs using sanitize_text_field() and sanitize_email()
- Custom field storage for RSVP details using update_post_meta()
- JSON response handling with wp_send_json_success() and wp_send_json_error()
- Error handling and success messaging with proper HTTP status codes

### Technical Implementation:
- WordPress AJAX API integration
- Nonce verification for security (`rsvp_nonce`)
- Data sanitization and validation
- WordPress database functions for storage
- JSON response formatting
- Proper error handling and logging

## 4. Template Part System
**Files:** All files in `template-parts/` directory
**Purpose:** Modular component organization for maintainability

### Component Details:
- Feature-folder architecture implementation following WordPress best practices
- Separation of concerns for each website section
- WordPress `get_template_part()` integration for dynamic inclusion
- Reusable and maintainable code structure
- Eight distinct template parts:
  - `hero.php`
  - `events.php`
  - `venue.php`
  - `rituals.php`
  - `dietary.php`
  - `livestream.php`
  - `gallery.php`
  - `contact.php`

### Technical Implementation:
- Modular file organization
- WordPress template hierarchy compliance
- PHP include optimization
- Code reusability patterns
- Maintainable structure

## Additional Backend Features

### Theme Functions
**File:** `functions.php`
**Purpose:** Core theme functionality and WordPress integration

#### Features:
- Theme setup with WordPress features (title-tag, post-thumbnails, custom-logo, html5)
- Script and style enqueueing with versioning
- Google Fonts integration with proper fallbacks
- jQuery dependency management with wp_enqueue_script()
- Custom post type creation with proper hooks
- AJAX handler registration with add_action()

#### Technical Implementation:
- WordPress hooks system utilization
- Proper dependency management
- Version control for cache busting
- Conditional loading based on context
- Performance optimization

### Security Measures
**File:** `functions.php`
**Purpose:** Protects against malicious submissions and attacks

#### Features:
- Nonce verification for form submissions with wp_verify_nonce()
- Data sanitization for text inputs using sanitize_text_field()
- Email sanitization for contact information with sanitize_email()
- Integer validation for guest counts using intval()
- WordPress security best practices including capability checks
- XSS prevention with proper output escaping

#### Technical Implementation:
- WordPress security functions
- Input validation at entry points
- Output escaping for display
- Capability checks for privileged actions
- Secure AJAX endpoint design

### Data Storage
**File:** `functions.php`
**Purpose:** Persistent storage of RSVP information

#### Features:
- WordPress post creation for each RSVP using wp_insert_post()
- Custom field storage for detailed information with update_post_meta()
- Metadata storage for name, email, guest count, dietary preferences
- Structured data organization with consistent naming conventions
- Error handling for database operations

#### Technical Implementation:
- WordPress database abstraction layer
- Atomic operations for data consistency
- Proper error handling and rollback
- Meta key naming conventions
- Data retrieval optimization