<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="color-scheme" content="dark">

        <title>Jannyca Ilaida | BSIT Student · Mobile &amp; Web Development Portfolio</title>
        <meta name="description" content="Jannyca Ilaida, a BSIT student specializing in mobile and web development. Explore her skills, projects, experience, certificates, and services.">
        <meta name="keywords" content="Jannyca Ilaida, BSIT student, mobile development, web development, portfolio, Laravel, PHP">
        <meta name="author" content="Jannyca Ilaida">
        <meta name="theme-color" content="#0f172a">
        <link rel="canonical" href="{{ url('/') }}">

        <meta property="og:type" content="website">
        <meta property="og:title" content="Jannyca Ilaida | BSIT Student Portfolio">
        <meta property="og:description" content="A BSIT student specializing in mobile and web development. Skills, projects, experience, and services.">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:image" content="{{ asset('images/jannyca.jpg') }}">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Jannyca Ilaida | BSIT Student Portfolio">
        <meta name="twitter:description" content="A BSIT student specializing in mobile and web development.">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>document.documentElement.classList.remove('no-js');</script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&family=Nunito:wght@400;500;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

        <noscript>
            <style>
                .loader { display: none; }
            </style>
        </noscript>
    </head>
    <body>
        <a class="skip-link" href="#main">Skip to content</a>

        <div id="loader" class="loader" aria-hidden="true">
            <span class="loader__mark">JI</span>
            <span class="loader__spinner" role="presentation"></span>
        </div>

        <div class="progress" aria-hidden="true"><span></span></div>

        <header class="nav">
            <div class="nav__inner container">
                <a class="nav__brand" href="#top">Jannyca<span>.</span></a>
                <nav class="nav__links" id="nav-links" aria-label="Primary">
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#projects">Projects</a>
                    <a href="#experience">Experience</a>
                    <a href="#certificates">Certificates</a>
                    <a href="#education">Education</a>
                    <a href="#services">Services</a>
                    <a href="#contact">Contact</a>
                    <a class="nav__cta" href="#contact">Hire Me</a>
                </nav>
                <button class="nav__toggle" id="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-links" aria-label="Open menu">
                    <i class="fa-solid fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </header>

        <main id="main">
            @include('portfolio.hero')
            @include('portfolio.about')
            @include('portfolio.skills')
            @include('portfolio.projects')
            @include('portfolio.experience')
            @include('portfolio.certificates')
            @include('portfolio.education')
            @include('portfolio.services')
            @include('portfolio.contact')
        </main>

        @include('portfolio.footer')

        <button id="to-top" class="to-top" type="button" aria-label="Back to top">
            <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
        </button>
        <div id="toasts" class="toasts" aria-live="polite"></div>

        <script src="{{ asset('js/portfolio.js') }}" defer></script>
    </body>
</html>
