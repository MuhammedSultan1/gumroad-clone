<li class="relative px-6 py-3">
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        href="{{ $route ?? '' }}"
        >{{ $svg ?? '' }}

        <span class="ml-4">{{ $slot ?? '' }}</span>

        </a>
</li>
