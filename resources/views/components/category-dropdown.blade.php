    <!--  Category -->
    <div class="relative  lg:inline-flex  bg-gray-100 rounded-xl">
        <x-dropdown>
            <x-slot name="trigger">
                <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left inline-flex">
                    {{-- If we are on current category show the current if not display default Categories--}}
                    {{ isset($currentCategory) ? ucwords($currentCategory->name): 'Categories' }}

                    <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
                </button>
            </x-slot>

            {{-- easy and advance technique of routing --}}
            <x-dropdown-item
                href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request ()->routeIs
                ('home')">
                All
            </x-dropdown-item>

            {{-- categories is from database while category is from route, same as to Posts as Post--}}
                @foreach ($categories as $category )
                <x-dropdown-item
                href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
                :active='request()->is("categories/{$category->slug}")'
            >
                {{-- //ucwords() function converts the first character of each word in a string to uppercase --}}
                {{ ucwords($category->name) }}
            </x-dropdown-item>
                @endforeach
        </x-dropdown>
