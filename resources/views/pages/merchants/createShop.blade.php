@extends('layouts.main')

@section('content')

<!-- <div class="container mx-auto p-4 bg-white">
  <div class="w-full md:w-1/2 lg:w-1/3 mx-auto my-12">
    <h1 class="text-lg font-bold">Register Your Shop</h1>
    <form class="flex flex-col mt-4">
        @csrf
        {{-- First Name --}}
        <div class="">
             <input
                type="text"
                name="first_name"
                class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
                placeholder="First Name"
                required="required"
            />
        </div>
        {{-- End First Name --}}
        {{-- Last Name --}}
   <div class="">
       <input
          type="text"
          name="last_name"
          class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
          placeholder="Last Name"
          required="required"
      />
    </div>
    {{-- End Last Name --}}
{{-- Upload Profile Picture --}}
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload file</label>
<input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
<div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Your profile picture</div>
{{-- End Upload Profile Picture --}}

{{-- Shop name --}}
    <div class="flex">
        <input
            type="text"
            name="shop_name"
            class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
            placeholder="The name of your shop"
            required="required"
        >
       <span class="px-4 py-3 mt-4 w-1/3 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">.digitalcart.com</span>
    </div>
    {{-- End Shop Name --}}
    {{-- Bio --}}
<label for="message" class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your Bio</label>
<textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tell us about yourself or what you're selling"></textarea>
   {{-- End Bio --}}
   {{-- Select Country --}}
<div class="flex justify-center">
  <div class="mb-3 xl:w-full">
    <select name="country" id="country" required class="form-select appearance-none
      block
      w-full
      px-3
      mt-4
      py-1.5
      text-base
      font-normal
      text-gray-400
      bg-gray-100 bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
        <option selected disabled value="">Country</option>
        <option value="USA">USA</option>
        <option value="CANADA">Canada</option>
        <option value="UK">UK</option>
    </select>
  </div>
</div>
{{-- End Select Country --}}
{{-- Zip Code --}}
  <div class="">
       <input
          type="text"
          name="zip_code"
          class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
          placeholder="Zip Code"
          required="required"
      />
    </div>
    {{-- End Zip Code --}}
        {{-- Register Button --}}
    <button
          type="#"
          class="mt-4 px-4 py-3  leading-6 text-base rounded-md border border-transparent text-white bg-gray-900 hover:text-white focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 cursor-pointer inline-flex w-full justify-center items-center font-medium focus:outline-none"
      >
        Register
      </button>
      {{-- End Register Button --}}
      <div class="flex flex-col items-center mt-5">
        <p class="mt-1 text-xs font-light text-gray-500">
          Want to set up shop later?<a class="ml-1 font-medium text-blue-400">Skip for now</a>
          </p>
      </div>
    </form>
  </div>
</div> -->
<div class="flex justify-center items-center 2xl:container 2xl:mx-auto lg:py-16 md:py-12 py-9 px-4 md:px-6 lg:px-20 xl:px-44">
  <div class="flex w-full sm:w-9/12 lg:w-full flex-col lg:flex-row justify-center items-center lg:space-x-10 2xl:space-x-36 space-y-12 lg:space-y-0">
    <div class="flex w-full flex-col justify-start items-start">
      <div class="">
        <p class="text-3xl lg:text-4xl dark:text-white font-semibold leading-7 lg:leading-9 text-gray-800">Set Up Your New Shop!</p>
      </div>
      <div class="mt-2">
        <a href="#" class="text-base dark:text-gray-400 leading-4 underline hover:text-gray-800 text-gray-600">Skip for now</a>
      </div>
      <div class="mt-12">
        <p class="text-xl font-semibold dark:text-white leading-5 text-gray-800">Your Details</p>
      </div>
      <form id="subscription-form" action="{{ route('subscribe.store') }}" method="POST" class="mt-8 flex flex-col justify-start items-start w-full space-y-8">
        @csrf

        {{-- First Name --}}
        <div class="w-full">
          <x-forms.label for="first_name" value="{{ __('First Name') }}" />
          <x-forms.input id="first_name" name="first_name" :value="auth()->user()->getName() ?? old('name')" autocomplete="given-name" required="required" />
        </div>
        {{-- Last Name --}}
        <div class="w-full">
          <x-forms.label for="last_name" value="{{ __('Last Name') }}" />
          <x-forms.input id="last_name" name="last_name" autocomplete="family-name" required="required" />
        </div>
        {{-- Shop Name --}}
        <x-forms.label for="shop_name" value="{{ __('Shop Name') }}" />
        <div class="w-full flex">
          <x-forms.input id="shop_name" name="shop_name" autocomplete="off" placeholder="Shop Name" required="required" />
          <span class="px-4 py-3 mt-4 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">.digitalcart.com</span>
        </div>
        {{-- Select Your Country --}}
        <select required class="select select-bordered w-full max-w-xs">
          <option selected disabled value="">Country</option>
          <option>USA</option>
          <option>CANADA</option>
        </select>
        {{-- Postal Code --}}
        <div class="w-full">
          <x-forms.label for="postal_code" value="{{ __('ZIP or postal code') }}" />
          <x-forms.input id="postal_code" name="postal_code" :value="auth()->user()->getPostalCode() ?? old('postal_code')" required="required" />
        </div>
        {{-- Bio / Information About Your Store --}}

        <textarea class="textarea textarea-bordered w-full" placeholder="Tell us about you and what you are selling." required="required"></textarea>




        <div id="card-errors" class="text-red-500 font-semibold"></div>

        {{-- <button id="card-button" data-secret="#" type="submit" class="focus:outline-none dark:bg-gray-800 dark:text-white focus:ring-gray-500 focus:ring-offset-2 mt-8 text-base font-medium focus:ring-2 focus:ring-ocus:ring-gray-800 leading-4 hover:bg-black py-4 w-full md:w-4/12 lg:w-full text-white bg-gray-800">Proceed to payment</button> --}}
        <button id="card-button" data-secret="#" type="submit" class="btn btn-wide">Create shop</button>
      </form>
    </div>

  </div>
</div>
@endsection