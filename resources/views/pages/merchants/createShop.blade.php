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
    <div class="">
        <input
            type="text"
            name="shop_name"
            class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
            placeholder="Shop Name">
        </input>
    </div>
    <div class="flex">
        <input
            type="text"
            name="user_name"
            class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
            placeholder="User Name"
        >
       <span class="px-4 py-3 mt-4 w-1/3 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">.digitalcart.com</span>
    </div>
      <button
          type="#"
          class="mt-4 px-4 py-3  leading-6 text-base rounded-md border border-transparent text-white bg-blue-500  hover:text-white focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer inline-flex w-full justify-center items-center font-medium focus:outline-none"
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
