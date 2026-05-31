@extends('layouts.app')

@section('content')

        <main>

            <header class="site-header">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12 col-12 d-flex flex-wrap">
                            <p class="d-flex me-4 mb-0">
                                <i class="bi-person custom-icon me-2"></i>
                                <strong class="text-dark">Welcome to Night Live 2026</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </header>


            <nav class="navbar navbar-expand-lg animate__animated animate__fadeInDown">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        MedanFes
                    </a>

                    <a href="/ticket" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Artists</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_6">Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/vote">Vote</a>
                            </li>
                        </ul>

                        <a href="/ticket" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section" id="section_1">
                <div class="section-overlay"></div>

                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row">

                        <div class="col-12 mt-auto mb-5 text-center animate__animated animate__fadeIn animate__delay-1s">
                            <small>MedanFes Presents</small>

                            <h1 class="text-white mb-5">Night Live 2026</h1>

                            <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a>
                        </div>

                        <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center animate__animated animate__fadeInUp">
                            <div class="date-wrap">
                                <h5 class="text-white">
                                    <i class="custom-icon bi-clock me-2"></i>
                                    24 - 26<sup>th</sup>, July 2026
                                </h5>
                            </div>

                            <div class="location-wrap mx-auto py-3 py-lg-0">
                                <h5 class="text-white">
                                    <i class="custom-icon bi-geo-alt me-2"></i>
                                    Lapangan Merdeka, Medan
                                </h5>
                            </div>

                            <div class="social-share">
                                <ul class="social-icon d-flex align-items-center justify-content-center">
                                    <span class="text-white me-3">Share:</span>
                                    <li class="social-icon-item">
                                        <a href="https://twitter.com/intent/tweet?url=https://zaskiea.github.io/medanfes/&text=Yuk+kunjungi+MedanFes%21" target="_blank" class="social-icon-link">
                                            <span class="bi-twitter"></span>
                                        </a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="https://wa.me/?text=Yuk%20kunjungi%20MedanFes%20di%20https://zaskiea.github.io/medanfes/" target="_blank" rel="noopener noreferrer" class="social-icon-link" title="Bagikan ke WhatsApp">
                                            <span class="bi-whatsapp"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="video/pexels-2022395.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center" data-aos="fade-right" data-aos-duration="1000">
                            <div class="services-info">
                                <h2 class="text-white mb-4">About MedanFes 2026</h2>

                                <p class="text-white">MedanFes 2026 adalah festival musik yang menampilkan artis-artis lokal berbakat. Acara ini jadi ajang seru untuk menikmati musik dan kebersamaan anak muda Medan.</p>

                                <h6 class="text-white mt-4">Once in Lifetime Experience</h6>

                                <p class="text-white">Satu malam penuh kenangan! Rasakan serunya festival yang hanya datang setahun sekali.</p>

                                <h6 class="text-white mt-4">Whole Night Party</h6>

                                <p class="text-white">Pesta semalaman dengan musik non-stop dari artis lokal. Ajak teman-temanmu dan nikmati malam tak terlupakan!</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                            <div class="about-text-wrap">
                                <img src="images/pexels-alexander-suhorucov-6457579.jpg" class="about-image img-fluid">

                                <div class="about-text-info d-flex">
                                    <div class="d-flex">
                                        <i class="about-text-icon bi-person"></i>
                                    </div>


                                    <div class="ms-4">
                                        <h3>a happy moment</h3>

                                        <p class="mb-0">your amazing festival experience with us</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="artists-section section-padding" id="section_3" style="background-color: black;">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-12 text-center" style="margin-top: -80px;" data-aos="zoom-in-down" data-aos-duration="1000">
                            <h2 class="mb-4 text-white">Meet Artists</h1>
                        </div>

                        <div class="col-lg-5 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/joecalih-UmTZqmMvQcw-unsplash.jpg" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Hindia
                                    </p>

                                    <p>
                                        <strong>Birthdate:</strong>
                                        22 Februari 1994
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Indie Pop&amp;Rock
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Instagram:</strong>
                                        <a href="https://www.instagram.com/wordfangs" target="_blank">@wordfangs</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/abstral-official-bdlMO9z5yco-unsplash.jpg" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Lyodra Ginting
                                    </p>

                                    <p>
                                        <strong>Birthdate:</strong>
                                        21 Juni 2003
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Pop
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Instagram:</strong>
                                        <a href="https://www.instagram.com/lyodraofficial" target="_blank">@lyodraofficial</a>
                                    </p>
                                </div>
                            </div>

                            <div class="artists-thumb" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                                <img src="images/artists/soundtrap-rAT6FJ6wltE-unsplash.jpg" class="artists-image img-fluid">

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Reality Club
                                    </p>

                                    <p>
                                        <strong>Formed:</strong>
                                        16 April 2016
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Indie Pop&amp;Rock
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Instagram:</strong>
                                        <a href="https://www.instagram.com/realityclub" target="_blank">@realityclub</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12 mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/pmks.jpg" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p><strong>Name:</strong>Pamungkas</p>
                                    <p><strong>Birthdate:</strong>14 April 1993</p>
                                    <p><strong>Music:</strong>Pop</p>
                                    <hr>
                                    <p class="mb-0">
                                        <strong>Instagram:</strong>
                                        <a href="https://www.instagram.com/pamunqkas" target="_blank">@pamunqkas</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" style="margin-top: -50px;">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/ardt.jpg" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p><strong>Name:</strong>Ardhito Pramono</p>
                                    <p><strong>Birthdate:</strong>22 Mei 1995</p>
                                    <p><strong>Music:</strong>Jazz&amp;Pop</p>
                                    <hr>
                                    <p class="mb-0">
                                        <strong>Instagram:</strong>
                                        <a href="https://www.instagram.com/ardhitopramono" target="_blank">@ardhito</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="schedule-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4" style="margin-top: -80px;"  data-aos="zoom-in-down" data-aos-duration="1000">Event Schedule</h1>

                            <div class="table-responsive"  style="margin-top: 50px;" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                                <table class="schedule-table table table-dark">
                                    <thead>
                                        <tr>
                                            

                                            <th scope="col">Friday</th>

                                            <th scope="col">Saturday</th>

                                            <th scope="col">Sunday</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            

                                            <td class="table-background-image-wrap rock-background-image">
                                                <h3>Power Pop</h3>

                                                <p class="mb-2">5:00 - 7:00 PM</p>

                                                <p>By Lyodra</p>

                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #a0b2c2"></td>

                                            <td class="table-background-image-wrap pop-background-image">
                                                <h3>Indie Rock Session</h3>

                                                <p class="mb-2">5:00 - 7:00 PM</p>

                                                <p>By Hindia</p>

                                                <div class="section-overlay"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            
                
                                            <td style="background-color: #84b8db"></td>

                                            <td class="table-background-image-wrap pmks-background-image">
                                                <h3>Pop Groove Night</h3>

                                                <p class="mb-2">6:30 - 9:30 PM</p>

                                                <p>By Pamungkas</p>
                                            </td>

                                            <td style="background-color: #2f4156"></td>
                                        </tr>

                                        <tr>
                                            
                
                                            <td class="table-background-image-wrap ardt-background-image">
                                                <h3>Jazz & Pop Fusion</h3>

                                                <p class="mb-2">7:00 - 10:00 PM</p>

                                                <p>By Ardhito Pramono</p>

                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #f5efeb"></td>

                                            <td class="table-background-image-wrap country-background-image">
                                                <h3>Indie Rock Vibes</h3>

                                                <p class="mb-2">7:00 - 10:00 PM</p>

                                                <p>By Reality Club</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="pricing-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-white text-center mb-4" style="margin-top: -80px;" data-aos="zoom-in-down" data-aos-duration="1000">Plans, you'll love</h2>
                        </div>
                        
                        <div class="col-lg-6 col-12">
                            <div class="pricing-thumb" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100">
                                <div class="d-flex">
                                    <div>
                                        <h3 style="color: white;"><small>Reguler</small> Rp150.000</h3>

                                        <p style="color: white;">Fasilitas:</p>
                                    </div>

                                    
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="text-white pricing-list-item">Akses masuk ke area konser umum (General Admission)</li>

                                    <li class="text-white pricing-list-item">Penukaran tiket dengan gelang festival</li>

                                    <li class="text-white pricing-list-item">Jadwal konser digital</li>

                                    <li class="text-white pricing-list-item">Akses ke area tenant makanan & minuman</li>

                                    <li class="text-white pricing-list-item">Spot foto official festival</li>

                                    <li class="text-white pricing-list-item">Merchandise eksklusif (stok terbatas)</li>
                                </ul>

                                <a class="link-fx-1 color-contrast-higher mt-4" href="/ticket">
                                    <span>Buy Ticket</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                            <div class="pricing-thumb"  data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100">
                                <div class="d-flex">
                                    <div>
                                        <h3 style="color: white;"><small>VIP</small> Rp300.000</h3>

                                        <p style="color: white;">Fasilitas:</p>
                                    </div>
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="text-white pricing-list-item">Semua fasilitas Reguler</li>

                                    <li class="text-white pricing-list-item">1x minuman gratis dari sponsor</li>

                                    <li class="text-white pricing-list-item">Akses masuk tanpa antre (Fast Lane Entry)</li>

                                    <li class="text-white pricing-list-item">Area menonton lebih dekat ke panggung (Priority Zone)</li>
                                    
                                    <li class="text-white pricing-list-item">Voucher diskon official merchandise</li>
                                </ul>

                                <a class="link-fx-1 color-contrast-higher mt-4" href="/ticket">
                                    <span>Buy Ticket</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


        <section class="contact-section section-padding" id="section_6" style="background-color: black;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-white text-center mb-4" style="margin-top: -80px;" data-aos="zoom-in-down" data-aos-duration="1000">Interested? Let's talk</h2>

                        <nav class="d-flex justify-content-center">
                            <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactForm" type="button" role="tab" aria-controls="nav-ContactForm" aria-selected="true" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                                    <h5>Contact Form</h5>
                                </button>

                                <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactMap" type="button" role="tab" aria-controls="nav-ContactMap" aria-selected="false" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                                    <h5>Google Maps</h5>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="100">
                            <!-- Tab Contact Form -->
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
        <form action="https://formspree.io/f/xgvynlyr" method="POST" class="custom-form contact-form mb-5 mb-lg-0" role="form">


            <div class="contact-form-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <input type="text" name="name" id="contact-name" class="form-control" placeholder="Full name" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <input type="email" name="email" id="contact-email" class="form-control" placeholder="Email address" required>
                    </div>
                </div>

                <textarea name="message" rows="3" class="form-control" id="contact-message" placeholder="Message" required></textarea>

                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                    <button type="submit" class="form-control">Send message</button>
                </div>
            </div>
        </form>



                            </div>

                            <!-- Tab Google Maps -->
                            <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">
                                <div class="map-responsive">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.987500631331!2d98.67600067310154!3d3.590341350286065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c89d3bb801%3A0x50b82ce91d80fc07!2sLap.%20Merdeka%2C%20Kesawan%2C%20Kec.%20Medan%20Bar.%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1750666915162!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a class="nav-link click-scroll" href="#section_3">Artists</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a class="nav-link click-scroll" href="#section_4">Schedule</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a class="nav-link click-scroll" href="#section_6">Contact</a>
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

<!--

T e m p l a t e M o

-->

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>



@endsection