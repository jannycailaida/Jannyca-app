<section id="skills" class="section section--alt" aria-labelledby="skills-title">
    <div class="container">
        <x-section-head id="skills-title"
            title="Skills"
            intro="The tools and technologies Jannyca is learning and working with as a mobile and web development student." />

        <div class="skills__grid">
            @php
                $groups = [
                    [
                        'icon' => 'fa-solid fa-code',
                        'title' => 'Programming',
                        'skills' => [
                            ['PHP', 70], ['Java', 65], ['JavaScript', 70],
                            ['C#', 55], ['Python', 60], ['SQL', 65],
                        ],
                    ],
                    [
                        'icon' => 'fa-solid fa-window-restore',
                        'title' => 'Frontend',
                        'skills' => [
                            ['HTML', 85], ['CSS', 80], ['Bootstrap', 75], ['Responsive Design', 75],
                        ],
                    ],
                    [
                        'icon' => 'fa-solid fa-server',
                        'title' => 'Backend',
                        'skills' => [
                            ['Laravel', 70], ['REST API', 60], ['Authentication', 55],
                        ],
                    ],
                    [
                        'icon' => 'fa-solid fa-database',
                        'title' => 'Database',
                        'skills' => [
                            ['MySQL', 70], ['SQLite', 65],
                        ],
                    ],
                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'Mobile',
                        'skills' => [
                            ['Android Development', 55], ['Flutter (Learning)', 30],
                        ],
                    ],
                    [
                        'icon' => 'fa-solid fa-screwdriver-wrench',
                        'title' => 'Tools',
                        'skills' => [
                            ['Git', 70], ['GitHub', 70], ['VS Code', 80], ['Android Studio', 60],
                            ['Visual Studio', 65], ['XAMPP', 70], ['Postman', 60], ['Figma', 55],
                        ],
                    ],
                ];
            @endphp

            @foreach ($groups as $index => $group)
                <article class="card card--lift skillcard reveal" data-delay="{{ $index % 3 }}">
                    <div class="skillcard__head">
                        <span class="skillcard__icon" aria-hidden="true"><i class="{{ $group['icon'] }}"></i></span>
                        <h3>{{ $group['title'] }}</h3>
                    </div>

                    @foreach ($group['skills'] as $skill)
                        <div class="skill">
                            <div class="skill__head">
                                <span>{{ $skill[0] }}</span>
                                <span>{{ $skill[1] }}%</span>
                            </div>
                            <div class="skill__bar" role="progressbar"
                                 aria-valuenow="{{ $skill[1] }}" aria-valuemin="0" aria-valuemax="100"
                                 aria-label="{{ $skill[0] }} proficiency">
                                <span data-level="{{ $skill[1] }}%"></span>
                            </div>
                        </div>
                    @endforeach
                </article>
            @endforeach
        </div>

        <p class="note">The percentages are placeholders awaiting Jannyca's real proficiency levels.</p>
    </div>
</section>
