@extends('layouts.main')

@section('content')

<div class="container mx-auto p-4 bg-white">
  <div class="w-full md:w-1/2 lg:w-1/3 mx-auto my-12">
    <h1 class="text-lg font-bold">Register</h1>
    <form class="flex flex-col mt-4">
        @csrf
        <div class="">
             <input
                type="text"
                name="first_name"
                class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
                placeholder="First Name"
            />
        </div>
   <div class="">
       <input
          type="text"
          name="last_name"
          class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
          placeholder="Last Name"
      />
    </div>
    <div class="flex">
        <input
            type="text"
            name="shop_name"
            class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
            placeholder="Shop Name"
        >
       <span class="px-4 py-3 mt-4 w-1/3 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">.digitalcart.com</span>
    </div>
<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
<textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tell us about yourself or what you're selling"></textarea>
    <div class="flex justify-center">
  <div class="mb-3 xl:w-96">
    <select class="form-select appearance-none
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
        <option selected>Country</option>
        <option value="1">USA</option>
        <option value="2">Canada</option>
        <option value="3">UK</option>
    </select>
  </div>
</div>
  <div class="">
       <input
          type="text"
          name="zip_code"
          class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
          placeholder="Zip Code"
      />
    </div>
<button
          type="#"
          class="mt-4 px-4 py-3  leading-6 text-base rounded-md border border-transparent text-white bg-gray-900 hover:text-white focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 cursor-pointer inline-flex w-full justify-center items-center font-medium focus:outline-none"
      >
        Register
      </button>
      <div class="flex flex-col items-center mt-5">
        <p class="mt-1 text-xs font-light text-gray-500">
          Register already?<a class="ml-1 font-medium text-blue-400">Sign in now</a>
          </p>
      </div>
    </form>
  </div>
</div>
@endsection
