@extends('layouts.empty')

@section('content')
    <div class="">
        <form id="paymentForm">
            <p>VIP</p>
            <p>Price 1500 GHS</p>
            <button type="submit"
                class="bg-gray-300 hover:bg-gray-400 mt-8 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                Pay
            </button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener("submit", payWithPaystack, false);

        function payWithPaystack(e) {
            e.preventDefault();

            let handler = PaystackPop.setup({
                key: '{{ env('PAYSTACK_PUBLIC_KEY') }}', // Replace with your public key
                email: "abaaneg@gmail.com",
                amount: 1500 * 100, // Amount in kobo (GHS * 100)
                currency: 'GHS', // Specify the currency
                metadata: {
                    custom_fields: [
                        {
                            display_name: 'VIP',
                            variable_name: 'ticket_type',
                            value: 'VIP'
                        }
                    ]
                },
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    // let message = 'Payment complete! Reference: ' + response.reference;
                    // alert(JSON.stringify(response));

                    window.location.href = "{{ route('callback') }}" + '?reference=' + response.reference;
                    
                    // alert(message);
                }
            });

            handler.openIframe();
        }
    </script>
@endsection
