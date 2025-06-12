<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-5xl font-bold mb-5">
        CRIXIS <span class="text-darkb ">NEWS & COMMUNICATION</span>
    </h1>

    <div class="mb-5 relative  lg:inline-flex  bg-gray-100 rounded-xl">
        <x-category-dropdown/>
    </div>


        <!-- Search -->
        <div class=" relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET   " action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>
