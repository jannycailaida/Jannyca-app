<section id="services" class="section" aria-labelledby="services-title">
    <div class="container">
        <x-section-head id="services-title"
            title="Services"
            intro="The kinds of work Jannyca is training to do well. Each card is a placeholder until she defines her real service descriptions." />

        <div class="services__grid">
            @php
                $services = [
                    ['icon' => 'fa-solid fa-globe', 'title' => 'Web Development', 'desc' => 'Websites and web apps built to be fast, friendly, and easy to maintain.'],
                    ['icon' => 'fa-solid fa-mobile-screen', 'title' => 'Mobile App Development', 'desc' => 'Mobile apps designed for real hands and real everyday use.'],
                    ['icon' => 'fa-solid fa-pen-ruler', 'title' => 'UI/UX Design', 'desc' => 'Interfaces that feel clear, kind, and simple to navigate.'],
                    ['icon' => 'fa-solid fa-database', 'title' => 'Database Design', 'desc' => 'Data organized so that it stays safe, fast, and easy to work with.'],
                    ['icon' => 'fa-solid fa-wrench', 'title' => 'System Maintenance', 'desc' => 'Keeping systems healthy, updated, and running smoothly.'],
                    ['icon' => 'fa-solid fa-headset', 'title' => 'Technical Support', 'desc' => 'Patient help for people who just want things to work.'],
                ];
            @endphp

            @foreach ($services as $index => $service)
                <article class="card card--lift service reveal" data-delay="{{ $index % 3 }}">
                    <span class="service__icon" aria-hidden="true"><i class="{{ $service['icon'] }}"></i></span>
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
