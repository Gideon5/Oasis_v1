<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Oasis</title>

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
    @livewireStyles
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top">
        <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

        
            <!-- Image Logo -->
            <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
                href="{{ route('homepage') }}">
                Oasis Logo
            </a>

            <button
                class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400"
                type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center"
                id="navbarsExampleDefault">
                <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                    <li>
                        <a class="nav-link page-scroll active" href="{{ route('homepage') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="" class="nav-link page-scroll" href="#features">Events</a>
                    </li>

                    @if (!Auth::user())
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Sign In</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item page-scroll" href="{{ route('login') }}">Login</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="{{ route('register') }}">Register</a>
                            </div>
                        </li>
                    @else
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle relative inline-flex items-center justify-center w-12 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600"
                                href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{ getInitials(Auth::user()->name) }}</a>

                            <form method="POST" action="{{ route('logout') }}" id="logout-form"
                                style="display: none;">
                                @csrf
                            </form>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a href="{{ route('logout') }}" class="dropdown-item page-scroll"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <div class="dropdown-divider"></div>

                            </div>
                        </li>
                    @endif


                    @php
                        function getInitials($name)
                        {
                            $nameParts = explode(' ', $name);
                            $initials = '';

                            foreach ($nameParts as $part) {
                                $initials .= strtoupper($part[0]);
                            }

                            return $initials;
                        }
                    @endphp



                    {{-- <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">About Us</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="article.html">Our Goal</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                        </div>
                    </li> --}}
                    
                    @if (Auth::user())
                    <li>
                        <a href="{{ route('dashboard.user') }}" class="nav-link page-scroll" href="#features">Dashboard</a>
                    </li>
                    @endif
                    

                    {{-- <li>
                        <!-- component -->
                        <div class="relative py-2">
                            <div class="t-0 absolute left-3">
                                <p
                                    class="flex h-1 w-1 items-center justify-center rounded-full bg-red-500 p-3 text-xs text-white">
                                    3</p>
                            </div>
                            <a href="{{ route('cartpage') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="file: mt-4 h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </a>
                        </div>
                    </li> --}}
                    {{-- <li>
                            <a class="nav-link page-scroll" href="#download">Download</a>
                        </li> --}}
                </ul>
                {{-- <span class="block lg:ml-3.5">
                        <a class="no-underline" href="#your-link">
                            <i class="fab fa-apple text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200 mr-1.5"></i>
                        </a>
                        <a class="no-underline" href="#your-link">
                            <i class="fab fa-android text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200"></i>
                        </a>
                    </span> --}}
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
