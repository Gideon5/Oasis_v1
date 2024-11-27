@extends('layouts.app')

@section('content')

<!-- component -->
<!-- component -->
<div class="flex justify-center items-center min-h-screen">
    <div class="max-w-[720px] mx-auto">
        <a href="{{ url()->previous() }}">
            go back
        </a>
        <!-- Centering wrapper -->
        <div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="p-6">
                <div class="mb-4 flex items-center justify-between">
                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                       Tickets
                    </h5>
                    <a href="#" class="block font-sans text-sm font-bold leading-normal text-blue-500 antialiased">
                       Print receipt
                    </a>
                </div>
                <div class="divide-y divide-gray-200">
                    @foreach ($tickets as $ticket)
                    <div class="flex items-center justify-between pb-3 pt-3 last:pb-0">
                        <div class="flex items-center gap-x-3">
                            <img
                                src="{{ asset('storage/'. $ticket->image) }}"
                                alt="event-name"
                                class="relative inline-block h-9 w-9 rounded-full object-cover object-center"
                            />
                            <div>
                                <h6 class="block font-sans text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 antialiased">
                                    {{ $ticket->type }}
                                </h6>
                                <p class="block font-sans text-sm font-light leading-normal text-gray-700 antialiased">
                                   {{$ticket->name}}
                                </p>
                            </div>
                        </div>
                        <h6 class="block font-sans text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 antialiased">
                           {{$ticket->price}} X {{ $ticket->quantity }}
                        </h6>
                    </div>

                    @endforeach
                  
                   
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
