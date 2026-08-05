<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jannyca Ilaida | Introduction</title>
        <meta name="description" content="Hello, I'm Jannyca Ilaida, a BSIT student from Trimex.">
        <meta name="color-scheme" content="light">

        @fonts
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&display=swap" rel="stylesheet">

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <style>
            :root {
                color-scheme: light;
                --bg-0: #fff6fa;
                --bg-1: #ffe7f1;
                --bg-2: #f7d9e8;
                --surface: rgba(255, 252, 253, 0.78);
                --surface-strong: rgba(255, 244, 249, 0.96);
                --border: rgba(236, 72, 153, 0.14);
                --text: #431742;
                --lead: rgba(111, 48, 102, 0.86);
                --muted: rgba(118, 67, 110, 0.76);
                --label: rgba(177, 52, 118, 0.92);
                --accent-a: #f9a8d4;
                --accent-b: #c084fc;
                --accent-c: #fb7185;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
            }

            html {
                min-height: 100%;
                scroll-behavior: smooth;
            }

            body {
                min-height: 100%;
                margin: 0;
                font-family: 'DM Sans', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
                color: var(--text);
                background:
                    radial-gradient(circle at 18% 16%, rgba(244, 114, 182, 0.22), transparent 24%),
                    radial-gradient(circle at 82% 14%, rgba(192, 132, 252, 0.16), transparent 22%),
                    radial-gradient(circle at 50% 102%, rgba(251, 191, 36, 0.12), transparent 30%),
                    linear-gradient(160deg, var(--bg-0) 0%, var(--bg-1) 46%, var(--bg-2) 100%);
                overflow-x: hidden;
            }

            body::before {
                content: '';
                position: fixed;
                inset: 0;
                background:
                    radial-gradient(circle at 12% 18%, rgba(255, 255, 255, 0.7), transparent 11%),
                    radial-gradient(circle at 88% 20%, rgba(255, 255, 255, 0.46), transparent 10%),
                    radial-gradient(circle at 52% 48%, rgba(255, 255, 255, 0.2), transparent 42%);
                pointer-events: none;
                opacity: 0.8;
            }

            body::after {
                content: '';
                position: fixed;
                inset: auto auto 6% -8%;
                width: 32rem;
                height: 32rem;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(244, 114, 182, 0.14), transparent 68%);
                filter: blur(18px);
                pointer-events: none;
                animation: drift 18s ease-in-out infinite;
            }

            @keyframes drift {
                0%,
                100% {
                    transform: translate3d(0, 0, 0) scale(1);
                }
                50% {
                    transform: translate3d(3%, -3%, 0) scale(1.05);
                }
            }

            @keyframes boardGlow {
                0%,
                100% {
                    opacity: 0.56;
                    transform: scale(1);
                }
                50% {
                    opacity: 0.82;
                    transform: scale(1.02);
                }
            }

            @keyframes revealSoft {
                0% {
                    opacity: 0;
                    filter: blur(12px);
                }
                100% {
                    opacity: 1;
                    filter: blur(0);
                }
            }

            @keyframes lineRise {
                0% {
                    opacity: 0;
                    transform: translateY(16px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes chipRise {
                0% {
                    opacity: 0;
                    transform: translateY(10px) scale(0.98);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            @keyframes frameFloat {
                0%,
                100% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-10px);
                }
            }

            @keyframes shimmer {
                0%,
                100% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
            }

            .page {
                position: relative;
                min-height: 100vh;
                display: grid;
                place-items: center;
                padding: clamp(18px, 4vw, 48px);
                isolation: isolate;
            }

            .board {
                position: relative;
                width: min(1180px, 100%);
                display: grid;
                grid-template-columns: repeat(12, minmax(0, 1fr));
                gap: 18px;
                align-items: stretch;
            }

            .board::before {
                content: '';
                position: absolute;
                inset: 38px 22px -18px;
                border-radius: 40px;
                background: rgba(255, 255, 255, 0.42);
                filter: blur(26px);
                z-index: -1;
                animation: boardGlow 14s ease-in-out infinite;
            }

            .card {
                position: relative;
                overflow: hidden;
                border-radius: 30px;
                border: 1px solid var(--border);
                background: var(--surface);
                box-shadow:
                    0 22px 55px rgba(162, 28, 88, 0.1),
                    inset 0 1px 0 rgba(255, 255, 255, 0.84);
                --tilt: 0deg;
                --rest-lift: 0px;
                --hover-lift: -8px;
                transform: translateY(var(--rest-lift)) rotate(var(--tilt));
                transform-origin: center;
                transition:
                    transform 380ms cubic-bezier(0.22, 1, 0.36, 1),
                    box-shadow 380ms ease,
                    border-color 380ms ease,
                    background-color 380ms ease,
                    filter 380ms ease;
                will-change: transform, box-shadow, filter;
                animation: revealSoft 900ms cubic-bezier(0.16, 1, 0.3, 1) both;
            }

            .card:hover,
            .card:focus-within {
                transform: translateY(calc(var(--rest-lift) + var(--hover-lift))) rotate(var(--tilt));
                border-color: rgba(244, 114, 182, 0.3);
                box-shadow:
                    0 28px 66px rgba(162, 28, 88, 0.16),
                    inset 0 1px 0 rgba(255, 255, 255, 0.92);
                filter: saturate(1.03);
            }

            .card::before {
                content: '';
                position: absolute;
                top: 18px;
                left: 20px;
                width: 58px;
                height: 10px;
                border-radius: 999px;
                background: linear-gradient(90deg, rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.92));
                background-size: 180% 100%;
                opacity: 0.78;
                animation: shimmer 8s ease-in-out infinite;
            }

            .cover {
                grid-column: 1 / span 7;
                grid-row: 1 / span 2;
                padding: clamp(32px, 4vw, 46px);
                display: flex;
                flex-direction: column;
                justify-content: center;
                background: linear-gradient(180deg, rgba(255, 252, 253, 0.96), rgba(255, 242, 248, 0.94));
                --tilt: -1.2deg;
                --rest-lift: 0px;
                animation-delay: 80ms;
            }

            .cover::after {
                content: '';
                position: absolute;
                right: -18%;
                bottom: -16%;
                width: 18rem;
                height: 18rem;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(244, 114, 182, 0.13), transparent 64%);
                pointer-events: none;
            }

            .cover h1 {
                margin: 0;
                display: grid;
                gap: 0.06em;
                max-width: 8ch;
                font-family: 'Fraunces', Georgia, serif;
                font-size: clamp(3.1rem, 7.8vw, 6.2rem);
                line-height: 0.9;
                letter-spacing: -0.07em;
                text-wrap: balance;
            }

            .cover h1 span {
                display: block;
                animation: lineRise 900ms cubic-bezier(0.16, 1, 0.3, 1) both;
            }

            .cover h1 span:first-child {
                animation-delay: 140ms;
            }

            .cover h1 span:last-child {
                padding-left: clamp(0rem, 2vw, 0.9rem);
                color: #a61b61;
                animation-delay: 240ms;
            }

            .lead {
                margin: 18px 0 0;
                max-width: 24ch;
                font-size: clamp(1.15rem, 2.2vw, 1.55rem);
                line-height: 1.42;
                color: var(--lead);
                font-weight: 600;
                animation: lineRise 900ms cubic-bezier(0.16, 1, 0.3, 1) both;
                animation-delay: 320ms;
            }

            .copy {
                margin: 20px 0 0;
                max-width: 42ch;
                font-size: 1rem;
                line-height: 1.85;
                color: var(--muted);
                animation: lineRise 900ms cubic-bezier(0.16, 1, 0.3, 1) both;
                animation-delay: 420ms;
            }

            .swatches {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin-top: 28px;
                animation: lineRise 900ms cubic-bezier(0.16, 1, 0.3, 1) both;
                animation-delay: 520ms;
            }

            .swatch {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 40px;
                padding: 0 15px;
                border-radius: 999px;
                border: 1px solid rgba(244, 114, 182, 0.16);
                background: rgba(255, 255, 255, 0.68);
                color: rgba(138, 21, 79, 0.88);
                font-size: 0.88rem;
                font-weight: 700;
                letter-spacing: 0.02em;
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.84);
                transition:
                    transform 280ms cubic-bezier(0.22, 1, 0.36, 1),
                    box-shadow 280ms ease,
                    border-color 280ms ease,
                    background-color 280ms ease;
                animation: chipRise 760ms cubic-bezier(0.16, 1, 0.3, 1) both;
            }

            .swatch:nth-child(1) {
                animation-delay: 580ms;
            }

            .swatch:nth-child(2) {
                animation-delay: 660ms;
            }

            .swatch:nth-child(3) {
                animation-delay: 740ms;
            }

            .swatch:hover {
                transform: translateY(-4px) scale(1.02);
                border-color: rgba(244, 114, 182, 0.28);
                box-shadow:
                    0 14px 28px rgba(244, 114, 182, 0.12),
                    inset 0 1px 0 rgba(255, 255, 255, 0.94);
            }

            .portrait {
                grid-column: 8 / span 5;
                grid-row: 1 / span 2;
                padding: clamp(28px, 4vw, 40px);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                gap: 18px;
                background: linear-gradient(180deg, rgba(255, 247, 251, 0.97), rgba(255, 236, 245, 0.98));
                --tilt: 1.4deg;
                --rest-lift: 10px;
                animation-delay: 180ms;
            }

            .portrait::before {
                width: 70px;
            }

            .portrait__frame {
                width: min(270px, 100%);
                aspect-ratio: 1;
                display: grid;
                place-items: center;
                border-radius: 34% 66% 56% 44% / 40% 38% 62% 60%;
                background:
                    radial-gradient(circle at 30% 28%, rgba(255, 255, 255, 0.92), transparent 30%),
                    linear-gradient(135deg, #fff1f7 0%, #fbcfe8 35%, #f9a8d4 67%, #fda4af 100%);
                border: 1px solid rgba(244, 114, 182, 0.22);
                box-shadow:
                    0 24px 60px rgba(244, 114, 182, 0.22),
                    inset 0 1px 0 rgba(255, 255, 255, 0.85);
                animation:
                    revealSoft 900ms cubic-bezier(0.16, 1, 0.3, 1) both 260ms,
                    frameFloat 8.5s ease-in-out infinite 1.1s;
                transition:
                    transform 320ms cubic-bezier(0.22, 1, 0.36, 1),
                    box-shadow 320ms ease,
                    filter 320ms ease;
            }

            .portrait:hover .portrait__frame,
            .portrait:focus-within .portrait__frame {
                box-shadow:
                    0 28px 72px rgba(244, 114, 182, 0.28),
                    inset 0 1px 0 rgba(255, 255, 255, 0.94);
                filter: saturate(1.04);
            }

            .portrait__initial {
                font-family: 'Fraunces', Georgia, serif;
                font-size: clamp(4.2rem, 8vw, 6.6rem);
                font-weight: 700;
                letter-spacing: -0.08em;
                color: #8f1656;
            }

            .portrait__caption {
                margin: 0;
                max-width: 24ch;
                color: var(--muted);
                font-size: 0.98rem;
                line-height: 1.7;
                animation: lineRise 900ms cubic-bezier(0.16, 1, 0.3, 1) both;
                animation-delay: 420ms;
            }

            .info {
                min-height: 132px;
                padding: 22px 22px 20px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                gap: 12px;
                background: rgba(255, 255, 255, 0.72);
            }

            .info__label {
                color: var(--label);
                font-size: 0.8rem;
                font-weight: 700;
                letter-spacing: 0.18em;
                text-transform: uppercase;
            }

            .info strong {
                display: block;
                font-size: 1.08rem;
                line-height: 1.45;
                font-weight: 600;
                color: var(--text);
            }

            .info--name {
                grid-column: 1 / span 3;
                --tilt: -0.8deg;
                --rest-lift: 0px;
                background: linear-gradient(180deg, rgba(255, 249, 252, 0.9), rgba(255, 237, 244, 0.96));
                animation-delay: 280ms;
            }

            .info--program {
                grid-column: 4 / span 3;
                --tilt: 1deg;
                --rest-lift: 10px;
                background: linear-gradient(180deg, rgba(255, 250, 244, 0.94), rgba(255, 241, 226, 0.98));
                animation-delay: 360ms;
            }

            .info--school {
                grid-column: 7 / span 3;
                --tilt: -1deg;
                --rest-lift: 0px;
                background: linear-gradient(180deg, rgba(249, 248, 255, 0.94), rgba(238, 233, 255, 0.98));
                animation-delay: 440ms;
            }

            .info--mood {
                grid-column: 10 / span 3;
                --tilt: 1.2deg;
                --rest-lift: 8px;
                background: linear-gradient(180deg, rgba(255, 247, 251, 0.94), rgba(252, 241, 247, 0.98));
                animation-delay: 520ms;
            }

            .closing {
                grid-column: 1 / -1;
                padding: 18px 24px;
                text-align: center;
                background: rgba(255, 255, 255, 0.58);
                --tilt: -0.4deg;
                --rest-lift: 0px;
                animation-delay: 620ms;
            }

            .closing p {
                margin: 0;
                color: var(--muted);
                line-height: 1.75;
            }

            @media (max-width: 920px) {
                .board {
                    gap: 14px;
                }

                .cover,
                .portrait,
                .info,
                .closing {
                    grid-column: 1 / -1;
                    grid-row: auto;
                    --tilt: 0deg;
                    --rest-lift: 0px;
                }

                .cover {
                    min-height: auto;
                }

                .portrait {
                    align-items: center;
                }
            }

            @media (max-width: 640px) {
                .page {
                    padding: 14px;
                }

                .cover h1 {
                    max-width: 100%;
                }

                .lead {
                    max-width: 100%;
                }

                .copy {
                    max-width: 100%;
                }

                .swatches {
                    gap: 8px;
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
        <main class="page">
            <section class="board" aria-label="Introduction">
                <article class="card cover">
                    <h1>
                        <span>Jannyca</span>
                        <span>Ilaida</span>
                    </h1>
                    <p class="lead">Hello, I’m Jannyca — a BSIT student from Trimex.</p>
                    <p class="copy">
                        A pastel scrapbook layout made to feel warm, airy, and distinctly feminine, with a softer mood than a standard profile page.
                    </p>

                    <div class="swatches" aria-label="Style notes">
                        <span class="swatch">Soft pink</span>
                        <span class="swatch">Sweet</span>
                        <span class="swatch">Calm</span>
                    </div>
                </article>

                <aside class="card portrait" aria-label="Portrait card">
                    <div class="portrait__frame">
                        <div class="portrait__initial" aria-hidden="true">J</div>
                    </div>
                    <p class="portrait__caption">A gentle first impression for Jannyca Ilaida.</p>
                </aside>

                <article class="card info info--name">
                    <span class="info__label">Name</span>
                    <strong>Jannyca Ilaida</strong>
                </article>

                <article class="card info info--program">
                    <span class="info__label">Program</span>
                    <strong>BSIT</strong>
                </article>

                <article class="card info info--school">
                    <span class="info__label">School</span>
                    <strong>Trimex</strong>
                </article>

                <article class="card info info--mood">
                    <span class="info__label">Mood</span>
                    <strong>Soft &amp; feminine</strong>
                </article>

                <footer class="card closing">
                    <p>
                        Designed like a pastel moodboard — airy, pretty, and made to feel different from the earlier introduction.
                    </p>
                </footer>
            </section>
        </main>
    </body>
</html>
