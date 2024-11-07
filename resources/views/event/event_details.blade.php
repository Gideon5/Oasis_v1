@extends('layouts.app')

@section('content')
    <section>
        <div class="relative w-full  mt-20">
            <img class="h-64 w-full object-cover rounded-md"
                src="https://images.unsplash.com/photo-1680725779155-456faadefa26" alt="Random image">
            <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <h2 class="text-white text-3xl font-bold">Get Lost in Mountains</h2>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-gray-100">
            <div class="container mx-auto px-4 py-8">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
                        <img class="w-full rounded-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1524368535928-5b5e00ddc76b" alt="Concert Image">
                    </div>
                    <div class="w-full lg:w-1/3 px-4">
                        <h1 class="text-4xl font-bold mb-4">{{ $event->name }}</h1>
                        <p class="text-lg mb-6">{{ $event->description }}</p>
                        <div class="mb-6">
                            <p class="text-xl font-bold mb-2">When:</p>
                            <p class="text-lg">{{ $event->date }}</p>
                            <p class="text-lg">{{ $event->formatted_date }} at {{ $event->formatted_start_time }}</p>


                        </div>
                        <div class="mb-6">
                            <p class="text-xl font-bold mb-2">Where:</p>
                            <p class="text-lg">{{ $event->location }}</p>
                            <p class="text-lg">1805 Geary Blvd, San Francisco, CA</p>
                        </div>
                        <div class="mb-6">
                            <p class="text-xl font-bold mb-2">Tickets:</p>
                            @if ($event->tickets->isEmpty())
                                <p class="text-lg">Tickets coming out soon</p>
                            @else
                                @foreach ($event->tickets as $ticket)
                                    <p class="text-lg">${{ $ticket->price }} - {{ $ticket->type }}</p>
                                    {{-- <p class="text-lg">$75 - VIP</p>
                        <p class="text-lg">$75 - General Admission</p> --}}
                                @endforeach
                            @endif


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($event->tickets->isNotEmpty())
        <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Tickets</h2>
                <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                    <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                        <div class="space-y-6">


                            <form id="ticket-form" action="{{ route('checkout') }}" method="POST">
                                @csrf
                                @foreach ($event->tickets as $ticket)
                                    <div class="ticket-item rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6"
                                        data-ticket-id="{{ $ticket->id }}" data-ticket-price="{{ $ticket->price }}">
                                        <div
                                            class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                            <div class="ticket-details">
                                                <p class="text-base font-medium text-gray-900 dark:text-white">
                                                    {{ $ticket->type }}</p>
                                                <p class="ticket-price text-base font-bold text-gray-900 dark:text-white">
                                                    ${{ $ticket->price }}</p>
                                            </div>

                                            <label for="counter-input-{{ $ticket->id }}" class="sr-only">Choose
                                                quantity:</label>
                                            <div class="flex items-center justify-between md:justify-end">
                                                <div class="flex items-center">
                                                    <button type="button" id="decrement-button-{{ $ticket->id }}"
                                                        onclick="decreaseQuantity({{ $ticket->id }})"
                                                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 18 2">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                        </svg>
                                                    </button>
                                                    <input type="text" id="counter-input-{{ $ticket->id }}"
                                                        name="tickets[{{ $ticket->id }}][quantity]" data-input-counter
                                                        class="ticket-quantity w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white"
                                                        placeholder="" value="0" required />
                                                    <input type="hidden" name="tickets[{{ $ticket->id }}][price]"
                                                        value="{{ $ticket->price }}">
                                                    <input type="hidden" name="tickets[{{ $ticket->id }}][type]"
                                                        value="{{ $ticket->type }}">
                                                    <input type="hidden" name="tickets[{{ $ticket->id }}][event_id]"
                                                        value="{{ $event->id }}">
                                                    <input type="hidden" name="tickets[{{ $ticket->id }}][ticket_id]"
                                                        value="{{ $ticket->id }}">
                                                    <button type="button" id="increment-button-{{ $ticket->id }}"
                                                        onclick="increaseQuantity({{ $ticket->id }})"
                                                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 18 18">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M9 1v16M1 9h16" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </div>

                    <!-- Order Summary Section -->
                    <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                        <div
                            class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                            <p class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</p>

                            <div id="order-summary" class="space-y-4">
                                <!-- Ticket items summary will be inserted here -->
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd id="order-total" class="text-base font-bold text-gray-900 dark:text-white">$0.00</dd>
                            </dl>
                        </div>

                        <div id="checkout-button-container" class="hidden mt-6">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button">
                                Buy Tickets
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endif


    <script>
        function updateOrderSummary() {
            let total = 0;
            let orderSummary = document.getElementById('order-summary');
            let checkoutButtonContainer = document.getElementById('checkout-button-container');
            let hasTickets = false;

            orderSummary.innerHTML = '';

            document.querySelectorAll('.ticket-item').forEach(item => {
                let ticketId = item.getAttribute('data-ticket-id');
                let ticketPrice = parseFloat(item.getAttribute('data-ticket-price'));
                let ticketQuantity = parseInt(document.getElementById('counter-input-' + ticketId).value) || 0;
                let ticketTotal = ticketPrice * ticketQuantity;

                if (ticketQuantity > 0) {
                    hasTickets = true;
                    let ticketSummary = `
                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500 dark:text-gray-400">${item.querySelector('.ticket-details p').innerText} x${ticketQuantity}</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-white">$${ticketTotal.toFixed(2)}</dd>
                        </dl>
                    `;
                    orderSummary.insertAdjacentHTML('beforeend', ticketSummary);
                    total += ticketTotal;
                }
            });

            document.getElementById('order-total').innerText = `$${total.toFixed(2)}`;

            if (hasTickets) {
                checkoutButtonContainer.classList.remove('hidden');
            } else {
                checkoutButtonContainer.classList.add('hidden');
            }
        }

        function increaseQuantity(ticketId) {
            let inputElement = document.getElementById('counter-input-' + ticketId);
            let quantity = parseInt(inputElement.value) || 0;
            quantity += 1;
            inputElement.value = quantity;
            updateOrderSummary();
        }

        function decreaseQuantity(ticketId) {
            let inputElement = document.getElementById('counter-input-' + ticketId);
            let quantity = parseInt(inputElement.value) || 0;
            if (quantity > 0) {
                quantity -= 1;
                inputElement.value = quantity;
                updateOrderSummary();
            }
        }

        // Initial update
        updateOrderSummary();
    </script>
@endsection
