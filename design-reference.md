
# 🎨 Design Reference: Hello Elementor Theme

This document captures the key design tokens and CSS structure used in a WordPress site built with the Hello Elementor theme. It can be used as a design reference when rebuilding or mimicking the style in a Laravel or custom frontend project.

---

## 🌈 Global Colors

```css
--e-global-color-primary: #004558;
--e-global-color-secondary: #3B3C3D;
--e-global-color-text: #7A7A7A;
--e-global-color-accent: #FFC522;
--e-global-color-danger: #DB2A17;
--e-global-color-muted: #D1D2D4;
--e-global-color-light: #E8E9EA;
--e-global-color-white: #FFFFFF;
```

**Usage:**
- Primary: `#004558` – Main brand color.
- Secondary: `#3B3C3D` – Neutral text/section color.
- Accent: `#FFC522` – Call-to-action, highlights.
- Danger: `#DB2A17` – Error or critical action.
- Text: `#7A7A7A` – Body content.
- Muted: `#D1D2D4`, Light: `#E8E9EA`, White: `#FFFFFF` – Backgrounds or subtle elements.

---

## 🖋 Typography

### Font Families
```css
--primary-font: "Barlow Condensed", sans-serif;
--secondary-font: "Barlow Semi Condensed", sans-serif;
--body-font: "Roboto", sans-serif;
--fallback-fonts: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif;
```

### Font Settings
```css
--font-size-body: 16px;
--font-size-text: 17px;
--font-weight-primary: 700;
--font-weight-secondary: 700;
--font-weight-body: 400;
--text-transform-uppercase: uppercase;
```

---

## 🧱 Layout + Box Model

```css
* {
  box-sizing: border-box;
  user-select: none;
}
body {
  margin: 0;
  padding: 0;
  line-height: 1.5;
}
```

- Universal box model: `border-box`
- Non-selectable text (user-select disabled)
- Clean, margin-less `body`
- Responsive typography and spacing

---

## 🎨 Background

```css
body {
  background-color: #fff;
  color: #333;
}
.elementor-page-2 {
  background-color: #FFFFFF;
}
```

---

## 📏 Preset Variables (from WordPress)

### Spacing
```css
--spacing-20: 0.44rem;
--spacing-30: 0.67rem;
--spacing-40: 1rem;
--spacing-50: 1.5rem;
--spacing-60: 2.25rem;
--spacing-70: 3.38rem;
--spacing-80: 5.06rem;
```

### Shadows
```css
--shadow-natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
--shadow-deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
```

### Aspect Ratios
```css
--aspect-ratio-16-9: 16 / 9;
--aspect-ratio-4-3: 4 / 3;
--aspect-ratio-1-1: 1 / 1;
```

---

## 🖼 UI Behavior

```css
body, p {
  font-family: 'Open Sans', sans-serif !important;
  font-size: 16px !important;
  color: #333533 !important;
}
```

- Enforced Open Sans for paragraphs
- Override importance with `!important`
- Clean and neutral color `#333533`

---

## 📱 Notes on Framework Usage

- Theme: `Hello Elementor`
- Builder: Elementor (with kits)
- Page-specific class: `.elementor-page-2`
- Kit reference: `.elementor-kit-6`

---

## ✅ Design Summary

| Element            | Value                      |
|--------------------|----------------------------|
| Primary Color      | `#004558`                  |
| Accent Color       | `#FFC522`                  |
| Typography         | Barlow / Roboto / Open Sans |
| Body BG            | `#FFFFFF`                  |
| Text Color         | `#333533`                  |
| Shadow Depth       | Natural, Deep              |
| Box Model          | `box-sizing: border-box;`  |
| Font Size (Body)   | 16–17px                    |
| User Select        | `none` (global)            |

---

### ✨ Use This File in Cursor

- Save this as `design-reference.md`
- Use it with your Laravel, Vue, or Tailwind CSS setup as a style guide
- Apply color and typography tokens using Tailwind config or SCSS variables
