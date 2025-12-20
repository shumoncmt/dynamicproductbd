<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<link rel="icon" type="image/png" sizes="38x38" href="{{ asset('img/logo/favicon.png')}}">

<!-- Customized Bootstrap Stylesheet -->


<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<!-- Template Stylesheet -->
<!-- <link href="css/style.css" rel="stylesheet"> -->

<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">






<!-- Spinner Start -->
<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
<!-- Spinner End -->


<!-- Topbar Start -->

<div class="container-fluid topbar d-none d-xl-block w-100">
    <div class="row gx-0 align-items-center" style="height: 35px;">
        <div class="col-lg-6 text-center text-lg-start mb-lg-0">
            <div class="d-flex flex-wrap">
                <a href="https://maps.app.goo.gl/Emp5KStvoPH3nkcR9" class="text-muted me-4"><i
                        class="fas fa-map-marker-alt text-secondary me-2"></i>Find A Location</a>
                <a href={{Route('home')}} class="text-muted me-4"><i
                        class="fas fa-phone-alt text-secondary me-2"></i>+880
                    1898777647</a>
                <a href={{Route('home')}} class="text-muted me-0"><i
                        class="fas fa-envelope text-secondary me-2"></i>karim@greengenesisbd.com</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-end">
            <div class="d-flex align-items-center justify-content-end">
                <a href={{Route('home')}} class="text-muted me-3"><i class="fas fa-clock text-secondary me-2"></i>
                    <?php
                            date_default_timezone_set("Asia/Dhaka");
                            echo  date("h:i:sa ");
                            ?> Sat - Thu 9:00 AM - 06:30 PM, Friday - CLOSED</a>
                <a href="https://www.facebook.com/dynamicproductbd"
                    class="btn btn-primary btn-rounded border border-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/GreenGenesisEn3"
                    class="btn btn-primary btn-rounded border border-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/greengenesisbd/"
                    class="btn btn-primary btn-rounded border border-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/green-genesis-engineering-ltd/"
                    class="btn btn-primary btn-rounded border border-white me-3"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid sticky-top px-0 ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-nev py-3 px-4">
        <a href={{Route('home')}} class="navbar-brand p-0">
            <!-- <h1 class="text-secondary display-6"><i class="fas fa-city text-primary me-3"></i></h1> -->
            <img src="{{ asset('img/logo/f-logo2.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto pt-2 pt-lg-0 ">
                <a href={{Route('home')}} class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown ">
                    <a href={{Route('about')}} class="nav-link text-dark">About</a>
                    <div class="dropdown-menu m-lg-0">
                        <a href={{Route('team')}} class="dropdown-item ">Team</a>
                    </div>
                </div>
                <div class="nav-item dropdown ">
                    <a href={{Route('categories')}} class="nav-link text-dark">Product</a>
                    <div class="dropdown-menu m-lg-0">
                        <a href={{Route('industrialpump')}} class="dropdown-item ">Dynamic Pump</a>
                        <a href={{Route('electricmotor')}} class="dropdown-item ">Dynamic Motor</a>
                        <a href={{Route('roandufmembrane')}} class="dropdown-item ">Dynamic RO Membrane</a>
                        <a href={{Route('blower')}} class="dropdown-item ">Dynamic Blower</a>
                        <a href={{Route('frpvessel')}} class="dropdown-item ">Dynamic Vessel</a>
                        <a href={{Route('dosingpump')}} class="dropdown-item ">Dosing Pump</a>
                        <a href={{Route('electromageneticflowmeter')}} class="dropdown-item ">Dynamic Flow Meter</a>
                        {{-- <a href={{Route('watertreatmentaccessories')}} class="dropdown-item ">Flocculants &
                        Dechlorinator</a> --}}
                        <a href={{Route('watertreatmentchemicalsandmedia')}} class="dropdown-item ">Biocide & Membrane
                            Cleaner</a>
                    </div>
                </div>

                <!-- <div class="nav-item dropdown ">
                            <a href={{Route('service')}} class="nav-link text-dark ">Industrial Sulotion</a>
                            <div class="dropdown-menu m-lg-0">
                                <a href={{Route('etp')}} class="dropdown-item ">ETP Plant</a>
                                <a href={{Route('stp')}} class="dropdown-item ">STP Plant</a>
                                <a href={{Route('wtp')}} class="dropdown-item ">WTP Plant</a>
                                <a href={{Route('zld')}} class="dropdown-item ">ZLD Plant</a>
                                <a href={{Route('deeptubewell')}} class="dropdown-item ">Deep Tube Well</a>
                                <a href={{Route('DrinkingWaterTreatmentPlant')}} class="dropdown-item ">Drinking Water Treatment Plant</a>
                                <a href={{Route('MobileWaterTreatmentPlant')}} class="dropdown-item "> Mobile Water Treatment Plant</a>
                                <a href={{Route('SurfaceWaterTreatmentPlant')}} class="dropdown-item ">Surface Water Treatment Plant</a>
                                <a href={{Route('PumpsandPumpingSystems')}} class="dropdown-item ">Pumps and Pumping Systems</a>
                                <a href={{Route('UltraPureWaterTreatmentPlant')}} class="dropdown-item ">Ultra Pure Water Treatment Plant</a>
                                <a href={{Route('WaterandWasteWaterTreatmentPlants')}} class="dropdown-item ">Water and Waste Water Treatment Plants</a>
                            </div>
                        </div> -->

                <!-- <a href={{Route('project')}} class="nav-item nav-link">Projects</a> -->
                <div class="nav-item dropdown ">
                    <a href={{Route('blog')}} class="nav-link text-dark " data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-lg-0">
                        <a href={{Route('feature')}} class="dropdown-item ">Our Features</a>
                        <a href={{Route('blog')}} class="dropdown-item">Our Blog</a>
                        <a href={{Route('testimonial')}} class="dropdown-item">Testimonial</a>
                        <a href={{Route('error')}} class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href={{Route('contact')}} class="nav-item nav-link">Contact</a>
            </div>
            <div class="d-flex align-items-center flex-nowrap pt-3  pt-lg-0 ms-lg-2">
                {{-- <button class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
                <a href={{Route('contact')}} class="btn btn-secondary py-2 px-4 ms-3 flex-wrap flex-sm-shrink-0">Get a
                    Quate</a>
            </div>
        </div>
    </nav>
</div>


<!-- Navbar & Hero End -->

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Header Start -->
<!-- <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Features</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Feature</li>
                </ol>    
            </div>
        </div> -->
<!-- Header End -->

{{-- <style type="text/css" media="all">
    body {
    cursor: none; /* Hide default cursor */
    }

    .custom-cursor {
    width: 25px;
    height: 25px;
    border: 3px solid #135447;
    border-radius: 50%;
    position: fixed;
    pointer-events: none;
    transform: translate(-50%, -50%);
    transition: transform 0.05s ease;
    z-index: 9999;
    }
</style>

<div class="custom-cursor"></div>
<script>
        const cursor = document.querySelector('.custom-cursor');
            document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });
</script> --}}

<!-- Carousel End -->