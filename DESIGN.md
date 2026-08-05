---
name: Jannyca Ilaida — Programme Bill
description: A single arched programme bill introducing Jannyca Ilaida in ballet rose on warm ivory stock.
colors:
  ivory-paper: "#fbf0ee"
  ivory-deep: "#f5e2e4"
  blush: "rgba(214, 51, 108, 0.09)"
  plum-ink: "#25121f"
  plum-lead: "#3a2433"
  mauve-muted: "#6b5563"
  ballet-rose: "#d6336c"
  rose-deep: "#9f1444"
  rose-hairline: "rgba(159, 20, 68, 0.22)"
  rose-sheen: "rgba(255, 255, 255, 0.5)"
  rose-shadow: "rgba(159, 20, 68, 0.14)"
typography:
  display:
    fontFamily: "'Bodoni Moda', Georgia, serif"
    fontSize: "clamp(3.4rem, 10vw, 6rem)"
    fontWeight: 600
    lineHeight: 0.88
    letterSpacing: "-0.02em"
  headline:
    fontFamily: "'Bodoni Moda', Georgia, serif"
    fontSize: "clamp(1.6rem, 3vw, 2.2rem)"
    fontWeight: 600
    letterSpacing: "-0.01em"
  title:
    fontFamily: "'Bodoni Moda', Georgia, serif"
    fontSize: "1.35rem"
    fontWeight: 600
  lead:
    fontFamily: "'Bodoni Moda', Georgia, serif"
    fontSize: "clamp(1.2rem, 2.2vw, 1.55rem)"
    fontWeight: 500
    lineHeight: 1.5
  body:
    fontFamily: "'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, sans-serif"
  label:
    fontSize: "0.72rem"
    fontWeight: 700
    letterSpacing: "0.22em"
  caption:
    fontFamily: "'Bodoni Moda', Georgia, serif"
    fontSize: "1.05rem"
    lineHeight: 1.6
  script:
    fontFamily: "'Great Vibes', cursive"
    fontSize: "clamp(1.9rem, 4vw, 2.8rem)"
    lineHeight: 1.2
rounded:
  arch-bill: "200px 200px 36px 36px"
  arch-photo: "200px 200px 26px 26px"
  arch-bill-mobile: "110px 110px 26px 26px"
spacing:
  stage: "clamp(20px, 4vw, 52px)"
  gutter: "clamp(24px, 6vw, 76px)"
  section: "clamp(28px, 5vw, 64px)"
  row: "18px"
components:
  program-bill:
    backgroundColor: "{colors.ivory-paper}"
    textColor: "{colors.plum-ink}"
    rounded: "{rounded.arch-bill}"
  name-mast:
    typography: "{typography.display}"
    textColor: "{colors.plum-ink}"
  name-line-two:
    textColor: "{colors.ballet-rose}"
  cast-row:
    textColor: "{colors.plum-ink}"
    padding: "18px 0"
  cast-label:
    typography: "{typography.label}"
    textColor: "{colors.rose-deep}"
  portrait-frame:
    backgroundColor: "{colors.blush}"
    rounded: "{rounded.arch-photo}"
    size: "min(100%, 360px)"
  satin-bow:
    textColor: "{colors.ballet-rose}"
  close-line:
    typography: "{typography.script}"
    textColor: "{colors.ballet-rose}"
---

# Design System: Jannyca Ilaida — Programme Bill

## Overview

**Creative North Star: "The Programme Bill"**

A theatre program printed for one person. The page is one arched sheet of warm ivory program stock, centered in the viewport, that a visitor reads the way they read a playbill: a name first, a lead line, a cast list, a stage photo. It deliberately refuses the "three card intro grid"; the whole surface is a single bill, so the visitor reads a name, not a dashboard.

The world is satin and stage light. One committed ballet rose carries the second name line, the hairline rules, the edge of the portrait arch, and a drawn satin bow. Everything else stays on the ivory/plum neutral ground. Type is Didone star voice throughout (Bodoni Moda), with Great Vibes reserved for one small close line. Motion is a single authored entry choreography with exponential ease-out, played once, and annihilated entirely under `prefers-reduced-motion`. The build is honest about unfinished assets: the arch photo is a labeled placeholder awaiting a real portrait.

**Key Characteristics:**
- One printed sheet, arched at the crown, never a three-card grid.
- One committed ballet rose (#d6336c) carries the second name line, the hairlines, the drawn bows, and the portrait-frame edge.
- Didone star type (Bodoni Moda) is the only show face; Great Vibes appears exactly once, in the small close line.
- Hairline rules only — 1px rose-derived strokes; no heavy borders.
- One-shot entry choreography on a single exponential ease-out, with a full `prefers-reduced-motion` kill switch.
- Honest alt text and figcaption on the portrait placeholder; a real photograph is still pending.

## Colors

Warm ivory program stock with blush washes and a single committed ballet rose family; every non-neutral value derives from the rose.

### Primary
- **Ballet Rose** (#d6336c): the one committed accent. It is the ink of the second name line ("Ilaida"), the drawn satin bows, the portrait-frame edge, and the script close line. It never floods a surface — it appears as ink or edge, never as a fill.
- **Rose Deep** (#9f1444): the depth of the rose family. Carries the small uppercase cast labels and is the base hue of the hairline, sheen, and shadow tints.

### Neutral
- **Ivory Paper** (#fbf0ee): the bill's ground, blended in a 165° wash down to Ivory Deep.
- **Ivory Deep** (#f5e2e4): the warmer end of the stock's gradient.
- **Blush Wash** (rgba(214, 51, 108, 0.09)): radial washes on the stage behind the bill and at the bill's crown.
- **Plum Ink** (#25121f): primary text ink — the name and the cast values.
- **Plum Lead** (#3a2433): the lead paragraph under the name.
- **Mauve Muted** (#6b5563): the figcaption and tertiary text.
- **Rose Hairline** (rgba(159, 20, 68, 0.22)): every rule — the underline beneath the lead, the programme dividers, the bill's outer border.
- **Rose Sheen** (rgba(255, 255, 255, 0.5)): the satin sweep across the bill face and the inset top-edge highlight.
- **Rose Shadow** (rgba(159, 20, 68, 0.14)): the ambient rose-tinted lift under the bill.

### Named Rules
**The Single-Rose Rule.** One ballet rose family (rose at #d6336c, depth at #9f1444) is the only hue that may leave the ivory/plum neutral ground. Every wash, hairline, sheen, and shadow is derived from it; a second accent hue breaks the printed-bill illusion.

## Typography

**Display Font:** Bodoni Moda (Georgia serif fallback) — the Didone star.
**Body Font:** Segoe UI / system-ui sans — used only as the small uppercase programme-label face.
**Script Font:** Great Vibes — one small close line only.

**Character:** Bodoni's high-contrast Didone hairline strokes are the printed-program voice; the quiet sans labels sit beneath the cast values like the small type at the foot of a playbill. Great Vibes is a one-line cameo, not a voice.

### Hierarchy
- **Display** (600, clamp(3.4rem, 10vw, 6rem), line-height 0.88, -0.02em): the name, two stacked spans with `text-wrap: balance`.
- **Headline** (600, clamp(1.6rem, 3vw, 2.2rem), -0.01em): "Programme notes".
- **Title** (600, 1.35rem): the cast values (`dd`), right-aligned.
- **Lead** (500 italic, clamp(1.2rem, 2.2vw, 1.55rem), line-height 1.5): the line under the name, max 70ch, in Plum Lead.
- **Label** (700, 0.72rem, +0.22em, uppercase): the `dt` programme labels in Rose Deep, set in the sans.
- **Caption** (italic, 1.05rem, line-height 1.6): the figcaption, max 34ch, in Mauve Muted.
- **Script** (clamp(1.9rem, 4vw, 2.8rem), line-height 1.2): the single close line in Great Vibes, in Ballet Rose.

### Named Rules
**The One Cameo Rule.** Great Vibes appears exactly once, as the small close line. Bodoni is the star voice; the script must never grow into a heading or a second line.
**The No-Gradient-Text Rule.** Text is flat ink. Gradients belong to stock and light — washes and sheens — never to letters.
**The No-Em-Dash Rule.** Prose uses commas and full stops; the em-dash is barred from the programme voice.

## Layout

The stage is a `min-height: 100vh` grid that centers one bill at `min(1120px, 100%)`, padded `clamp(20px, 4vw, 52px)`. Inside the bill: the mast (name, lead, hairline), a 12-column body grid with the cast list on columns 1–6 and the portrait arch on columns 7–13 (gap `clamp(28px, 5vw, 64px)`), and a bordered close. Every horizontal gutter is `clamp(24px, 6vw, 76px)`. Cast rows are a 120px label column plus a fluid value column, baseline-aligned with 18px vertical padding and a hairline top rule.

Responsive: at ≤980px the body collapses to one column — cast then portrait full width, label column narrowed to 104px, the second name line's indent removed. At ≤600px the stage padding drops to 12px, the arch softens to 110px, and cast rows become single-column with value text left-aligned.

## Elevation & Depth

A hybrid of one rose-tinted ambient lift and satin light. The bill floats above the stage on rose shadow, and a 115° white sheen sweeps across its face like light across satin; inner faces carry an inset 1px white top highlight. Depth is read as stage light, not layered paper.

### Shadow Vocabulary
- **Bill Lift** (`0 34px 80px rgba(159, 20, 68, 0.14), inset 0 1px 0 rgba(255, 255, 255, 0.5)`): the sheet above the stage.
- **Frame Lift** (`0 24px 60px rgba(159, 20, 68, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.5)`): the portrait arch.
- **Bow Halo** (`drop-shadow(0 8px 16px rgba(159, 20, 68, 0.18))`): the crown bow's soft glow.

### Named Rules
**The Stage-Light Rule.** Depth is light, not hard offset shadow. All shadows are rose-tinted and diffuse; surfaces separate with hairlines and sheen, never crisp 3D edges.

## Shapes

One recurring silhouette: the crown arch. The bill opens with a wide 200px-radius arch on small 36px inner corners; the portrait frame echoes it at 200px/26px; at ≤600px the arch softens to 110px/26px. The drawn satin bow is the signature glyph — two petal loops, a centre knot, two ribbon tails — drawn as `currentColor` inline SVG so it inherits the rose.

### Named Rules
**The Arch Rule.** Every principal surface (the bill, the portrait frame) opens with a wide crown arch; only the arch and the bows may carry such generous radii. Interior corners stay small (26–36px).

## Components

The page has no buttons, inputs, or navigation — it is a single sheet. The recurring surfaces are documented below.

### The Programme Bill
- **Shape:** arch top (200px/36px, 110px/26px at ≤600px).
- **Background:** ivory paper with a radial blush wash at the crown and a 115° satin sheen sweep.
- **Border:** 1px Rose Hairline around the sheet.
- **Shadow:** Bill Lift (see Elevation & Depth).
- **Entry:** `billReveal` 780ms, fill both.

### The Name Mast
- **Type:** Display Bodoni, two stacked spans; the second line is Ballet Rose, indented `clamp(0.4em, 6vw, 1.4em)`.
- **Rule:** a 1px Rose Hairline under the name after `clamp(20px, 3vw, 34px)`.
- **Entry:** each span `nameRise` 820ms (delays 120ms / 220ms); the lead `rise` 820ms at 320ms.

### The Cast Row (`dl`)
- **Shape:** 120px label column + fluid value column, baseline aligned, 18px vertical rhythm, hairline top rule.
- **Colors:** Rose Deep sans label, Plum Ink Bodoni value, right-aligned.
- **Responsive:** 104px column at ≤980px; single column at ≤600px.

### The Portrait Arch
- **Shape:** 4:5 arch, 200px/26px, 1px Ballet Rose edge.
- **Background:** rose wash gradient; the placeholder fills it with a drawn botanical in rose, pending a real photograph.
- **Photo grade (for the future image):** `saturate(0.98) contrast(1.03) brightness(1.02)`, inset white top highlight, soft rose lower wash.
- **Caption:** Bodoni italic in Mauve Muted, max 34ch.

### The Satin Bow
- **Shape:** crown bow 74px, close bow 46px; two loops, a knot, two tails in `currentColor`.
- **Color:** Ballet Rose (0.9 opacity on the close bow).
- **Entry:** `tie` 640ms (crown at 700ms, close at 760ms) with a 1.05 / 3° overshoot at 60%.
- **Markup:** decorative inline SVG, `aria-hidden` + `focusable="false"`.

### Named Rules
**The One-Shot Choreography Rule.** Motion happens once, on entry, and every entrance uses the same exponential ease-out `cubic-bezier(0.22, 1, 0.36, 1)`. After the choreography plays, the page is still — no hover motion, no loops.
**The Kill-Switch Rule.** Every animation must be annihilated under `prefers-reduced-motion`. The page ships a blanket kill switch (`animation: none`, `transition: none`); new motion must inherit it.

## Do's and Don'ts

### Do:
- **Do** keep the whole page one sheet; the three-card intro grid is barred.
- **Do** set every rule as a 1px rose hairline (rgba(159, 20, 68, 0.22)); never a solid rose rule or a heavier border.
- **Do** use the exponential ease-out `cubic-bezier(0.22, 1, 0.36, 1)` for every entrance.
- **Do** gate every animation behind the `prefers-reduced-motion` kill switch.
- **Do** write honest alt text and captions when an asset is still a placeholder.

### Don't:
- **Don't** introduce a second accent hue; ballet rose is the only one (The Single-Rose Rule).
- **Don't** use Great Vibes anywhere but the close line (The One Cameo Rule).
- **Don't** set gradient text or em-dashes (The No-Gradient-Text Rule, The No-Em-Dash Rule).
- **Don't** add hover or looping motion; the choreography plays once on entry and the page is then still.
- **Don't** square off a principal surface; the crown arch is the bill and the portrait frame (The Arch Rule).
