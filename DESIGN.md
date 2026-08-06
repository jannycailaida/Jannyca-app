---
name: Jannyca Ilaida Portfolio
description: Dark glassmorphism one-page portfolio for a BSIT student.
colors:
  background: "#0f172a"
  surface: "#1e293b"
  surface-alt: "#111c33"
  glass: "rgba(30, 41, 59, 0.62)"
  glass-strong: "rgba(15, 23, 42, 0.82)"
  border: "rgba(148, 163, 184, 0.16)"
  border-soft: "rgba(148, 163, 184, 0.10)"
  text-strong: "#f8fafc"
  text: "#e2e8f0"
  muted: "#94a3b8"
  primary: "#3b82f6"
  primary-soft: "#60a5fa"
  secondary: "#8b5cf6"
  purple-soft: "#c4b5fd"
  accent: "#06b6d4"
  cyan-soft: "#67e8f9"
  danger: "#f87171"
  success: "#4ade80"
  white: "#ffffff"
  violet-600: "#7c3aed"
  indigo: "#5046e5"
typography:
  display:
    fontFamily: "'Jost', 'Segoe UI', system-ui, sans-serif"
    fontSize: "clamp(2.6rem, 7vw, 4.3rem)"
    fontWeight: 600
    lineHeight: 1.15
    letterSpacing: "-0.02em"
  headline:
    fontFamily: "'Jost', 'Segoe UI', system-ui, sans-serif"
    fontSize: "clamp(2rem, 4vw, 2.6rem)"
    fontWeight: 600
    lineHeight: 1.15
    letterSpacing: "-0.02em"
  title:
    fontFamily: "'Jost', 'Segoe UI', system-ui, sans-serif"
    fontSize: "1.2rem"
    fontWeight: 600
    lineHeight: 1.15
  body:
    fontFamily: "'Nunito', 'Segoe UI', system-ui, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.6
  label:
    fontFamily: "'Jost', 'Segoe UI', system-ui, sans-serif"
    fontSize: "0.75rem"
    fontWeight: 600
    letterSpacing: "0.06em"
  scale:
    micro: "0.75rem"
    meta: "0.85rem"
    small-2: "0.9rem"
    small: "0.95rem"
    lead: "1.05rem"
    subhead: "1.15rem"
    hero-role: "1.25rem"
    icon-s: "1.3rem"
    brand: "1.35rem"
    icon-m: "1.4rem"
    hero-type: "1.5rem"
    icon-l: "1.6rem"
    stat-max: "1.9rem"
    icon-xl: "2rem"
    display-2: "2.4rem"
rounded:
  rail: "2px"
  focus: "4px"
  sm: "12px"
  tile: "14px"
  tile-lg: "16px"
  md: "20px"
  pill: "999px"
spacing:
  xs: "8px"
  sm: "12px"
  md: "16px"
  lg: "24px"
  xl: "32px"
  xxl: "48px"
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "#ffffff"
    rounded: "{rounded.pill}"
    padding: "12px 26px"
  button-primary-hover:
    backgroundColor: "{colors.secondary}"
    textColor: "#ffffff"
  button-ghost:
    backgroundColor: "{colors.glass}"
    textColor: "{colors.text-strong}"
    rounded: "{rounded.pill}"
    padding: "12px 26px"
  card:
    backgroundColor: "{colors.glass}"
    textColor: "{colors.text}"
    rounded: "{rounded.md}"
  chip:
    backgroundColor: "rgba(139, 92, 246, 0.12)"
    textColor: "{colors.purple-soft}"
    rounded: "{rounded.pill}"
    padding: "7px 14px"
  input:
    backgroundColor: "rgba(15, 23, 42, 0.6)"
    textColor: "{colors.text}"
    rounded: "{rounded.sm}"
    padding: "13px 16px"
  nav-link:
    textColor: "{colors.muted}"
    rounded: "{rounded.pill}"
    padding: "8px 14px"
---

# Design System: Jannyca Ilaida Portfolio

## Overview

**Creative North Star: "The Frosted Night Window"**

Deep-navy night sky seen through frosted glass. The page is one dark, calm ground (`--bg` slate navy) over which translucent panels float, catching soft blue, violet, and cyan light from behind. Glass is the material identity: every card, the navbar, the mobile menu, toasts, and the ghost button are frosted panels (backdrop blur 14-20px) resting on deep ambient shadow, so the page reads as layered light rather than flat color.

The density is airy and generous: one page, nine sections, wide grids with 24px gaps, card padding in the 24-36px range, and a single centered section heading per section. There is no visual noise above headings. The accent triad appears in small, deliberate amounts: icon chips, progress bars, gradient rules, pills, and buttons, never as large painted areas.

The motion is subtle and purpose-led: elements reveal upward (26px) on scroll, interactive surfaces lift on hover, and every animated value (counters, skill bars, typing, scroll progress) respects `prefers-reduced-motion` by rendering instantly. The build is honest about being a work in progress: placeholders are labeled with a cyan "Placeholder" tag rather than disguised.

**Key Characteristics:**
- Deep-navy base (`#0f172a`) with three faint ambient light blooms: violet top-right, blue left, cyan bottom.
- Frosted-glass surfaces with backdrop blur; soft ambient shadows do the depth work.
- Blue / violet / cyan accent triad, each with a pale tint for flat text accents.
- Gradient fills only on small surfaces: buttons, bars, icon chips, progress, rules.
- Jost for headings and labels, Nunito for body; display type carries the voice.
- Generous rounded corners: 20px cards, 12px inputs, 14px icon tiles, pill buttons and chips.
- Gentle motion grammar: 0.3s lift-on-hover, 0.7s scroll reveal, everything reduced-motion-safe.

## Colors

A cool night palette: a slate-navy neutral scale carries nearly all surface area, while a blue-violet-cyan triad provides small, high-contrast accents.

### Primary
- **Signal Blue** (`--primary` `#3b82f6`): the primary action color. Used in the primary button's gradient, the active nav highlight, the timeline rail's start, and the loader spinner. Its pair `--primary-soft` `#60a5fa` is the default link color.

### Secondary
- **Orchid Violet** (`--secondary` `#8b5cf6`): the secondary accent, used for the hero's ambient bloom, the timeline rail's end, and secondary fills. Its pale tint `--purple-soft` `#c4b5fd` is the chip text color and the hero specialization highlight.
- **Deep Violet** (`#7c3aed`): the end stop of the primary blue-to-violet gradient (buttons, skill bars, icon tiles, the to-top button).
- **Indigo Glow** (`#5046e5`): the action-glow shadow color behind primary buttons and the to-top button, used at 0.3-0.45 alpha.

### Tertiary
- **Neon Cyan** (`--accent` `#06b6d4`): the status and attention accent. Used for the typing cursor, timeline dots, section rules, and focus rings. Its pale tint `--cyan-soft` `#67e8f9` is the workhorse: the brand dot, name-strong highlight, typing word, stat suffixes, tags, icon chips, active underlines, and the page's focal-point color.

### Neutral
- **Midnight Navy** (`--bg` `#0f172a`): the page background and loader screen.
- **Abyss Navy** (`--bg-2` `#111c33`): a slightly lighter navy for placeholder artwork, the map placeholder, and project shots.
- **Slate Card** (`--card` `#1e293b`): the solid fallback surface (portrait placeholder, skip link).
- **Glass Panel** (`--glass` `rgba(30, 41, 59, 0.62)`): the translucent card background.
- **Strong Glass** (`--glass-strong` `rgba(15, 23, 42, 0.82)`): the near-opaque glass for the mobile menu and toasts.
- **Ink White** (`--text-strong` `#f8fafc`): headings and primary text.
- **Slate Mist** (`--text` `#e2e8f0`): body text.
- **Stone Muted** (`--muted` `#94a3b8`): secondary text, placeholders, labels.
- **Hairline Border** (`--border` `rgba(148, 163, 184, 0.16)` / `--border-soft` `rgba(148, 163, 184, 0.1)`): 1px translucent borders.
- **Alert Red** (`--danger` `#f87171`): form errors and the toast error icon.
- **Mint Success** (`#4ade80`): the toast success icon only.
- **Pure White** (`#fff`): text on gradient fills only — primary buttons, the nav CTA, the to-top button.

### Named Rules
**The Small-Accent Rule.** The three accents are used on small, countable elements: a gradient button, an icon chip, a 72px section rule, a 3px progress bar. Large painted areas stay neutral navy. Rarity is what makes the triad read.

**The Tint-Pair Rule.** Every accent ships with a pale soft tint, and the tints own the text-level accents (links, highlights, labels, icons). Saturated hues own fills; pale tints own text. This is why cyan-soft, purple-soft, and primary-soft exist.

## Typography

**Display Font:** Jost (fallback Segoe UI, system-ui)
**Body Font:** Nunito (fallback Segoe UI, system-ui)
Both loaded at weights 400-700 from Google Fonts; no mono font.

**Character:** Jost brings a clean, modern geometric voice to every heading and label, while Nunito's rounded friendliness carries the body. The pairing reads technical and approachable at once, a student developer's studio feel.

### Hierarchy
- **Display** (Jost 600, `clamp(2.6rem, 7vw, 4.3rem)`, line-height 1.15, tracking `-0.02em`): the hero name, the only display-size text on the page.
- **Headline** (Jost 600, `clamp(2rem, 4vw, 2.6rem)`, line-height 1.15, tracking `-0.02em`): section titles, centered above each section.
- **Title** (Jost 600, 1.2-1.35rem, line-height 1.15): card headings and the navbar and footer brands.
- **Body** (Nunito 400, 1rem, line-height 1.6): paragraph copy; section intros run slightly larger (1.05rem) in muted at up to 60ch. Lead paragraphs cap around 58ch.
- **Label** (Jost 600, 0.75rem, tracking `0.06em`, uppercase): the micro-caption voice, used for tags and timeline periods. Form fields use Jost 500 labels at 0.9rem; skill percentages render in tabular numerals.

The type ramp is a fixed scale from 0.75rem to 2.4rem (frontmatter `typography.scale`) with fluid clamps reserved for the hero name, section titles, stat values, the hero role, and the hero type. Every size sits on the ramp; there are no ad-hoc steps.

### Named Rules
**The Jost-Speaks-First Rule.** Every heading, button label, nav item, and micro-label is Jost; everything else is Nunito. If it leads a line, it is Jost. Body paragraphs, descriptions, and form values are the only Nunito territory.

## Layout

A single column of sections inside a centered container of `min(1140px, 100% - 48px)` (24px gutters). Each section is vertically spacious (padding `clamp(64px, 9vw, 108px)`) and anchored to the fixed 72px navbar via `scroll-margin-top`.

The hero is a two-column split (1.15 / 0.85) with copy left and the portrait right, filling the viewport (`min-height: 100svh`). Content sections use three-column grids with 24px gaps (skills, projects, certificates, services). The about area uses a two-column row, a 4-up stat band, and a 2-up chip band. The contact section is a 1 / 1.2 split with the form on the wider side. Timeline blocks are a single centered column (max 760px) with a 34px left rail.

Responsive behavior:
- Below 991px: all three-column grids collapse to two columns; stats collapse 4 to 2.
- Below 767px: nav links collapse into a full-width strong-glass dropdown under the hamburger; the hero stacks to one centered column with the portrait above the copy (portrait `min(72vw, 280px)`); about, chips, and contact go single column; the scroll chevron hides.
- Below 575px: two-column grids collapse to one column; project action buttons stack vertically.

Spacing rhythm is a fixed step scale of 8 / 12 / 16 / 24 / 32 / 48px. Grid gaps run at 24px, button clusters at 12-14px, chip clusters at 10px, social icon clusters at 10-12px, and section rules sit 20px below the intro.

## Elevation & Depth

A hybrid system: translucency and soft ambient shadow work together. Cards are frosted panels, not raised slabs. Their depth comes from backdrop blur (14px on cards, 16px on the navbar and toasts, 20px on the mobile menu) over the navy ground, with a gentle drop shadow underneath. Hover never adds more blur; it deepens the shadow and lifts the surface.

### Shadow Vocabulary
- **Card Rest** (`0 12px 40px rgba(2, 6, 23, 0.45)`): resting glass cards and the ghost button.
- **Card Hover** (`0 22px 52px rgba(2, 6, 23, 0.55)`): lifted cards and the hero portrait frame.
- **Action Glow** (`0 10px 30px rgba(59, 130, 246, 0.35)`): primary buttons, service icon tiles, and the to-top button.
- **Action Glow Strong** (`0 16px 34px rgba(80, 70, 229, 0.45)`): the primary button on hover (rest is `0 10px 26px rgba(80, 70, 229, 0.35)`).
- **Scrolled Nav** (`0 12px 30px rgba(2, 6, 23, 0.35)`): the navbar once the page has scrolled.

### Named Rules
**The Lift-To-Interact Rule.** Every interactive surface responds by lifting: buttons and chips rise 2-3px, social icons 4px, liftable cards 6px, all on a 0.3s `cubic-bezier(0.22, 1, 0.36, 1)` ease. If a surface can be clicked, it can rise.

## Shapes

A round, friendly form language over a dark ground. Cards use generously rounded corners (`--radius` 20px); inputs use 12px; icon tiles and the to-top button use 14px (16px on the larger service icon); and anything that reads as a button (buttons, chips, tags, pills, the section rule, skill-bar tracks, timeline dots) is a full pill (999px). The 4px focus ring and the 2px accent rails (active-nav underline, timeline spine) complete the scale. Borders are 1px hairlines in translucent slate: cards carry `border-soft`, interactive glass carries `border`, and hover states edge toward translucent cyan (`rgba(103, 232, 249, 0.3-0.5)`).

Gradients are a shape too. A blue-to-violet gradient (`135deg`, `#3b82f6` to `#7c3aed`) fills primary buttons, skill-bar fills, service icon tiles, and the to-top button. A cyan-to-blue gradient (`120deg`, `#06b6d4` to `#3b82f6`) fills the section rules, scroll progress bar, and active-nav underline. The hero portrait sits in a `--grad-ring` frame (28px corners, 10px padding, 4:5 aspect) with a cyan orb glow behind its top corner.

## Components

### Buttons
- **Shape:** full pill (999px), Jost 600 at 1rem, 12px / 26px padding, 10px icon gap.
- **Primary:** blue-to-violet gradient fill, white text, action-glow shadow. Hover lifts 3px and deepens the glow; active presses down 1px.
- **Ghost:** frosted glass fill, translucent slate border, strong-ink text, resting card shadow. Hover lifts 3px, edges translucent cyan, and the shadow deepens.
- **Block:** full-width variant. Disabled buttons drop to 60% opacity and cancel hover motion.

### Chips & Tags
- **Chip:** violet-tinted glass pill (`rgba(139, 92, 246, 0.12)` fill, 0.26 violet border), purple-soft text, 7px / 14px padding. Hover brightens the fill, lifts 2px, and edges toward lavender. Used for strengths, soft skills, and coursework.
- **Tag:** cyan micro-label (0.75rem, 700, uppercase, tracked) on a `rgba(6, 182, 212, 0.12)` tint with a cyan border. Non-interactive; used to honestly label placeholder content and project shots.

### Cards / Containers
- **Corner Style:** 20px. **Background:** frosted glass with 14px backdrop blur. **Border:** 1px `border-soft`. **Shadow:** Card Rest. **Padding:** `clamp(24px, 4vw, 36px)`.
- **Lift variant:** hover rises 6px, deepens to Card Hover, and the border edges translucent cyan.
- Specialized faces: skill cards with a 46px cyan icon chip; project cards with a 16:9 gradient placeholder shot and tech pills; certificate cards with a 64px round cyan icon; service cards with a 56px gradient icon tile and glow.

### Inputs / Fields
- **Style:** dark inset fill (`rgba(15, 23, 42, 0.6)`), 1px slate border, 12px corners, 13px / 16px padding, Nunito 1rem (matching the body size). Jost 500 labels at 0.9rem sit above, placeholders are muted.
- **Focus:** the border shifts to translucent cyan with a 4px cyan glow ring (`0 0 0 4px rgba(6, 182, 212, 0.14)`).
- **Error:** the border turns alert red and the field's error line (0.85rem red) appears. Editing a field clears its error immediately.

### Navigation
A fixed glass bar (72px) with 16px backdrop blur over a `rgba(15, 23, 42, 0.55)` fill. Once the page scrolls past 24px it darkens to 0.85 opacity, gains a hairline bottom border, and a soft shadow. Links are Jost 0.95rem in muted, pill-hovering to a translucent slate wash. The active section link gets a translucent blue wash plus a 2px cyan-to-blue underline. The brand is Jost 1.35rem strong-ink with a cyan period. On mobile the links collapse behind a 44px glass hamburger and drop as a full-width strong-glass panel with 20px blur.

### Timeline (Experience / Education)
A centered 760px column with a 2px gradient rail (blue to violet) down the left. Each entry is a glass card preceded by a 24px dot: navy center, 3px cyan ring, 5px cyan halo. Entries open with an uppercase cyan period label (Jost 0.85rem, tracked) above a Jost heading and a muted place line. This is the system's signature information pattern.

### Toasts
A fixed bottom-right stack (max 360px). Each toast is a strong-glass panel (16px blur), 12px corners, Card Hover shadow, 0.9rem 600 text, with an inline icon that carries the status color: mint success, red error, cyan info. Toasts slide in over 0.4s, auto-dismiss at 3.8s, and fade out over 0.35s.

### Supporting chrome
The loader is a full-screen navy sheet with a cyan Jost "JI" monogram and a 34px spinning ring; it fades over 0.5s and is forcibly removed at 2.5s so it never traps the visitor. The scroll progress bar is a 3px gradient fill pinned to the top of the page. The to-top button is a 48px gradient square (14px corners, glow) that appears past 520px of scroll and lifts 3px on hover.

## Do's and Don'ts

### Do:
- **Do** build surfaces from frosted glass: `rgba(30, 41, 59, 0.62)` cards with 14px backdrop blur over the navy ground.
- **Do** use the blue-violet-cyan triad in small amounts and let the pale tints carry text-level accents.
- **Do** fill small surfaces with interactive gradients (buttons, bars, icon tiles, progress) and keep large areas neutral navy.
- **Do** let interactive surfaces lift 2-6px on a 0.3s `cubic-bezier(0.22, 1, 0.36, 1)` ease.
- **Do** use Jost for anything that leads a line and Nunito for body copy and form values.
- **Do** honor `prefers-reduced-motion`: render animated values instantly and drop looped animations.
- **Do** label placeholder content honestly with the cyan "Placeholder" tag.

### Don't:
- **Don't** use opaque solid panels where glass is expected; translucency is the identity (solid is reserved for the loader, placeholder artwork, and input wells).
- **Don't** expand the accent triad beyond blue, violet, and cyan, or introduce new hues for decoration.
- **Don't** paint large areas with accent or gradient fills; the Small-Accent Rule keeps them rare.
- **Don't** break the radius scale: 2px rails, 4px focus, 12px inputs, 14-16px icon tiles, 20px cards, pills for interactive elements.
- **Don't** ship a new animation without a reduced-motion path.
