@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 font-sans flex flex-col mt-10 h-screen">
        <div x-data="{ openTab: 1 }" class="flex-1 flex flex-col overflow-y-auto">
            <div class="flex justify-center space-x-4 p-4 bg-white shadow-md">
                <button x-on:click="openTab = 1" :class="{ 'bg-blue-600 text-white': openTab === 1 }"
                    class="py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Favorites</button>
                <button x-on:click="openTab = 2" :class="{ 'bg-blue-600 text-white': openTab === 2 }"
                    class="py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Invoices</button>
                <button x-on:click="openTab = 3" :class="{ 'bg-blue-600 text-white': openTab === 3 }"
                    class="py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Others</button>
            </div>

            <div class="flex-1 overflow-y-auto">
                <div x-show="openTab === 1"
                    class="flex items-center justify-center transition-all duration-300 bg-white p-4 shadow-md border-l-4 border-blue-600">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                        <!-- Replace this with your grid items -->
                        
                        @if (!empty($favorites) && count($favorites) > 0)
                       
                            @foreach ($favorites as $favorite)
                            
                                <div
                                    class="bg-white shadow-[0_2px_18px_-6px_rgba(0,0,0,0.2)] w-full max-w-sm rounded-lg overflow-hidden mx-auto font-[sans-serif]">
                                    <div class="w-full h-48 overflow-hidden">
                                        <img src="{{ asset('storage/' . $favorite->event->image) }}"
                                            class="w-full h-full object-cover" alt="Event Image" />
                                    </div>
                                    <div class="px-4 py-6"> 
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-[#333] text-xl font-bold">{{ $favorite->event->name }}</h3>
                                            @livewire('fav-button', ['event_id' => $favorite->event->id, 'is_favorite' => $favorite->is_favorite])
                                        </div>
                                        <p class="mt-4 text-sm text-gray-500">{{ $favorite->event->location }}</p>
                                        <p class="mt-4 text-sm text-gray-500">{{ $favorite->event->date }}</p>
                                        <a href="{{ route('event_Details', $favorite->event->slug) }}">
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
                                    No favorites here..</h1>
                            </div>
                        @endif

                    </div>
                </div>

                <div x-show="openTab === 2"
                    class="flex items-center justify-center transition-all duration-300 bg-white p-4 shadow-md border-l-4 border-blue-600">
                    <div class="grid grid-cols-3 gap-8 hover:grid-cols-6">
                        @foreach ($transactions as $transaction)
                        {{-- link to page --}}
                        <a href="{{ route('tickets', ['id' => $transaction->invoice_id]) }}">
                            <div class="max-w-4xl border rounded-md border-blue-400 hover:bg-blue-300">
                                <h2 class="text-2xl font-semibold mb-2 text-blue-600">Transaction Id: {{ $transaction->invoice_id }}
                                <h2 class="text-2xl font-semibold mb-2 text-blue-600">
                                   Amt: ${{ $transaction->total_amount }}</h2>
                                </h2>
                                <h2 class="text-2xl font-semibold mb-2 text-blue-600">Transaction date: {{ $transaction->paid_at }}</h2>
                                <p class="text-gray-700">m...t.</p>
                            </div>
                            <hr class="h-4" />

                        </a>
                        @endforeach


                    </div>
                </div>

                <div x-show="openTab === 3"
                    class="flex items-center justify-center transition-all duration-300 bg-white p-4 shadow-md border-l-4 border-blue-600">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="text-2xl font-semibold mb-2 text-blue-600">TBD</h2>
                        <p class="text-gray-700">Fusce hendrerit urna vel tortor luctus, nec tristique odio tincidunt.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
@endsection
