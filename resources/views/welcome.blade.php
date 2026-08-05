<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jannyca Ilaida | Introduction</title>
        <meta name="description" content="Hello, I am Jannyca Ilaida, a BSIT student from Trimex.">
        <meta name="color-scheme" content="light">

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Great+Vibes&display=swap">

        <style>
            :root {
                color-scheme: light;
                --paper: #fbf0ee;
                --paper-deep: #f5e2e4;
                --blush: rgba(214, 51, 108, 0.09);
                --ink: #25121f;
                --lead: #3a2433;
                --muted: #6b5563;
                --rose: #d6336c;
                --rose-deep: #9f1444;
                --line: rgba(159, 20, 68, 0.22);
                --sheen: rgba(255, 255, 255, 0.5);
                --shadow: rgba(159, 20, 68, 0.14);
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
            }

            html {
                min-height: 100%;
            }

            body {
                min-height: 100%;
                margin: 0;
                font-family: 'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
                color: var(--ink);
                background:
                    radial-gradient(circle at 14% 12%, var(--blush), transparent 26%),
                    radial-gradient(circle at 88% 20%, var(--blush), transparent 24%),
                    radial-gradient(circle at 50% 108%, rgba(214, 51, 108, 0.06), transparent 32%),
                    linear-gradient(165deg, var(--paper) 0%, var(--paper-deep) 100%);
                overflow-x: hidden;
            }

            .stage {
                position: relative;
                min-height: 100vh;
                display: grid;
                place-items: center;
                padding: clamp(20px, 4vw, 52px);
            }

            .bill {
                position: relative;
                width: min(1120px, 100%);
                overflow: hidden;
                border-radius: 200px 200px 36px 36px;
                border: 1px solid var(--line);
                background:
                    linear-gradient(115deg, transparent 40%, var(--sheen) 50%, transparent 60%),
                    radial-gradient(circle at 50% 0%, rgba(214, 51, 108, 0.06), transparent 46%),
                    var(--paper);
                box-shadow: 0 34px 80px var(--shadow), inset 0 1px 0 rgba(255, 255, 255, 0.5);
                animation: billReveal 780ms cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .bow {
                display: block;
                width: 74px;
                height: auto;
                color: var(--rose);
            }

            .bow--crown {
                position: absolute;
                top: -14px;
                left: 50%;
                transform: translateX(-50%);
                filter: drop-shadow(0 8px 16px rgba(159, 20, 68, 0.18));
                animation: tie 640ms cubic-bezier(0.22, 1, 0.36, 1) 700ms both;
            }

            .mast {
                padding: clamp(44px, 7vw, 88px) clamp(24px, 6vw, 76px) 0;
            }

            .mast h1 {
                margin: 0;
                display: grid;
                gap: 0.02em;
                font-family: 'Bodoni Moda', Georgia, serif;
                font-size: clamp(3.4rem, 10vw, 6rem);
                font-weight: 600;
                line-height: 0.88;
                letter-spacing: -0.02em;
                text-wrap: balance;
            }

            .mast h1 span {
                display: block;
                animation: nameRise 820ms cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .mast h1 span:first-child {
                animation-delay: 120ms;
            }

            .mast h1 span:last-child {
                color: var(--rose);
                padding-left: clamp(0.4em, 6vw, 1.4em);
                animation-delay: 220ms;
            }

            .mast h1::after {
                content: '';
                display: block;
                margin-top: clamp(20px, 3vw, 34px);
                height: 1px;
                background: var(--line);
            }

            .mast__lead {
                margin: clamp(28px, 4vw, 44px) 0 0;
                max-width: 70ch;
                font-family: 'Bodoni Moda', Georgia, serif;
                font-style: italic;
                font-weight: 500;
                font-size: clamp(1.2rem, 2.2vw, 1.55rem);
                line-height: 1.5;
                color: var(--lead);
                animation: rise 820ms cubic-bezier(0.22, 1, 0.36, 1) 320ms both;
            }

            .bill__body {
                display: grid;
                grid-template-columns: repeat(12, 1fr);
                gap: clamp(28px, 5vw, 64px);
                align-items: center;
                padding: clamp(28px, 5vw, 64px) clamp(24px, 6vw, 76px);
            }

            .bill__cast {
                grid-column: 1 / 6;
                margin: 0;
                display: grid;
                animation: rise 820ms cubic-bezier(0.22, 1, 0.36, 1) 420ms both;
            }

            .bill__cast h2 {
                margin: 0 0 6px;
                font-family: 'Bodoni Moda', Georgia, serif;
                font-size: clamp(1.6rem, 3vw, 2.2rem);
                font-weight: 600;
                letter-spacing: -0.01em;
            }

            .bill__cast dl {
                display: grid;
            }

            .bill__cast dl > div {
                display: grid;
                grid-template-columns: 120px minmax(0, 1fr);
                gap: 18px;
                align-items: baseline;
                padding: 18px 0;
                border-top: 1px solid var(--line);
            }

            .bill__cast dt {
                color: var(--rose-deep);
                font-size: 0.72rem;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.22em;
            }

            .bill__cast dd {
                margin: 0;
                font-family: 'Bodoni Moda', Georgia, serif;
                font-size: 1.35rem;
                font-weight: 600;
                color: var(--ink);
                text-align: right;
            }

            .bill__photo {
                grid-column: 7 / 13;
                margin: 0;
                display: grid;
                justify-items: center;
                gap: 18px;
                animation: photoReveal 900ms cubic-bezier(0.22, 1, 0.36, 1) 360ms both;
            }

            .bill__photo .frame {
                position: relative;
                width: min(100%, 360px);
                aspect-ratio: 4 / 5;
                overflow: hidden;
                border-radius: 200px 200px 26px 26px;
                border: 1px solid var(--rose);
                box-shadow: 0 24px 60px rgba(159, 20, 68, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.5);
                background:
                    radial-gradient(circle at 30% 24%, rgba(255, 255, 255, 0.5), transparent 30%),
                    linear-gradient(150deg, #fbe3ea, #f3c3d4);
            }

            .bill__photo .frame img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center;
                filter: saturate(0.98) contrast(1.03) brightness(1.02);
            }

            .bill__photo .frame::after {
                content: '';
                position: absolute;
                inset: 0;
                background: linear-gradient(180deg, rgba(255, 255, 255, 0.12) 0%, rgba(255, 255, 255, 0) 40%, rgba(159, 20, 68, 0.1) 100%);
                pointer-events: none;
            }

            .bill__photo figcaption {
                max-width: 34ch;
                font-family: 'Bodoni Moda', Georgia, serif;
                font-style: italic;
                font-size: 1.05rem;
                line-height: 1.6;
                color: var(--muted);
                text-align: center;
            }

            .bill__close {
                padding: clamp(24px, 4vw, 40px) clamp(24px, 6vw, 76px) clamp(40px, 6vw, 72px);
                border-top: 1px solid var(--line);
                display: grid;
                justify-items: center;
                gap: 10px;
                text-align: center;
                animation: rise 820ms cubic-bezier(0.22, 1, 0.36, 1) 620ms both;
            }

            .bill__close p {
                margin: 0;
                font-family: 'Great Vibes', cursive;
                font-size: clamp(1.9rem, 4vw, 2.8rem);
                line-height: 1.2;
                color: var(--rose);
            }

            .bow--small {
                width: 46px;
                color: var(--rose);
                opacity: 0.9;
                animation: tie 640ms cubic-bezier(0.22, 1, 0.36, 1) 760ms both;
            }

            @keyframes billReveal {
                0% {
                    opacity: 0;
                    transform: translateY(26px) scale(0.985);
                    filter: blur(10px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                    filter: blur(0);
                }
            }

            @keyframes nameRise {
                0% {
                    opacity: 0;
                    transform: translateY(34px);
                    letter-spacing: 0.1em;
                    filter: blur(8px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                    letter-spacing: -0.02em;
                    filter: blur(0);
                }
            }

            @keyframes rise {
                0% {
                    opacity: 0;
                    transform: translateY(22px);
                    filter: blur(8px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                    filter: blur(0);
                }
            }

            @keyframes photoReveal {
                0% {
                    opacity: 0;
                    transform: translateY(20px) scale(0.96);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            @keyframes tie {
                0% {
                    opacity: 0;
                    transform: translateX(-50%) scale(0.72) rotate(-14deg);
                }
                60% {
                    transform: translateX(-50%) scale(1.05) rotate(3deg);
                }
                100% {
                    opacity: 1;
                    transform: translateX(-50%) scale(1) rotate(0deg);
                }
            }

            @media (max-width: 980px) {
                .bill__body {
                    grid-template-columns: 1fr;
                    gap: 36px;
                }

                .bill__cast,
                .bill__photo {
                    grid-column: 1 / -1;
                }

                .bill__cast dl > div {
                    grid-template-columns: 104px minmax(0, 1fr);
                }

                .mast h1 span:last-child {
                    padding-left: 0;
                }
            }

            @media (max-width: 600px) {
                .stage {
                    padding: 12px;
                }

                .bill {
                    border-radius: 110px 110px 26px 26px;
                }

                .bill__cast dl > div {
                    grid-template-columns: 1fr;
                    gap: 4px;
                }

                .bill__cast dd {
                    text-align: left;
                }
            }

            @media (prefers-reduced-motion: reduce) {
                *,
                *::before,
                *::after {
                    animation: none !important;
                    transition: none !important;
                    scroll-behavior: auto !important;
                }
            }
        </style>
    </head>
    <body>
        <!--
            THESIS: This page is a theatre program for one person; the layout refuses the "three card intro" grid by presenting the whole page as a single printed bill, so the visitor reads a name, not a dashboard.
            OWN-WORLD: Satin and stage light: warm ivory program stock, blush washes, one committed ballet rose carrying the second name line, the rules, and a drawn satin bow; hairline rules, Didone star type.
            STORY: A visitor learns who Jannyca is, that she studies BSIT at Trimex, and that the page is soft and feminine, in the voice of a program she printed for herself.
            FIRST VIEWPORT: One arched bill sheet fills the viewport: a satin bow at the crown, Jannyca / Ilaida set huge in Bodoni, the rose second line, the lead under a hairline, the cast list on the left, an arched stage photo on the right.
            FORM: A single "program bill" sheet, directly shaped under a pinned brief, no concept roll.
            FINISH: unreviewed and undocumented is unfinished; this build ends with the finish review, the verdict, and DESIGN.md
        -->
        <main class="stage">
            <article class="bill">
                <svg class="bow bow--crown" viewBox="0 0 64 42" aria-hidden="true" focusable="false">
                    <path d="M32 20 C26 9 12 6 8 14 C5 20 13 26 32 20 Z" fill="currentColor"/>
                    <path d="M32 20 C38 9 52 6 56 14 C59 20 51 26 32 20 Z" fill="currentColor"/>
                    <rect x="29" y="14" width="6" height="13" rx="3" fill="currentColor"/>
                    <path d="M31 26 L18 40" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" fill="none"/>
                    <path d="M33 26 L46 40" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" fill="none"/>
                </svg>

                <header class="mast">
                    <h1>
                        <span>Jannyca</span>
                        <span>Ilaida</span>
                    </h1>
                    <p class="mast__lead">A BSIT student from Trimex.</p>
                </header>

                <div class="bill__body">
                    <div class="bill__cast">
                        <h2>Programme notes</h2>
                        <dl>
                            <div>
                                <dt>Name</dt>
                                <dd>Jannyca Ilaida</dd>
                            </div>
                            <div>
                                <dt>Program</dt>
                                <dd>BSIT</dd>
                            </div>
                            <div>
                                <dt>School</dt>
                                <dd>Trimex</dd>
                            </div>
                        </dl>
                    </div>

                    <figure class="bill__photo">
                        <div class="frame">
                            <img src="{{ asset('images/jannyca-portrait-placeholder.svg') }}" alt="Placeholder for Jannyca's portrait; her photograph will be set here." loading="lazy" decoding="async">
                        </div>
                        <figcaption>This arch is waiting for Jannyca's portrait.</figcaption>
                    </figure>
                </div>

                <footer class="bill__close">
                    <svg class="bow bow--small" viewBox="0 0 64 42" aria-hidden="true" focusable="false">
                        <path d="M32 20 C26 9 12 6 8 14 C5 20 13 26 32 20 Z" fill="currentColor"/>
                        <path d="M32 20 C38 9 52 6 56 14 C59 20 51 26 32 20 Z" fill="currentColor"/>
                        <rect x="29" y="14" width="6" height="13" rx="3" fill="currentColor"/>
                        <path d="M31 26 L18 40" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" fill="none"/>
                        <path d="M33 26 L46 40" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" fill="none"/>
                    </svg>
                    <p>Soft, feminine, and calm.</p>
                </footer>
            </article>
        </main>
    </body>
</html>
