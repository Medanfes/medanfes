@extends('layouts.app')

@section('content')

<main>

    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-person custom-icon me-2"></i>
                        <strong class="text-dark">Welcome to Night Live Music 2026</strong>
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
                <div class="col-lg-6 col-10 mx-auto" data-aos="zoom-out" data-aos-duration="1000">
                    <form id="ticket-form" class="custom-form ticket-form mb-5 mb-lg-0" role="form">

                        <h2 class="text-center mb-4">Get started here</h2>

                        <div class="ticket-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Full name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                                </div>
                            </div>

                            <h6>Choose Ticket Type</h6>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-check form-control">
                                        <input class="form-check-input" type="radio" name="ticket_type" value="regular" required>
                                        <label class="form-check-label">Reguler Rp150.000</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-check form-check-radio form-control">
                                        <input class="form-check-input" type="radio" name="ticket_type" value="vip" required>
                                        <label class="form-check-label">VIP Rp300.000</label>
                                    </div>
                                </div>
                            </div>

                            <input type="number" name="ticket_quantity" class="form-control" placeholder="Number of Tickets" required>

                            <textarea name="additional_request" rows="3" class="form-control" placeholder="Additional Request"></textarea>

                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Buy Ticket</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="site-footer">
    <div class="site-footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="text-white mb-lg-0" data-aos="fade-right" data-aos-duration="1000">MedanFes</h2>
                </div>

                <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center"  data-aos="fade-left" data-aos-duration="1000">
                    <ul class="social-icon d-flex justify-content-lg-end">
                        <li class="social-icon-item">
                            <a href="https://www.instagram.com/medanfes" class="social-icon-link" target="_blank">
                                <span class="bi-instagram"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://youtube.com/@medanfes" class="social-icon-link" target="_blank">
                                <span class="bi-youtube"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://wa.me/6281225012207" class="social-icon-link" target="">
                                <span class="bi-whatsapp"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">

            <div class="col-lg-6 col-12 mb-4 pb-2">
                <h5 class="site-footer-title mb-3">Pages</h5>

                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a class="nav-link click-scroll" href="/#section_1">Home</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a class="nav-link click-scroll" href="/#section_2">About</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a class="nav-link click-scroll" href="/#section_3">Artists</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a class="nav-link click-scroll" href="/#section_4">Schedule</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a class="nav-link click-scroll" href="/#section_5">Pricing</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a class="nav-link click-scroll" href="/#section_6">Contact</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a class="nav-link click-scroll" href="/vote">Vote Encore</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <h5 class="site-footer-title mb-3">Have a question?</h5>

                <p class="text-white d-flex mb-1">
                    <a href="https://wa.me/6281225012207" class="site-footer-link">
                        081225012207
                    </a>
                </p>

                <p class="text-white d-flex">
                    <a href="mailto:med4nfes@gmail.com" class="site-footer-link">
                        med4nfes@gmail.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                <h5 class="site-footer-title mb-3">Location</h5>

                <p class="text-white d-flex mt-3 mb-2">
                Jalan Balai Kota, Kesawan, Kecamatan Medan Barat, Kota Medan, Sumatera Utara</p>

                <a class="link-fx-1 color-contrast-higher mt-3" href="https://maps.app.goo.gl/3nxMTncGzg1fbzCT8">
                    <span>Maps</span>
                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                </a>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mt-5">
                    <p class="copyright-text">Copyright © 2026 MedanFes Company</p>
                </div>

            </div>
        </div>
    </div>
</footer>

@endsection

@section('scripts')
<script src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('services.midtrans.client_key') }}"></script>

<script>
    document.getElementById('ticket-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = this;
        const formData = new FormData();
        formData.append('name', form.querySelector('[name="name"]').value);
        formData.append('email', form.querySelector('[name="email"]').value);
        formData.append('ticket_type', form.querySelector('[name="ticket_type"]:checked').value);
        formData.append('quantity', form.querySelector('[name="ticket_quantity"]').value);
        formData.append('_token', '{{ csrf_token() }}');

        fetch('/order', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(result => {
            if (result.snap_token) {
                snap.pay(result.snap_token, {
                    onSuccess: function(result) {
                        alert('Pembayaran berhasil!');
                        window.location.href = '/';
                    },
                    onPending: function(result) {
                        alert('Menunggu pembayaran...');
                    },
                    onError: function(result) {
                        alert('Pembayaran gagal!');
                    }
                });
            } else {
                alert('Gagal membuat order: ' + JSON.stringify(result));
            }
        })
        .catch(err => {
            alert('Terjadi kesalahan: ' + err.message);
            console.error(err);
        });
    });
</script>
@endsection