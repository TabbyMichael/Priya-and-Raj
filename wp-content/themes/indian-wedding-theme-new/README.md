# Indian Wedding Theme (New)

This folder contains the refactored WordPress theme with a scalable structure.

## Activate

In WordPress Admin:

- Appearance -> Themes -> activate `Indian Wedding` (this theme folder)

## Assets

The theme will try to load:

- `dist/css/main.min.css`
- `dist/js/main.min.js`

If those files do not exist, it will fall back to:

- `style.css`
- `assets/js/main.js`

## SCSS Architecture

Source SCSS lives in:

- `assets/scss/main.scss`

It imports modular partials under:

- `assets/scss/base/`
- `assets/scss/layout/`
- `assets/scss/components/`
- `assets/scss/pages/`
- `assets/scss/themes/`

## PHP Structure

- `functions.php` loads feature modules from `/includes/*`
- Templates use `template-parts/` for reusable content rendering

## Notes

- This repo contains a full WordPress install. This theme is isolated under `wp-content/themes/indian-wedding-theme-new/`.
- A previous custom theme exists under `wp-content/themes/indian-wedding-theme/`.
