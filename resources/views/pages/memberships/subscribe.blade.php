@extends('layouts.main')

@section('content')
        <div class="flex justify-center items-center 2xl:container 2xl:mx-auto lg:py-16 md:py-12 py-9 px-4 md:px-6 lg:px-20 xl:px-44">
            <div class="flex w-full sm:w-9/12 lg:w-full flex-col lg:flex-row justify-center items-center lg:space-x-10 2xl:space-x-36 space-y-12 lg:space-y-0">
                <div class="flex w-full flex-col justify-start items-start">
                    <div class="">
                        <p class="text-3xl lg:text-4xl dark:text-white font-semibold leading-7 lg:leading-9 text-gray-800">Check out</p>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="text-base dark:text-gray-400 leading-4 underline hover:text-gray-800 text-gray-600">Back to my bag</a>
                    </div>
                    <div class="mt-12">
                        <p class="text-xl font-semibold dark:text-white leading-5 text-gray-800">Shipping Details</p>
                    </div>
                    <form id="subscription-form" action="{{ route('subscribe.store') }}" method="POST" class="mt-8 flex flex-col justify-start items-start w-full space-y-8">
                        @csrf

                        {{-- Hidden Inputs --}}
                        {{-- Plan --}}
                        <input type="hidden" name="plan" id="plan" value="{{ request('plan') }}">
                        {{-- Payment Method --}}
                        <input type="hidden" name="payment-method" id="payment-method">
                        {{-- End of Hidden Inputs --}}

                    {{-- Name --}}
                    <div class="w-full">
                        <x-forms.label for="name" value="{{ __('Name') }}"/>
                        <x-forms.input id="name" name="name" :value="auth()->user()->getName() ?? old('name')" autocomplete="name"/>
                    </div>
                    {{-- Email --}}
                    <div class="w-full">
                        <x-forms.label for="email" value="{{ __('Email') }}"/>
                        <x-forms.input id="email" name="email" :value="auth()->user()->getEmail() ?? old('email')" disabled/>
                      </div>
                    {{-- Address Line 1 --}}
                      <div class="w-full">
                        <x-forms.label for="line1" value="{{ __('street, PO Box, or company name') }}"/>
                        <x-forms.input id="line1" name="line1" :value="auth()->user()->getLineOne() ?? old('line1')"/>
                      </div>
                    {{-- Address Line 2 --}}
                    <div class="w-full">
                        <x-forms.label for="line2" value="{{ __('apartment, suite, unit, or building') }}"/>
                        <x-forms.input id="line2" name="line2" :value="auth()->user()->getLineTwo() ?? old('line2')"/>
                    </div>
                    {{-- Postal Code --}}
                      <div class="w-full">
                        <x-forms.label for="postal_code" value="{{ __('ZIP or postal code') }}"/>
                        <x-forms.input id="postal_code" name="postal_code" :value="auth()->user()->getPostalCode() ?? old('postal_code')"/>
                    </div>
                    {{-- City --}}
                    <div class="w-full">
                        <x-forms.label for="city" value="{{ __('city') }}"/>
                        <x-forms.input id="city" name="city" :value="auth()->user()->getCity() ?? old('city')"/>
                          </div>
                    {{-- State --}}
                    <div class="w-full">
                        <x-forms.label for="state" value="{{ __('state') }}"/>
                        <x-forms.input id="state" name="state" :value="auth()->user()->getState() ?? old('state')"/>
                    </div>
                    {{-- Country --}}
                    <div class="w-full">
                        <x-forms.label for="country" value="{{ __('country') }}"/>
                        <x-forms.input id="country" name="country" :value="auth()->user()->getCountry() ?? old('country')"/>
                    </div>
                    {{-- Name on card --}}
                    <div class="w-full">
                        <x-forms.label for="card_name" value="{{ __('Name on card') }}"/>
                        <x-forms.input id="card_holder_name" type="text" name="card_name" :value="old('card_name')" autocomplete="card_name"/>
                    </div>
                    {{-- Card information --}}
                    <div class="w-full">
                        <x-forms.label for="card_no" value="{{ __('Card information') }}"/>
                        <div id="card-element" class="p-2 focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500 border-b border-gray-200 leading-4 text-base placeholder-gray-600 py-4"></div>
                    </div>

                        <div id="card-errors" class="text-red-500 font-semibold"></div>

                        {{-- <button id="card-button" data-secret="{{ $intent->client_secret }}" type="submit" class="focus:outline-none dark:bg-gray-800 dark:text-white focus:ring-gray-500 focus:ring-offset-2 mt-8 text-base font-medium focus:ring-2 focus:ring-ocus:ring-gray-800 leading-4 hover:bg-black py-4 w-full md:w-4/12 lg:w-full text-white bg-gray-800">Proceed to payment</button> --}}
                        <button id="card-button" data-secret="{{ $intent->client_secret }}" type="submit" class="btn btn-wide">Proceed to payment</button>
                    </form>
                    <div class="mt-4 flex justify-start items-center w-full">
                        <a href="#" class="text-base leading-4 dark:text-gray-400 hover:underline focus:outline-none focus:text-gray-500 hover:text-gray-800 text-gray-600">Back to my bag</a>
                    </div>
                </div>

                <div class="flex flex-col justify-start items-start bg-gray-50 dark:bg-gray-800 w-full p-6 md:p-14">
                    <div>
                        <h1 class="text-2xl  dark:text-white font-semibold leading-6 text-gray-800">Order Summary</h1>
                    </div>
                    <div class="flex mt-7 flex-col items-end w-full space-y-6">
                        <div class="flex justify-between w-full items-center">
                            <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Total items</p>
                            <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">20</p>
                        </div>
                        <div class="flex justify-between w-full items-center">
                            <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Total Charges</p>
                            <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">$2790</p>
                        </div>
                        <div class="flex justify-between w-full items-center">
                            <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Shipping charges</p>
                            <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">$90</p>
                        </div>
                        <div class="flex justify-between w-full items-center">
                            <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Sub total</p>
                            <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">$3520</p>
                        </div>
                    </div>
                    <div class="flex justify-between w-full items-center mt-32">
                        <p class="text-xl dark:text-white font-semibold leading-4 text-gray-800">Estimated Total</p>
                        <p class="text-lg dark:text-white font-semibold leading-4 text-gray-800">$2900</p>
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            const stripe = Stripe('{{ env("STRIPE_KEY") }}');

            const elements = stripe.elements();
            const cardElement = elements.create('card');
            const cardHolderName = document.getElementById('card_holder_name');
            const cardButton = document.getElementById('card-button');

            const clientSecret = cardButton.dataset.secret;

            cardElement.mount('#card-element');

            cardElement.addEventListener('change', function(event){
                const displayError = document.getElementById('card-errors');
                if(event.error){
                    displayError.textContent = event.error.message;
                } else{
                    displayError.textContent = '';
                }
            });

            //Handle form submission
            const subscriptionForm = document.getElementById('subscription-form');

            subscriptionForm.addEventListener('submit', function (event){
                event.preventDefault();
                stripe
                .handleCardSetup(clientSecret, cardElement, {
                    payment_method_data: {
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                })
                .then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        const paymentMethodInput = document.getElementById('payment-method');
                        paymentMethodInput.value = result.setupIntent.payment_method;
                        subscriptionForm.submit();
                    }
                });
            });
        </script>
        @endpush
@endsection
