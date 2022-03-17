@extends('templates.main')

@section('content')


        <div class="dark:bg-gray-900">
            <div class="flex flex-col lg:flex-row items-stretch justify-between lg:px-0 px-6 lg:py-20 py-8 2xl:mx-auto 2xl:container">
                <div class="z-30 relative lg:w-1/2">
                    <div class="hidden dark:bg-gray-800 bg-gray-100 w-full lg:w-10/12 lg:h-full lg:flex justify-end items-center">
                        <div class="w-full lg:w-auto lg:-mr-32">
                            <img src="https://images.unsplash.com/photo-1554774853-719586f82d77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="image with decent chairs" class="w-full relative z-30 lg:pl-20 px-6 py-14" />
                        </div>
                    </div>
                    <div class="absolute top-0 dark:bg-gray-800 bg-gray-100 md:h-96 w-full hidden md:block lg:hidden"></div>
                    <div class="w-full h-full lg:hidden">
                        <img src="https://images.unsplash.com/photo-1554774853-719586f82d77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="image with decent chairs" class="w-full relative z-30 lg:pl-20 md:px-6 py-5 md:py-14" />
                    </div>
                </div>
                <div class="bg-gray-100 dark:bg-gray-800 lg:w-1/2 lg:ml-12 lg:p-14 p-8 flex items-center">
                    <div>
                        <h1 class="dark:text-white md:w-8/12 lg:w-10/12 xl:8/12 2xl:w-8/12 w-full xl:text-6xl sm:text-5xl text-4xl font-semibold text-gray-800 capitalize">Modern Interior Decor</h1>
                        <p class="dark:text-gray-300 md:w-9/12 lg:w-11/12 xl:w-10/12 2xl:9/12 text-base leading-normal text-gray-600 mt-5">Get inspired by our curated selection of luxiwood interiors. We hope get inspired to have luxiwood interior yourself. You’ll find tips here where you can buy a lot of cool furniture,decorations, plants, etc.</p>
                        <button class="dark:bg-white dark:hover:bg-gray-400 dark:hover:text-gray-100 dark:text-gray-800 sm:w-auto w-full mt-8 text-base justify-between focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 focus:outline-none hover:bg-gray-700 font-medium leading-none text-white py-4 px-8 bg-gray-800 flex items-center">
                            Explore
                            <div class="ml-2 mt-0.5">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1.svg" alt="arrow">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1dark.svg" alt="arrow">
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
{{-- Content --}}
        <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="text-6xl font-medium title-font text-gray-900 mb-4">What is DigitalCart?</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">DigitalCart is the number one best place to set up your own store and sell products online to people around the world.</p>
      {{-- <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div> --}}
    </div>
    {{-- <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Shooting Stars</h2>
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <circle cx="6" cy="6" r="3"></circle>
            <circle cx="6" cy="18" r="3"></circle>
            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">The Catalyzer</h2>
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Neptune</h2>
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div> --}}
    {{-- <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button> --}}
  </div>
</section>
{{-- End Content --}}
{{-- Beginning of section: Sell almost anything! --}}
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Sell almost anything!</h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Books</h2>
          <p class="leading-relaxed text-base">Once you start selling books with DigitalCart, you won't have any more books to sell!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="3"></circle>
              <circle cx="6" cy="18" r="3"></circle>
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Furniture</h2>
          <p class="leading-relaxed text-base">You can sell your highest quality furniture here!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Clothing</h2>
          <p class="leading-relaxed text-base">Sell different types of clothes with DigitalCart!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
            </svg>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Sporting Goods</h2>
          <p class="leading-relaxed text-base">You can sell basketball gear, soccer gear, gym equipment and more!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Auto Parts</h2>
          <p class="leading-relaxed text-base">Sell the parts that people need for their vehicles!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Technology</h2>
          <p class="leading-relaxed text-base">Sell TV screens, laptops, cell phones and more!</p>
        </div>
      </div>
    </div>
    <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
  </div>
</section>
{{-- End of section: Sell almost anything! --}}
{{-- Beginning of section: Get started in 3 steps --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
        Brand new
      </p>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="bfcc89c7-3b4a-491a-bc7e-53e26502ff69" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#bfcc89c7-3b4a-491a-bc7e-53e26502ff69)" width="52" height="24"></rect>
        </svg>
        <span class="relative">The</span>
      </span>
      quick, brown fox jumps over a lazy dog
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
    </p>
  </div>
  <div class="grid gap-8 row-gap-8 lg:grid-cols-3">
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-24 h-24 mb-4 text-5xl font-extrabold rounded-full text-deep-purple-accent-400 bg-indigo-50 sm:mx-auto">
        1
      </div>
      <h6 class="mb-2 font-semibold leading-5">Slugging catcher</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down clap of thunder
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-24 h-24 mb-4 text-5xl font-extrabold rounded-full text-deep-purple-accent-400 bg-indigo-50 sm:mx-auto">
        2
      </div>
      <h6 class="mb-2 font-semibold leading-5">Do your best</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        They urge you to put down your sword and come join the winners. In 22 years the only 'winners'
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-24 h-24 mb-4 text-5xl font-extrabold rounded-full text-deep-purple-accent-400 bg-indigo-50 sm:mx-auto">
        3
      </div>
      <h6 class="mb-2 font-semibold leading-5">Be yourself</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        Tell them I hate them. Is the Space Pope reptilian!? Tell her she looks thin. Hello, little man
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
  </div>
</div>
{{-- End of section: Get started in 3 steps --}}
{{-- Beginning of section: View Analytics --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-10 lg:grid-cols-2">
    <div class="lg:pr-10">
      <a href="/" aria-label="Go Home" title="Logo" class="inline-block mb-5">
        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
          <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
      </a>
      <h5 class="mb-4 text-4xl font-extrabold leading-none">
            View analytics and<br class="hidden md:block" />
        <span class="inline-block text-deep-purple-accent-400">reports with our dashboard</span>
      </h5>
      <p class="mb-6 text-gray-900">
        Our dashboard shows you all of your sales. It also shows you the products which are purchased the most.
      </p>
      <hr class="mb-5 border-gray-300" />
      <div class="flex items-center space-x-4">
        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
            ></path>
          </svg>
        </a>
        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
            <circle cx="15" cy="15" r="4"></circle>
            <path
              d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
            ></path>
          </svg>
        </a>
        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
            ></path>
          </svg>
        </a>
        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-6">
            <path
              d="M23.8,7.2c0,0-0.2-1.7-1-2.4c-0.9-1-1.9-1-2.4-1C17,3.6,12,3.6,12,3.6h0c0,0-5,0-8.4,0.2 c-0.5,0.1-1.5,0.1-2.4,1c-0.7,0.7-1,2.4-1,2.4S0,9.1,0,11.1v1.8c0,1.9,0.2,3.9,0.2,3.9s0.2,1.7,1,2.4c0.9,1,2.1,0.9,2.6,1 c1.9,0.2,8.2,0.2,8.2,0.2s5,0,8.4-0.3c0.5-0.1,1.5-0.1,2.4-1c0.7-0.7,1-2.4,1-2.4s0.2-1.9,0.2-3.9v-1.8C24,9.1,23.8,7.2,23.8,7.2z M9.5,15.1l0-6.7l6.5,3.4L9.5,15.1z"
            ></path>
          </svg>
        </a>
      </div>
    </div>
    <div>
      <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="https://windmillui.com/img/Dashboard.png" alt="" />
    </div>
  </div>
</div>
{{-- End of section: View Analytics --}}
{{-- Beginning of section: See who uses DigitalCart! --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
    <h2 class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
      <span class="inline-block mb-1 sm:mb-4">
        See who uses DigitalCart!
      </span>
      <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
    </h2>
    <p class="text-gray-700 lg:text-sm lg:max-w-md">
      "Sed ut perspiciatis unde omnis iste natus error sit iste voluptatem accusantium doloremque rem aperiam, ipsa eaque quae. Sed ut perspiciatis unde omnis iste."
    </p>
  </div>
  <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
      <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80" alt="" />
        <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75">
          <p class="text-sm font-medium tracking-wide text-white">
            James Mcmillan sells books
          </p>
        </div>
      </div>

      <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="https://images.unsplash.com/photo-1646372647065-b858ac3213a4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3027&q=80" alt="" />
        <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75">
          <p class="text-sm font-medium tracking-wide text-white">
            Jeremy Howard sells furniture
          </p>
        </div>
      </div>

      <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="" />
        <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75">
          <p class="text-sm font-medium tracking-wide text-white">
            Kyle Winters sells shoes
          </p>
        </div>
      </div>

      <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="https://images.unsplash.com/photo-1531384441138-2736e62e0919?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="" />
        <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75">
          <p class="text-sm font-medium tracking-wide text-white">
            Philip Vance sells photography equipment
          </p>
        </div>
      </div>

  </div>
</div>
{{-- End of section: See who uses DigitalCart! --}}
{{-- Beginning of testimonials --}}
<section class="bg-purple-50">
  <div class="px-4 py-32 mx-auto max-w-7xl">
    <div class="grid items-center w-full grid-cols-1 gap-10 mx-auto lg:grid-cols-8 lg:gap-4 xl:w-3/4">
      <div class="w-40 h-40 col-span-1 lg:col-span-2">
        <img src="https://images.unsplash.com/photo-1564564244660-5d73c057f2d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2952&q=80" class="object-cover w-full h-full bg-center rounded-md shadow-xl" alt="Kutty" />
      </div>
      <div class="col-span-1 lg:col-span-6">
        <h1 class="mb-3 text-2xl font-extrabold text-purple-900 md:leading-tight md:text-4xl">
          “If a user sees <span class="text-red-600">an error</span>, we’re notified immediately. It’s silly not to use an error monitoring tool like this when running anything at scale.“
        </h1>
        <p class="mb-5 text-lg font-semibold text-purple-900 md:text-xl">- Morgan Riggs, DigitalCart Merchant</p>
      </div>
    </div>
  </div>
</section>
{{-- End of testimonials --}}
{{-- Beginning of section: Get Started --}}
<section class="w-full bg-gradient-to-b from-gray-100 to-white">
  <div class="w-full px-4 py-20 mx-auto text-left md:text-center md:w-3/4 lg:w-2/4">
    <p class="mb-2 text-base font-semibold text-purple-700">Start your free trial now</p>
    <h2 class="mb-6 text-3xl font-extrabold tracking-tight md:text-4xl md:mb-6 md:leading-tight">Sign up for a free account to organize your customer feedback.</h2>
    <div class="mb-0 space-x-0 md:space-x-2">
      <a class="inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" href="#">
        Get Started
        <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </a>
      <a class="inline-flex items-center justify-center w-full mb-2 btn btn-light btn-lg sm:w-auto sm:mb-0" href="#">
        Book a Demo
        <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path
            fill-rule="evenodd"
            d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"
            clip-rule="evenodd"
          />
        </svg>
      </a>
    </div>
  </div>
</section>

{{-- End of section: Get Started --}}

@endsection
