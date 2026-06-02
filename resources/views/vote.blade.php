@extends('layouts.app')

@section('content')
<main>

    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-person custom-icon me-2"></i>
                        <strong class="text-dark">Welcome to Night Live 2025</strong>
                    </p>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg animate__animated animate__fadeInDown">
        <div class="container">
            <a class="navbar-brand" href="/">MedanFes</a>
            <a href="/ticket" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                    <li class="nav-item"><a class="nav-link" href="/#section_1">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#section_2">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#section_3">Artists</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#section_4">Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#section_5">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#section_6">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="/vote">Vote</a></li>
                </ul>
                <a href="/ticket" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>
            </div>
        </div>
    </nav>

    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-10 mx-auto">

                    <div class="custom-form ticket-form mb-5" data-aos="zoom-out" data-aos-duration="1000">
                        <h2 class="text-center mb-4">🎵 Vote Lagu Encore</h2>

                        <div class="ticket-form-body">
                            <input type="text" id="ticket_code" class="form-control mb-3"
                                placeholder="Masukkan kode tiket kamu" required>

                            <select id="song_title" class="form-control mb-3">
                                <option value="">-- Pilih Lagu --</option>
                                <option value="Anything You Want">Anything You Want</option>
                                <option value="Alexandra">Alexandra</option>
                                <option value="Is It The Answer?">Is It The Answer?</option>
                                <option value="Telenovia">Telenovia</option>
                                <option value="I Wish I Was Your Joke">I Wish I Was Your Joke</option>
                                <option value="Am I Bothering You?">Am I Bothering You?</option>
                                <option value="Love Epiphany">Love Epiphany</option>
                                <option value="Dancing In The Breeze Alone">Dancing In The Breeze Alone</option>
                                <option value="You Let Her Go Again">You Let Her Go Again</option>
                                <option value="Elastic Hearts">Elastic Hearts</option>
                            </select>

                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                <button id="vote-btn" class="form-control">Vote Sekarang</button>
                            </div>

                            <div id="vote-message" class="text-center mt-3" style="display:none;"></div>
                        </div>
                    </div>

                    <div class="custom-form ticket-form" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="text-center mb-4" style="color:#f5a623;">📊 Hasil Voting Realtime</h4>
                        <div id="vote-results">
                            @forelse($results as $result)
                            <div class="d-flex justify-content-between align-items-center mb-3 p-2"
                                style="background:#2a2a2a; border-radius:8px;">
                                <span style="color:#f5a623; font-weight:600;">{{ $result['song_title'] }}</span>
                                <span style="background:#f5a623; color:#000; padding:5px 14px; border-radius:20px; font-weight:700;">
                                    {{ $result['total'] }} votes
                                </span>
                            </div>
                            @empty
                            <p class="text-center" style="color:#f5a623;">Belum ada vote. Jadilah yang pertama!</p>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
@endsection

@section('scripts')
<script>
    document.getElementById('vote-btn').addEventListener('click', function() {
        const ticketCode = document.getElementById('ticket_code').value;
        const songTitle  = document.getElementById('song_title').value;
        const msgDiv     = document.getElementById('vote-message');

        if (!ticketCode || !songTitle) {
            msgDiv.style.display = 'block';
            msgDiv.style.color   = 'red';
            msgDiv.textContent   = 'Kode tiket dan pilihan lagu harus diisi.';
            return;
        }

        const formData = new FormData();
        formData.append('ticket_code', ticketCode);
        formData.append('song_title', songTitle);
        formData.append('_token', '{{ csrf_token() }}');

        fetch('/vote', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            msgDiv.style.display = 'block';
            if (data.success) {
                msgDiv.style.color = '#f5a623';
                msgDiv.textContent = '✅ ' + data.message;
                document.getElementById('ticket_code').value = '';
                document.getElementById('song_title').value  = '';
                updateResults(data.results);
            } else {
                msgDiv.style.color = 'red';
                msgDiv.textContent = '❌ ' + data.message;
            }
        })
        .catch(err => {
            msgDiv.style.display = 'block';
            msgDiv.style.color   = 'red';
            msgDiv.textContent   = 'Terjadi kesalahan, coba lagi.';
            console.error(err);
        });
    });

    window.Echo.channel('votes')
        .listen('.vote.updated', (e) => {
            updateResults(e.results);
        });

    function updateResults(results) {
        const container = document.getElementById('vote-results');
        if (results.length === 0) {
            container.innerHTML = '<p class="text-center" style="color:#f5a623;">Belum ada vote. Jadilah yang pertama!</p>';
            return;
        }
        container.innerHTML = results.map(r => `
            <div class="d-flex justify-content-between align-items-center mb-3 p-2"
                style="background:#2a2a2a; border-radius:8px;">
                <span style="color:#f5a623; font-weight:600;">${r.song_title}</span>
                <span style="background:#f5a623; color:#000; padding:5px 14px; border-radius:20px; font-weight:700;">
                    ${r.total} votes
                </span>
            </div>
        `).join('');
    }
</script>
@endsection