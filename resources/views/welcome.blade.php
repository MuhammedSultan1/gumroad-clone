@extends('layouts.main')

@section('content')
        <div class="dark:bg-gray-900 bg-white">
            <div class="flex flex-col lg:flex-row items-stretch justify-between lg:px-0 px-6 lg:py-20 py-8 2xl:mx-auto 2xl:container">
                <div class="z-30 relative lg:w-1/2">
                    <div class="hidden dark:bg-gray-800 bg-gray-100 w-full lg:w-10/12 lg:h-full lg:flex justify-end items-center">
                        <div class="w-full lg:w-auto lg:-mr-32">
                            <img src="https://images.unsplash.com/photo-1554774853-719586f82d77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="image with decent chairs" class="w-full relative z-30 lg:pl-20 px-6 py-14" />
                        </div>
                    </div>
                    <div class="absolute top-0 dark:bg-gray-800 bg-white md:h-96 w-full hidden md:block lg:hidden"></div>
                    <div class="w-full h-full lg:hidden">
                        <img src="https://images.unsplash.com/photo-1554774853-719586f82d77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="image with decent chairs" class="w-full relative z-30 lg:pl-20 md:px-6 py-5 md:py-14" />
                    </div>
                </div>
                <div class="bg-gray-100 dark:bg-gray-800 lg:w-1/2 lg:ml-12 lg:p-14 p-8 flex items-center">
                    <div>
                        <h1 class="dark:text-white md:w-8/12 lg:w-10/12 xl:8/12 2xl:w-8/12 w-full xl:text-6xl sm:text-5xl text-4xl font-semibold text-gray-800 capitalize">Modern Interior Decor</h1>
                        <p class="dark:text-gray-300 md:w-9/12 lg:w-11/12 xl:w-10/12 2xl:9/12 text-base leading-normal text-gray-600 mt-5">Get inspired by our curated selection of luxiwood interiors. We hope get inspired to have luxiwood interior yourself. You’ll find tips here where you can buy a lot of cool furniture,decorations, plants, etc.</p>
                        <button class="rounded-full m-2 py-2 px-6 bg-gray-800 hover:bg-gray-900 text-white">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
{{-- Content --}}
        <section class="text-gray-600 body-font bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="text-6xl font-medium title-font text-gray-900 mb-4">What is DigitalCart?</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">DigitalCart is the number one best place to set up your own store and sell products online to people around the world.</p>
    </div>
  </div>
</section>
{{-- End Content --}}
{{-- Beginning of section: Sell almost anything! --}}
<section class="text-gray-600 body-font bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Sell almost anything!</h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
         <img src="https://img.icons8.com/fluency/48/000000/books.png"/>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Books</h2>
          <p class="leading-relaxed text-base">Once you start selling books with DigitalCart, you won't have any more books to sell!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
            <img src="https://img.icons8.com/color/48/000000/furniture.png"/>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Furniture</h2>
          <p class="leading-relaxed text-base">You can sell your highest quality furniture here!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
           <img src="https://img.icons8.com/fluency/48/000000/clothes.png"/>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Clothing</h2>
          <p class="leading-relaxed text-base">Sell different types of clothes with DigitalCart!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
       <img src="https://img.icons8.com/color/48/000000/basketball.png"/>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Sporting Goods</h2>
          <p class="leading-relaxed text-base">You can sell basketball gear, soccer gear, gym equipment and more!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
        <img src="https://img.icons8.com/fluency/48/000000/car.png"/>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Auto Parts</h2>
          <p class="leading-relaxed text-base">Sell the parts that people need for their vehicles!</p>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
            <img src="https://img.icons8.com/color/48/000000/tv.png"/>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Technology</h2>
          <p class="leading-relaxed text-base">Sell TV screens, laptops, cell phones and more!</p>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- End of section: Sell almost anything! --}}
{{-- Beginning of section: Get started in 3 steps --}}
<div class="px-4 py-16 md:px-24 lg:px-8 lg:py-20 bg-white">
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
      <div class="flex items-center justify-center w-24 h-24 mb-4 text-5xl font-extrabold rounded-full text-deep-purple-accent-400 bg-pink-200 sm:mx-auto">
        1
      </div>
      <h6 class="mb-2 font-semibold leading-5">Slugging catcher</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down clap of thunder
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-24 h-24 mb-4 text-5xl font-extrabold rounded-full text-deep-purple-accent-400 bg-pink-200 sm:mx-auto">
        2
      </div>
      <h6 class="mb-2 font-semibold leading-5">Do your best</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        They urge you to put down your sword and come join the winners. In 22 years the only 'winners'
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-24 h-24 mb-4 text-5xl font-extrabold rounded-full text-deep-purple-accent-400 bg-pink-200 sm:mx-auto">
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
<div class="px-4 py-16 md:px-24 lg:px-8 lg:py-20 bg-white">
  <div class="grid gap-10 lg:grid-cols-2">
    <div class="lg:pr-10">
      <h5 class="mb-4 text-4xl font-extrabold leading-none">
            View analytics and<br class="hidden md:block" />
        <span class="inline-block text-deep-purple-accent-400">reports with our dashboard</span>
      </h5>
      <p class="mb-6 text-gray-900">
        Our dashboard shows you all of your sales. It also shows you the products which are purchased the most.
      </p>
      <hr class="mb-5 border-gray-300" />
    </div>
    <div>
      <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="https://windmillui.com/img/Dashboard.png" alt="" />
    </div>
  </div>
</div>
{{-- End of section: View Analytics --}}
{{-- Beginning of section: See who uses DigitalCart! --}}
<div class="px-4 py-16 md:px-24 lg:px-8 lg:py-20 bg-white">
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
<section class="bg-white">
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
<section class="text-gray-600 body-font bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
      <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font">Ready to set up your own online store?</h1>
              <button class="flex-shrink-0 border-0 py-2 px-8 focus:outline-none transition ease-in-out delay-100  m-2 bg-gray-800 hover:bg-gray-900 text-white rounded text-lg font-semibold mt-10 sm:mt-0">Get Started &#8594;</button>
    </div>
  </div>
</section>
{{-- End of section: Get Started --}}

@endsection
