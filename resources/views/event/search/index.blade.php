@extends('layouts.app')

@section('content')
    <header id="header" class="header py-8 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="px-4 sm:px-8 lg:gap-x-8">
            <section class="">
                <form action="{{ route('event.search') }}">

                    <div class='flex items-center justify-center py-10 bg-blue-600'>
                        <div class="flex w-full mx-10 rounded bg-white">
                            <input
                                class=" w-full border-none bg-transparent px-4 py-1 text-gray-400 outline-none focus:outline-none"
                                name="search" type="search" value="{{ $searchTerm }}" placeholder="Search event" />
                            <button type="submit" class="m-2 rounded bg-blue-600 px-4 py-2 text-white">
                                <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                    xml:space="preserve" width="512px" height="512px">
                                    <path
                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>

            </section>
        </div>
        </div>
    </header>



    <section class="pb-0"> <!-- Added padding-bottom: 0 -->
        <div class="bg-gradient-to-bl from-blue-50 to-violet-50">
            <div class="container mx-auto p-4">
                @if (!empty($searchResults) && count($searchResults) > 0)
                    <h1 class="mr-14 text-4xl mt-10 flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
                        Search results for {{ $searchTerm }}
                    </h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                        @foreach ($searchResults as $event)
                            <div class="bg-white shadow-[0_2px_18px_-6px_rgba(0,0,0,0.2)] w-full max-w-sm rounded-lg overflow-hidden mx-auto font-[sans-serif]">
                                <div class="w-full h-36 overflow-hidden">
                                    <img src="{{ asset('storage/' . $event->image) }}" class="w-full h-full object-cover" alt="null" />
                                </div>
                                <div class="px-4 py-6">
                                    <h3 class="text-[#333] text-xl font-bold">{{ $event->name }}</h3>
                                    <p class="mt-4 text-sm text-gray-500">{{ $event->location }}</p>
                                    <p class="mt-4 text-sm text-gray-500">{{ $event->date }}</p>
                                    <a href="{{ route('event_details', $event->slug) }}">
                                        <button type="button" class="px-6 py-2.5 mt-6 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                            View
                                        </button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>
                            <h1 class="mr-14 mt-10 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
                                No Event found for {{ $searchTerm }}
                            </h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    

  <section class="pb-0"> <!-- Added padding-bottom: 0 -->
    <h1 class="mr-14 text-4xl mt-10 flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
        YOU MAY LIKE THESE UPCOMING EVENTS
    </h1>
    <div class="bg-gradient-to-bl from-blue-50 to-violet-50">
        <div class="container mx-auto p-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                @if (!empty($events) && count($events) > 0)
                    @foreach ($events as $event)
                        <div class="bg-white shadow-[0_2px_18px_-6px_rgba(0,0,0,0.2)] w-full max-w-sm rounded-lg overflow-hidden mx-auto font-[sans-serif]">
                            <div class="w-full h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $event->image) }}" class="w-full h-full object-cover" alt="null" />
                            </div>
                            <div class="px-4 py-6">
                                <h3 class="text-[#333] text-xl font-bold">{{ $event->name }}</h3>
                                <p class="mt-4 text-sm text-gray-500">{{ $event->location }}</p>
                                <p class="mt-4 text-sm text-gray-500">{{ $event->date }}</p>
                                <a href="{{ route('event_details', $event->slug) }}">
                                    <button type="button" class="px-6 py-2.5 mt-6 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                        View
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>
                        <h1 class="mr-14 text-4xl flex items-center justify-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">
                            COMING SOON...
                        </h1>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>


    

@endsection
