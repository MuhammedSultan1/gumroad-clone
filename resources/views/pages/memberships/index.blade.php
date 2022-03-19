@extends('layouts.main')

@section('content')
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-400">
        Our Pricing
      </p>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="7e5e8ff8-1960-4094-a63a-2a0c0f922d69" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#7e5e8ff8-1960-4094-a63a-2a0c0f922d69)" width="52" height="24"></rect>
        </svg>
        <span class="relative">Transparent</span>
      </span>
      pricing. Pay as you grow.
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
        At DigitalCart, we tailor our prices according to the needs of your business.
    </p>
  </div>
  <div class="grid max-w-md gap-10 row-gap-5 lg:max-w-screen-lg sm:row-gap-10 lg:grid-cols-3 xl:max-w-screen-lg sm:mx-auto">
    @foreach ($memberships as $membership)
    <div>
        <div class="p-8 bg-gray-900 rounded">
          <div class="mb-4 text-center">
            <p class="text-xl font-medium tracking-wide text-teal-400">
                {{ $membership->getName() }}
            </p>
            <div class="flex items-center justify-center">
              <p class="mr-2 text-5xl font-semibold text-white lg:text-6xl">
                ${{ $membership->getPrice() }}
              </p>
              <p class="text-lg text-gray-500">/ month</p>
            </div>
          </div>
          <ul class="mb-8 space-y-2">

            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-300"> {{ $membership->getBenefitOne() }}</p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-300"> {{ $membership->getBenefitTwo() }}</p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-300"> {{ $membership->getBenefitThree() }}</p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-300"> {{ $membership->getBenefitFour() }}</p>
            </li>

          </ul>
             <a href="#"
            class="bg-teal-500 inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md hover:bg-teal-600 focus:shadow-outline focus:outline-none"
          >
            Get Now
            </a>
        </div>
        <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
        <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
        <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
      </div>
    @endforeach

  </div>
</div>
@endsection
