<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="cononical" href="https://dynamicproductbd.com/error">
    <meta name="description"
        content="Discover top-quality industrial electric motors, pumps, blowers, flow meters, RO membranes, and filtration media in Bangladesh.." />
    <meta name="keywords"
        content="Discover top-quality industrial electric motors, pumps, blowers, flow meters, RO membranes, and filtration media in Bangladesh.">

    @include('master.header')
    @include('master.slider')

</head>

<body>

    <!-- 404 Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="bi bi-exclamation-triangle display-1 text-secondary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to
                        our home page or try to use a search?</p>
                    <a class="btn btn-secondary py-3 px-5" href={Route}>Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
    @include('master.footer')
</body>

</html>