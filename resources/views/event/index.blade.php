@extends('layouts.app')

@section('content')

    <section class="mt-10">
        <h1
            class="text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
            {{ strtoupper($category) }} EVENTS
        </h1>

        <div class="bg-gradient-to-bl from-blue-50 to-violet-50  lg:h-screen">

            <div class="container mx-auto p-4">
                {{-- <div class="flex items-end justify-end p-4"><a href="">.....See More</a></div> --}}

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                    <!-- Replace this with your grid items -->

                    @if (count($events) > 0 && !empty($events))
                        @foreach ($events as $event)
                        @endforeach
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
                    @else
                        <div>
                            <h1
                                class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
                                {{ strtoupper($category) }} EVENTS COMING SOON...</h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
