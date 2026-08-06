<section id="education" class="section section--alt" aria-labelledby="education-title">
    <div class="container">
        <x-section-head id="education-title"
            title="Education"
            intro="The academic path Jannyca is on, the coursework she is taking, and the goals she is working toward." />

        <ol class="timeline">
            <li class="timeline__item reveal">
                <span class="timeline__dot" aria-hidden="true"></span>
                <div class="card timeline__card">
                    <p class="timeline__period">2024 to Present</p>
                    <h3>Bachelor of Science in Information Technology</h3>
                    <p class="timeline__place">Trimex · Specialization: Mobile &amp; Web Development</p>
                    <p>Current year level and expected graduation will be added here as Jannyca's academic journey continues.</p>
                </div>
            </li>
            <li class="timeline__item reveal">
                <span class="timeline__dot" aria-hidden="true"></span>
                <div class="card timeline__card">
                    <p class="timeline__period">Ongoing</p>
                    <h3>Relevant Coursework</h3>
                    <p class="timeline__place">Classwork focus</p>
                    <div class="chipbox__list">
                        @foreach (['Web Development', 'Mobile Development', 'Database Systems', 'Programming', 'UI/UX', 'Software Engineering'] as $course)
                            <span class="chip">{{ $course }}</span>
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="timeline__item reveal">
                <span class="timeline__dot" aria-hidden="true"></span>
                <div class="card timeline__card">
                    <p class="timeline__period">Ongoing</p>
                    <h3>Academic Achievements</h3>
                    <p class="timeline__place">Goals in progress</p>
                    <p>Achievements will be listed here as Jannyca earns them.</p>
                </div>
            </li>
        </ol>
    </div>
</section>
