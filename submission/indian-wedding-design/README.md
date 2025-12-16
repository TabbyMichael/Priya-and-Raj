# Decoupled Wedding Invitation (HTML/CSS/JS)

This is a decoupled version of `submission/indian-wedding-design.html` split into:

- `index.html` (shell)
- `partials/` (section markup)
- `assets/css/` (styles split by concern)
- `assets/js/` (modular JS)

## How it works

`index.html` loads HTML partials using `fetch()` (`data-include="partials/..."`).

Because browsers block `fetch()` from `file://` in most cases, **serve this folder via a local web server**.

Examples:

- Use VS Code “Live Server”
- Or any simple static server

## Image paths

The original `submission/images/` folder is empty. This decoupled version references the images already present in:

`../wp-content/themes/indian-wedding-theme/images/`

## Original file

The original single-file version remains here:

- `submission/indian-wedding-design.html`
