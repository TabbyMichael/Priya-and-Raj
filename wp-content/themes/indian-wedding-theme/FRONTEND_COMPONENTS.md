# Frontend Components

## 1. Hero Section
**File:** `template-parts/hero.php`
**Purpose:** Displays couple names, wedding date, location, and welcome message

### Component Details:
- Couple names prominently displayed in large, elegant typography
- Wedding date and location with clear formatting
- Welcome message with emotional appeal
- Scroll indicator with animated bouncing effect
- Background image with gradient overlay for text readability

### Technical Implementation:
- Uses Playfair Display font for headings
- Responsive sizing with media queries
- CSS animations for entrance effects
- Gradient overlay for better text contrast

## 2. Events Section
**File:** `template-parts/events.php`
**Purpose:** Shows all wedding events with RSVP functionality

### Component Details:
- Card-based layout for each event with hover effects
- Event-specific details (date, time, venue, dress code)
- RSVP buttons for each event with modal form integration
- Six events covered:
  - Bridal Shower
  - Haldi Ceremony
  - Mehndi Ceremony
  - Sangeet Night
  - Wedding Ceremony
  - Reception
- Responsive grid layout that adapts to screen size

### Technical Implementation:
- CSS Grid for responsive card layout
- Hover animations with transform and box-shadow
- Data attributes for JavaScript integration
- Semantic HTML structure for accessibility

## 3. Venue Information
**File:** `template-parts/venue.php`
**Purpose:** Interactive venue information with tabbed interface

### Component Details:
- Tabbed interface for different venues with active state styling
- Embedded Google Maps for each location
- Detailed venue information including:
  - Parking information
  - Transport options
  - Directions
- Six venue tabs matching events
- Smooth tab transitions

### Technical Implementation:
- JavaScript tab switching functionality
- iframe embedding for Google Maps
- CSS transitions for tab content
- Responsive map sizing

## 4. Rituals Timeline
**File:** `template-parts/rituals.php`
**Purpose:** Educational section explaining traditional wedding rituals

### Component Details:
- Vertical timeline layout with connecting line
- Descriptions of key ceremonies with timing
- Ritual images for visual representation
- Five traditional rituals:
  - Ganesh Puja
  - Kanyadaan
  - Panigrahana
  - Saptapadi
  - Sindoor Daan
- Staggered layout for odd/even items

### Technical Implementation:
- CSS pseudo-elements for timeline line
- Responsive timeline that stacks on mobile
- CSS animations for sequential reveal
- Flexible image sizing

## 5. Dietary Information
**File:** `template-parts/dietary.php`
**Purpose:** Provides menu information and dietary accommodations

### Component Details:
- Clear vegetarian menu information with emphasis
- Allergen disclosure with warning styling
- Special accommodation options with notes
- Note about meal service times
- Circular image styling for visual appeal

### Technical Implementation:
- Flexbox layout for image and text alignment
- CSS borders and shadows for visual distinction
- Responsive text sizing
- Accessible color contrast

## 6. Livestream Integration
**File:** `template-parts/livestream.php`
**Purpose:** Provides remote participation options

### Component Details:
- Access links for ceremony broadcast with styled buttons
- Time zone information (IST) with clear labeling
- Technical requirements and details in highlighted boxes
- Audio commentary information
- Circular image styling consistent with other sections

### Technical Implementation:
- CSS styling for links and buttons
- Flexbox layout for content arrangement
- Highlight boxes with colored borders
- Responsive image sizing

## 7. Social Media Gallery
**File:** `template-parts/gallery.php`
**Purpose:** Promotes social sharing and displays photos

### Component Details:
- Hashtag promotion (#PriyaWedsRaj2025) with large styling
- Social sharing options (Instagram, Facebook, X, TikTok) with branded colors
- Photo grid display with hover effects
- Links to social platforms with proper icons
- Gradient backgrounds for social buttons

### Technical Implementation:
- CSS Grid for photo gallery layout
- Flexbox for social icon arrangement
- Gradient backgrounds with vendor prefixes
- Responsive grid sizing

## 8. Contact Section
**File:** `template-parts/contact.php`
**Purpose:** Provides contact information for the couple

### Component Details:
- Couple signature with elegant typography
- Contact email and phone with mailto/tel links
- Personal message from the couple
- Styled for visibility with dark background
- Circular profile image styling

### Technical Implementation:
- Dark background with light text for contrast
- CSS styling for signature typography
- Proper link formatting for email/phone
- Responsive image sizing

## Additional Frontend Features

### JavaScript Interactivity
**File:** `js/custom.js`
**Purpose:** Provides dynamic user interactions

#### Features:
- Smooth scrolling navigation with easing functions
- Tab switching for venue information with active state management
- Modal RSVP forms with dynamic content generation
- Form validation with user feedback
- Responsive behaviors for mobile navigation
- Event listener management for optimal performance

### Styling
**File:** `style.css`
**Purpose:** Provides visual design and responsive layout

#### Features:
- Culturally-sensitive color palette with CSS variables
- Responsive design with media queries for all device sizes
- Animations and transitions for enhanced user experience
- Print-friendly styles with proper hiding/showing of elements
- Accessibility considerations with proper contrast and focus states
- Custom animations including heart loader and sequential reveals