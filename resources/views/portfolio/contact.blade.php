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
                        <div><a href="mailto:jannycailaida@student.trimexcolleges.edu.ph">jannycailaida@student.trimexcolleges.edu.ph</a></div>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        <div>Sucat, Muntinlupa City</div>
                    </li>
                    <li>
                        <i class="fa-solid fa-clock" aria-hidden="true"></i>
                        <div>Open to internships<span>Usually replies within a few days.</span></div>
                    </li>
                </ul>

                <h3 style="margin-top: 22px;">Find Her Here</h3>
                <ul class="hero__socials">
                    <li>
                        <a href="https://github.com/jannycailaida/" target="_blank" rel="noopener noreferrer" aria-label="GitHub profile">
                            <i class="fa-brands fa-github" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-placeholder-link data-message="LinkedIn profile coming soon" aria-label="LinkedIn profile placeholder">
                            <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/jannyca.ilaida.50" target="_blank" rel="noopener noreferrer" aria-label="Facebook profile">
                            <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>

                <div class="contact__map reveal" style="margin-top: 24px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4582.665577414929!2d121.04725103354404!3d14.466138639641809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cfbb2eb7668f%3A0xcd96a177404d9ee4!2sMarina%20Heights%20Swimming%20Pool%2C%20Muntinlupa%2C%20Metro%20Manila!5e1!3m2!1sen!2sph!4v1785994803034!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
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
