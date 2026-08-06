# Jannyca-app

A Laravel application whose current deliverable is a single landing page presenting the portfolio of **Jannyca Ilaida**, a BSIT student from Trimex specializing in mobile and web development. The page is served at the root route as the `welcome` view.

## People

- **Jannyca Ilaida** — the person the page presents. A girl/woman; a BSIT student at Trimex specializing in mobile and web development. The pinned brief replaces the earlier "girlie" lavender direction with a dark, professional, modern glassmorphism design.

## The pinned brief (do not dilute)

- One-page personal portfolio, dark mode by default. The user asked to change all design: modern glassmorphism, smooth scrolling, responsive, fast loading, clean UI with subtle animations.
- Palette: Primary `#3B82F6`, Secondary `#8B5CF6`, Accent `#06B6D4`, Background `#0F172A`, Cards `#1E293B`.
- Rounded corners, soft shadows, gradient buttons, hover animations, animated section transitions. Type: Jost (display) + Nunito (body).
- Page structure: Hero (photo, name, BSIT Student, Mobile & Web Development specialization, animated typing of Web Developer / Mobile Developer / UI/UX Enthusiast / Future Software Engineer, intro, Download Resume + Contact Me buttons, social icons), About Me, Skills (animated progress bars), Projects (7 cards), Experience (timeline), Certificates (grid), Education (timeline), Services (6 cards), Contact (form + map placeholder), Footer.
- Extra features: scroll progress bar, scroll-to-top, animated counters, typing animation, smooth scrolling, loading screen, toast notifications, contact form validation, SEO meta, accessible, lazy-loaded images, mobile-first.
- Content approach: **placeholders, clearly labeled** — every project, skill, certificate, and service entry is an honest placeholder awaiting Jannyca's real work. No fabricated claims.
- Primary action: **get in touch** / contact. The email address is a labeled placeholder.
- Coding standards: clean architecture, SOLID, reusable Blade components, proper validation, CSRF protection, responsive design, well-commented code. Built on Laravel with static CSS/JS (no build step).

## Open items

- **Real content pending.** Every project, skill, certificate, and service entry is a labeled placeholder. Jannyca should replace them with her real work; the `mailto:` address is also a placeholder.
- **Resume PDF pending.** The Download Resume button shows a placeholder toast until `public/resume/Jannyca-Ilaida-Resume.pdf` exists; the view switches to a real download link automatically once the file is added.
- **Map placeholder.** The contact section's map is an honest placeholder frame awaiting a real embedded map.
