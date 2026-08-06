<section id="top" class="hero" aria-labelledby="hero-title">
    <div class="container">
        <div class="hero__grid">
            <div class="hero__content">
                <h1 class="hero__name" id="hero-title">Hi, I'm <span class="hero__name-strong">Jannyca Ilaida</span></h1>

                <p class="hero__role">
                    BSIT Student <span class="hero__sep" aria-hidden="true">·</span>
                    Specialization: <span class="hero__specialization">Mobile &amp; Web Development</span>
                </p>

                <p class="hero__type" aria-hidden="true">
                    <span class="hero__type-static">I'm a&nbsp;</span>
                    <span class="hero__type-word" id="typed">Web Developer</span>
                    <span class="hero__type-cursor">|</span>
                </p>

                <span class="visually-hidden">Roles Jannyca is exploring: Web Developer, Mobile Developer, UI/UX Enthusiast, Future Software Engineer.</span>

                <p class="hero__lead">
                    Open to internship opportunities, Jannyca is a BSIT student at Trimex learning to build
                    apps and sites that feel light and easy to use. This portfolio is a live placeholder:
                    every project, skill, and certificate here awaits her real work, and the page will grow
                    as she does.
                </p>

                <div class="hero__actions">
                    @if (file_exists(public_path('resume/Jannyca-Ilaida-Resume.pdf')))
                        <a class="btn btn--primary" href="{{ asset('resume/Jannyca-Ilaida-Resume.pdf') }}" download>Download Resume</a>
                    @else
                        <button class="btn btn--primary" type="button" data-resume-placeholder>Download Resume</button>
                    @endif
                    <a class="btn btn--ghost" href="#contact">Contact Me</a>
                </div>

                <ul class="hero__socials" aria-label="Social links">
                    <li>
                        <a href="#" data-placeholder-link data-message="GitHub profile coming soon" aria-label="GitHub profile placeholder">
                            <i class="fa-brands fa-github" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-placeholder-link data-message="LinkedIn profile coming soon" aria-label="LinkedIn profile placeholder">
                            <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-placeholder-link data-message="Facebook profile coming soon" aria-label="Facebook profile placeholder">
                            <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:jannyca.ilaida@example.com" aria-label="Email Jannyca">
                            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <figure class="hero__portrait">
                <div class="hero__portrait-frame">
                    <img src="{{ asset('images/jannyca2.jpg') }}"
                         alt="Portrait of Jannyca Ilaida, BSIT student at Trimex."
                         width="340" height="425" loading="eager" decoding="async">
                </div>
            </figure>
        </div>
    </div>

    <a class="hero__scroll" href="#about" aria-label="Scroll to the About section">
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </a>
</section>
