<section id="contact" class="section" aria-labelledby="contact-title">
    <div class="container">
        <x-section-head id="contact-title"
            title="Get in Touch"
            intro="Whether it is a project, an internship, or just a hello, Jannyca would love to hear from you." />

        <div class="contact__grid">
            <div class="contact__card card reveal">
                <h3>Contact Information</h3>
                <ul class="contact__info">
                    <li>
                        <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                        <div>jannyca.ilaida@example.com<span>This address is a placeholder until Jannyca shares her real email.</span></div>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        <div>Philippines<span>Her exact location is a placeholder.</span></div>
                    </li>
                    <li>
                        <i class="fa-solid fa-clock" aria-hidden="true"></i>
                        <div>Open to internships<span>Usually replies within a few days.</span></div>
                    </li>
                </ul>

                <h3 style="margin-top: 22px;">Find Her Here</h3>
                <ul class="hero__socials">
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
                </ul>

                <div class="contact__map reveal" style="margin-top: 24px;" role="img"
                     aria-label="Map placeholder; Jannyca's Google Maps location will be embedded here.">
                    <i class="fa-solid fa-map-location-dot" aria-hidden="true"></i>
                    <p>Map placeholder</p>
                    <p class="contact__map-note">A Google Maps embed of Jannyca's location will live here.</p>
                </div>
            </div>

            <div class="contact__card card reveal" data-delay="1">
                <h3>Send a Message</h3>

                <form id="contact-form" method="POST" action="{{ url('/contact') }}" novalidate>
                    @csrf

                    <div class="field" data-field="name">
                        <label for="contact-name">Name</label>
                        <input id="contact-name" name="name" type="text" maxlength="120"
                               autocomplete="name" placeholder="Your name" required>
                        <p class="field__error" id="contact-name-error"></p>
                    </div>

                    <div class="field" data-field="email">
                        <label for="contact-email">Email</label>
                        <input id="contact-email" name="email" type="email" maxlength="160"
                               autocomplete="email" placeholder="you@example.com" required>
                        <p class="field__error" id="contact-email-error"></p>
                    </div>

                    <div class="field" data-field="subject">
                        <label for="contact-subject">Subject</label>
                        <input id="contact-subject" name="subject" type="text" maxlength="160"
                               placeholder="What is this about?" required>
                        <p class="field__error" id="contact-subject-error"></p>
                    </div>

                    <div class="field" data-field="message">
                        <label for="contact-message">Message</label>
                        <textarea id="contact-message" name="message" maxlength="2000"
                                  placeholder="Tell Jannyca a little about your project or idea." required></textarea>
                        <p class="field__error" id="contact-message-error"></p>
                    </div>

                    <button class="btn btn--primary btn--block" type="submit">
                        <i class="fa-solid fa-paper-plane" aria-hidden="true"></i> Send Message
                    </button>
                </form>

                <p class="note">Messages are saved in the contact_messages table. Jannyca's real receiving address can be wired up later.</p>
            </div>
        </div>
    </div>
</section>
