<section id="certificates" class="section" aria-labelledby="certificates-title">
    <div class="container">
        <x-section-head id="certificates-title"
            title="Certificates"
            intro="Training Jannyca has earned and is proud of. Each card is a placeholder until her real certificates and issuers are added." />

        <div class="certs__grid">
            @php
                $certs = [
                    ['icon' => 'fa-solid fa-code', 'title' => 'Responsive Web Design', 'issuer' => 'Issuer name here'],
                    ['icon' => 'fa-brands fa-php', 'title' => 'PHP Development', 'issuer' => 'Issuer name here'],
                    ['icon' => 'fa-solid fa-layer-group', 'title' => 'Laravel', 'issuer' => 'Issuer name here'],
                    ['icon' => 'fa-brands fa-java', 'title' => 'Java Programming', 'issuer' => 'Issuer name here'],
                    ['icon' => 'fa-solid fa-database', 'title' => 'Database Management', 'issuer' => 'Issuer name here'],
                    ['icon' => 'fa-brands fa-git-alt', 'title' => 'Git and GitHub', 'issuer' => 'Issuer name here'],
                ];
            @endphp

            @foreach ($certs as $index => $cert)
                <article class="card card--lift cert reveal" data-delay="{{ $index % 3 }}">
                    <span class="cert__icon" aria-hidden="true"><i class="{{ $cert['icon'] }}"></i></span>
                    <span class="tag">Placeholder</span>
                    <h3>{{ $cert['title'] }}</h3>
                    <p class="cert__issuer">{{ $cert['issuer'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
