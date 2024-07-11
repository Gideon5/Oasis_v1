<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
    <meta name="author" content="Your name" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Pavo Webpage Title</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body data-spy="scroll" data-target=".fixed-top">

    

@yield('content')


<!-- Footer -->
<div class="footer">
    <div class="container px-4 sm:px-8">
        <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">
            This e-ticketing website lets you buy tickets for events online. Contact us at
            <a class="text-indigo-600 hover:text-gray-500" href="mailto:support@abaaneg@gmail.com">support@mba_ticks.com</a>
        </h4>
        <div class="social-container">
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-youtube fa-stack-1x"></i>
                </a>
            </span>
        </div> <!-- end of social-container -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
        <ul class="mb-4 list-unstyled p-small">
            <li class="mb-2"><a href="terms.html">Terms & Conditions</a></li>
            <li class="mb-2"><a href="privacy.html">Privacy Policy</a></li>
        </ul>
        <p class="pb-2 p-small statement">Copyright © <a href="#your-link" class="no-underline">c_note</a></p>

        <p class="pb-2 p-small statement">Distributed by :<a href="" class="no-underline">Elgrande Marketing</a>
        </p>
    </div>

    <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->

@yield('scripts')
<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script> <!-- jQuery for JavaScript plugins -->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{ asset('js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{ asset('js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>

</html>
