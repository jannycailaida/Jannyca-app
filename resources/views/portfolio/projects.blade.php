<section id="projects" class="section" aria-labelledby="projects-title">
    <div class="container">
        <x-section-head id="projects-title"
            title="Projects"
            intro="A few things Jannyca is building and proud of. Each card is a placeholder waiting for a real project, a real screenshot, and real links." />

        <div class="projects__grid">
            @php
                $projects = [
                    [
                        'icon' => 'fa-solid fa-list-check',
                        'title' => 'Task Management System',
                        'desc' => 'A place to plan and track tasks with teammates. This description is a placeholder until Jannyca adds the real project.',
                        'tech' => ['Laravel', 'Bootstrap', 'MySQL'],
                    ],
                    [
                        'icon' => 'fa-solid fa-money-check-dollar',
                        'title' => 'Payroll Management System',
                        'desc' => 'A system that keeps payroll records organized. This description is a placeholder until Jannyca adds the real project.',
                        'tech' => ['PHP', 'MySQL', 'JavaScript'],
                    ],
                    [
                        'icon' => 'fa-solid fa-graduation-cap',
                        'title' => 'Student Information System',
                        'desc' => 'A home for student records and profiles. This description is a placeholder until Jannyca adds the real project.',
                        'tech' => ['Laravel', 'Bootstrap', 'SQLite'],
                    ],
                    [
                        'icon' => 'fa-solid fa-boxes-stacked',
                        'title' => 'Inventory Management System',
                        'desc' => 'A clear view of stock, items, and levels. This description is a placeholder until Jannyca adds the real project.',
                        'tech' => ['PHP', 'MySQL', 'Bootstrap'],
                    ],
                    [
                        'icon' => 'fa-solid fa-user-clock',
                        'title' => 'Attendance Monitoring System',
                        'desc' => 'A simple way to record who is present. This description is a placeholder until Jannyca adds the real project.',
                        'tech' => ['Laravel', 'JavaScript', 'MySQL'],
                    ],
                    [
                        'icon' => 'fa-solid fa-note-sticky',
                        'title' => 'Mobile Notes App',
                        'desc' => 'A quick, friendly place for notes on the go. This description is a placeholder until Jannyca adds the real project.',
                        'tech' => ['Android', 'Java', 'SQLite'],
                    ],
                    [
                        'icon' => 'fa-solid fa-code',
                        'title' => 'Portfolio Website',
                        'desc' => 'The site you are looking at right now. This card will be updated as the portfolio grows.',
                        'tech' => ['Laravel', 'Bootstrap', 'CSS', 'JavaScript'],
                    ],
                ];
            @endphp

            @foreach ($projects as $index => $project)
                <article class="card card--lift project reveal" data-delay="{{ $index % 3 }}">
                    <div class="project__shot" aria-hidden="true">
                        <span class="tag project__tag">Placeholder</span>
                        <i class="{{ $project['icon'] }}"></i>
                    </div>
                    <div class="project__body">
                        <h3>{{ $project['title'] }}</h3>
                        <p>{{ $project['desc'] }}</p>
                        <ul class="project__tech" aria-label="Technologies used">
                            @foreach ($project['tech'] as $tech)
                                <li>{{ $tech }}</li>
                            @endforeach
                        </ul>
                        <div class="project__actions">
                            <a class="btn btn--ghost" href="#" data-placeholder-link data-message="GitHub link coming soon">GitHub</a>
                            @if ($project['title'] === 'Portfolio Website')
                                <a class="btn btn--primary" href="#top">Live Demo</a>
                            @else
                                <a class="btn btn--primary" href="#" data-placeholder-link data-message="Live demo coming soon">Live Demo</a>
                            @endif
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
