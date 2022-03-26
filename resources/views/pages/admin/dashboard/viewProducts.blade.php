@extends('layouts.dashboard.index')

@section('content')

    <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Products
            </h2>
            <!-- CTA -->
            <a
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="https://github.com/estevanmaito/windmill-dashboard"
            >
              <div class="flex items-center">
                <svg
                  class="w-5 h-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
                <span>Star this project on GitHub</span>
              </div>
              <span>View more &RightArrow;</span>
            </a>
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
             <x-dashboard.data-card>
                 <x-slot:title>
                    Total number of products
                </x-slot>
                <x-slot:cardData>
                    8,500,000
                </x-slot>
                 <div
                  class="p-3 mr-4 rounded-full text-orange-500 bg-orange-100 dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
            </x-dashboard.data-card>



            </div>

            <!-- New Table -->
            <x-dashboard.data-table>
                <x-slot:column1>
                    Product Name
                </x-slot>
                 <x-slot:cell1>
                    iPhone X
                </x-slot>
                 <x-slot:infoUnderRow1>
                    Raymond Thomas
                </x-slot>
                 <x-slot:column2>
                    Price
                </x-slot>
                 <x-slot:cell2>
                    $1,000
                </x-slot>
                 <x-slot:column3>
                     Status
                </x-slot>
                    <x-slot:cell3>
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            For Sale
                        </span>
                    </x-slot>
                 <x-slot:column4>
                    Options
                </x-slot>
                 <x-slot:cell4>
                     <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-white">
                    Delete Product
                     </span>
                </x-slot>
            </x-dashboard.data-table>

            <!-- Charts -->
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Charts
            </h2>
            <div class="grid gap-6 mb-8 md:grid-cols-2">
                <x-dashboard.donut-chart>
                    <x-slot:donutChartTitle>
                        Products By Category
                    </x-slot>
                </x-dashboard.donut-chart>

                 <x-dashboard.line-chart>
                    <x-slot:lineChartTitle>
                        Products Being Added
                    </x-slot>
                  </x-dashboard.line-chart>
            </div>
          </div>
        </main>
@endsection
