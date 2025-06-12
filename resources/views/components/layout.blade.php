<!doctype html>

<title>CRIXIS</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            darkb: '#287094 ',
            darkerb: '#023246 ',
          }
        }
      }
    }
  </script>
<link href="./css/app.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <div>
        <header class="md:flex md:justify-between md:items-center" x-data="{ open: false }">
            <div>
                <a href="/">
                    <img src="/images/crixislogo.png" alt="CRIXIS logo" width="165" height="16">
                </a>
            </div>
            <nav class="hidden md:flex">
                <div class=" mt-8 md:mt-0 flex items-center">
                    <a href="/" class="text-xs font-bold uppercase  hover:underline hover:decoration-darkb {{ request()->is('/') ? 'text-darkb' : '' }}">Home</a>
                    <a href="/news" class="ml-6 text-xs font-bold uppercase  hover:underline hover:decoration-darkb {{ request()->is('news') ? 'text-darkb' : '' }}">News</a>

                    @auth
                        <x-dropdown >
                            <x-slot name="trigger">
                                <span class="text-xs font-bold ml-6 uppercase cursor-pointer ">Welcome, {{  auth()->user()->name  }}!</span>
                            </x-slot>
                            @admin
                                <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">All Post</x-dropdown-item>
                            @endadmin
                                <x-dropdown-item href="/posts/myPost" :active="request()->is('posts/myPost')">Dashboard</x-dropdown-item>
                                <x-dropdown-item href="/posts/create" :active="request()->is('post/create')">New Post</x-dropdown-item>
                            <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>
                        </x-dropdown>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                            <button type="submit">Log Out</button>
                        </form>
                    @else
                        <a href="/register" class="ml-6 text-xs font-bold uppercase  hover:underline hover:decoration-darkb{{ request()->is('register') ? 'text-darkb' : '' }}">Register</a>
                        <a href="/login" class="ml-6 text-xs font-bold uppercase  hover:underline hover:decoration-darkb{{ request()->is('/login') ? 'text-darkb' : '' }}">Log in</a>
                    @endauth

                </div>
            </nav>
        </header>

        {{ $slot }}

        <footer  class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-5 px-10 mt-16">
            <section class="px-6 py-8">
                <div>
                <content class="md:flex  items-center justify-center " >
                        <a href="/">
                            <img src="/images/biglogo.png" alt="CRIXIS logo" width="124" height="10">
                        </a>

                        <div class="ml-10  mt-8 md:mt-0">
                            <h3>NAVIGATION</h3>
                            <a href="/" class="block text-xs  uppercase  hover:underline hover:decoration-darkb {{ request()->is('/') ? 'text-blue-600' : '' }}">Home</a>
                            <a href="/news" class="block text-xs uppercase  hover:underline hover:decoration-darkb {{ request()->is('news') ? 'text-blue-600' : '' }}">News</a>
                            <a href="/posts/myPost" class="block text-xs  uppercase  hover:underline hover:decoration-darkb {{ request()->is('posts/myPost') ? 'text-blue-600' : '' }}">Dashboard</a>
                        </div>
                        <div class="border-black border-l-4  ml-5 ">
                            <h3 class = "ml-5  items-center">Emergency Hotline Numbers</h3>
                            <p>PNP- 117</p>
                            <p>Red Cross- 143</p>
                            <p>Fire Station- 426-0219</p>
                        </div>
                        <div class="border-black border-l-4  ml-5 ">
                            <h3 class = "ml-5  items-center">Website Link</h3>
                            <a href="https://reports.dole.gov.ph/" target="_blank" class="block hover:underline">Dole</a>
                            <a href="https://ndrrmc.gov.ph/" target="_blank" class="block hover:underline">NDRRMOC</a>
                            <a href="https://redcross.org.ph/" target="_blank" class="block hover:underline">Red Cross</a>
                        </div>
                </content>
        </footer>
    </section>

    <x-flash/>

</body>
