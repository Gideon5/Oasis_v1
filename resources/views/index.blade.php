@extends('layouts.app')

@section('content')
    <!-- Introduction -->
    <!-- Header -->
    <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                <h1 class="h1-large mb-5">Team management mobile application</h1>
                <p class="p-large mb-8">Start getting things done together with your team based on Pavo's revolutionary
                    team management features</p>
                <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
            </div>
            <div class="xl:text-right">
                <img class="inline" src="{{ asset('images/header-smartphone.png') }}" alt="alternative" />
            </div>
        </div>
    </header>



    <section>
        <h1
            class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
            ALL EVENTS(UPCOMING LATER)</h1>
        <div class="bg-gradient-to-bl from-blue-50 to-violet-50  lg:h-screen">

            <div class="container mx-auto p-4">
                <div class="flex items-end justify-end p-4"><a href="">.....See More</a></div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                    <!-- Replace this with your grid items -->

                    @if (!empty($events) && count($events) > 0)
                        @foreach ($events as $event)
                            <div
                                class="bg-white shadow-[0_2px_18px_-6px_rgba(0,0,0,0.2)] w-full max-w-sm rounded-lg overflow-hidden mx-auto font-[sans-serif]">
                                <div class="w-full h-48 overflow-hidden">
                                    <img src="{{ asset('storage/' . $event->image) }}" class="w-full h-full object-cover"
                                        alt="null" />
                                </div>
                                <div class="px-4 py-6">
                                    <h3 class="text-[#333] text-xl font-bold">{{ $event->name }}</h3>
                                    <p class="mt-4 text-sm text-gray-500">{{ $event->location }}</p>
                                    <p class="mt-4 text-sm text-gray-500">{{ $event->date }}</p>
                                    <a href="{{ route('event_Details', $event->slug) }}">
                                        <button type="button"
                                            class="px-6 py-2.5 mt-6 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                            View
                                        </button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>
                            <h1
                                class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
                                COMING SOON...</h1>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <section>
        <h1
            class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
            COMEDY</h1>

        <div class="bg-gradient-to-bl from-blue-50 to-violet-50  lg:h-screen">
            <div class="container mx-auto p-4">
                <div class="flex items-end justify-end p-4"><a href="{{ route('events.category', 'Comedy') }}">.....See More</a></div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                    <!-- Replace this with your grid items -->

                    @if(!empty($comedy_events) && count($comedy_events) > 0)

                        @foreach ($comedy_events as $event)
                            <div
                                class="bg-white shadow-[0_2px_18px_-6px_rgba(0,0,0,0.2)] w-full max-w-sm rounded-lg overflow-hidden mx-auto font-[sans-serif]">
                                <div class="w-full h-48 overflow-hidden">
                                    <img src="{{ asset('storage/' . $event->image) }}" class="w-full h-full object-cover"
                                        alt="null" />
                                </div>
                                <div class="px-4 py-6">
                                    <h3 class="text-[#333] text-xl font-bold">{{ $event->name }}</h3>
                                    <p class="mt-4 text-sm text-gray-500">{{ $event->location }}</p>
                                    <p class="mt-4 text-sm text-gray-500">{{ $event->date }}</p>
                                    <a href="{{ route('event_Details', $event->slug) }}">
                                        <button type="button"
                                            class="px-6 py-2.5 mt-6 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                            View
                                        </button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>
                            <h1
                                class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
                                COMING SOON...</h1>
                        </div>
                    @endif

                    <!-- Add more items as needed -->
                </div>
            </div>
        </div>
    </section>

    <section>
        <h1
            class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
            CONCERTS</h1>

        <div class="bg-gradient-to-bl from-blue-50 to-violet-50  lg:h-screen">
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                    <!-- Replace this with your grid items -->
                    @if (!empty($concerts) && count($concerts) > 0)
                        @foreach ($concerts as $concert)
                            <div
                                class="bg-white shadow-[0_2px_18px_-6px_rgba(0,0,0,0.2)] w-full max-w-sm rounded-lg overflow-hidden mx-auto font-[sans-serif]">
                                <div class="w-full h-48 overflow-hidden">
                                    <img src="{{ asset('storage/' . $concert->image) }}" class="w-full h-full object-cover"
                                        alt="null" />
                                </div>
                                <div class="px-4 py-6">
                                    <h3 class="text-[#333] text-xl font-bold">{{ $concert->name }}</h3>
                                    <p class="mt-4 text-sm text-gray-500">{{ $concert->location }}</p>
                                    <p class="mt-4 text-sm text-gray-500">{{ $concert->date }}</p>
                                    <a href="{{ route('event_Details', $concert->slug) }}">
                                        <button type="button"
                                            class="px-6 py-2.5 mt-6 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                            View
                                        </button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>
                            <h1
                                class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
                                COMING SOON...</h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section>
        <h1
            class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
            SPORTS</h1>

        <div class="bg-gradient-to-bl from-blue-50 to-violet-50  lg:h-screen">
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                    <!-- Replace this with your grid items -->

                    @if(!empty($sports) && count($sports) > 0)
                    @foreach ($sports as $sport)
                        <div
                            class="bg-white shadow-[0_2px_18px_-6px_rgba(0,0,0,0.2)] w-full max-w-sm rounded-lg overflow-hidden mx-auto font-[sans-serif]">
                            <div class="w-full h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $sport->image) }}" class="w-full h-full object-cover"
                                    alt="null" />
                            </div>
                            <div class="px-4 py-6">
                                <h3 class="text-[#333] text-xl font-bold">{{ $sport->name }}</h3>
                                <p class="mt-4 text-sm text-gray-500">{{ $sport->location }}</p>
                                <p class="mt-4 text-sm text-gray-500">{{ $sport->date }}</p>
                                <a href="{{ route('event_Details', $sport->slug) }}">
                                    <button type="button"
                                        class="px-6 py-2.5 mt-6 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                        View
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    @else
                    <div>
                        <h1
                        class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
                       COMING SOON...</h1>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1
            class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
            OTHERS TBD</h1>

        <div class="bg-gradient-to-bl from-blue-50 to-violet-50  lg:h-screen">
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                    <!-- Replace this with your grid items -->

                    @if(!empty($others) && count($others) > 0)
                    @foreach ($others as $other)
                        <div
                            class="bg-white shadow-[0_2px_18px_-6px_rgba(0,0,0,0.2)] w-full max-w-sm rounded-lg overflow-hidden mx-auto font-[sans-serif]">
                            <div class="w-full h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $other->image) }}" class="w-full h-full object-cover"
                                    alt="null" />
                            </div>
                            <div class="px-4 py-6">
                                <h3 class="text-[#333] text-xl font-bold">{{ $other->name }}</h3>
                                <p class="mt-4 text-sm text-gray-500">{{ $other->location }}</p>
                                <p class="mt-4 text-sm text-gray-500">{{ $other->date }}</p>
                                <a href="{{ route('event_Details', $other->slug) }}">
                                    <button type="button"
                                        class="px-6 py-2.5 mt-6 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                        View
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    @else
                    <div>
                        <h1
                        class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
                       COMING SOON...</h1>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </section>




    <!-- Statistics -->
    <div class="counter">
        <div class="container px-4 sm:px-8">

            <!-- Counter -->
            <div id="counter">
                <div class="cell">
                    <div class="counter-value number-count" data-count="231">1</div>
                    <p class="counter-info">Happy Users</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="385">1</div>
                    <p class="counter-info">Issues Solved</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="159">1</div>
                    <p class="counter-info">Good Reviews</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="127">1</div>
                    <p class="counter-info">Case Studies</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="211">1</div>
                    <p class="counter-info">Orders Received</p>
                </div>
            </div>
            <!-- end of counter -->

        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Testimonials -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">What do users think about Ticks</h2>

            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-1.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to integrate it
                                        properly into my business flow and it's great</p>
                                    <p class="testimonial-author">Jude Thorn - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-2.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We were so focused on launching as many campaigns as possible
                                        that we've forgotten to target our loyal customers</p>
                                    <p class="testimonial-author">Roy Smith - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-3.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love the
                                        reports it generates and the amazing high accuracy</p>
                                    <p class="testimonial-author">Marsha Singer - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-4.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We've been waiting for a powerful piece of software that can
                                        help businesses manage their marketing projects</p>
                                    <p class="testimonial-author">Tim Shaw - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-5.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">Searching for a great prototyping and layout design app was
                                        difficult but thankfully I found app suite quickly</p>
                                    <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-6.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">The app support team is amazing. They've helped me with some
                                        issues and I am so grateful to the entire team</p>
                                    <p class="testimonial-author">Ann Blake - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
            <!-- end of card slider -->

        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    {{-- <!-- Conclusion -->
    <div id="download" class="basic-5">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">
            <div class="mb-16 lg:mb-0">
                <img src="images/conclusion-smartphone.png" alt="alternative" />
            </div>
            <div class="lg:mt-24 xl:mt-44 xl:ml-12">
                <p class="mb-9 text-gray-800 text-3xl leading-10">Team management mobile applications don’t get much better
                    than Pavo. Download it today</p>
                <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 --> --}}
    <!-- end of conclusion -->
@endsection
