<x-layout>
    @include ('posts._header')
    <script>
        function openCity(cityName,elmnt,color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(cityName).style.display = "block";
          elmnt.style.backgroundColor = color;

        }
        document.getElementById("defaultOpen").click();
        </script>

    <banner>

        <div id="Welcome" class="tabcontent">
            <img src="/images/1.png" class="h-full w-full bg-cover">
        </div>

        <div id="step1" class="tabcontent">
            <img src="/images/2.png" class="bg-cover h-full w-full">
            <a href="/register" class="Rnav">Register</a>
        </div>

        <div id="step2" class="tabcontent">
            <img src="/images/3.png" class="bg-cover h-full w-full">
            <a href="/posts/create"class="Pnav">New Post</a>

        </div>

        <div id="Oslo" class="tabcontent">
            <img src="/images/4.png" class="bg-cover h-full w-full">
        </div>

        <button class="tablink" onclick="openCity('Welcome', this, '#287094')" id="defaultOpen">Welcome</button>
        <button class="tablink" onclick="openCity('step1', this, '#287094')">Register</button>
        <button class="tablink" onclick="openCity('step2', this, '#287094')">New Post</button>
        <button class="tablink" onclick="openCity('Oslo', this, '#287094')">Finish</button>

    </banner>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())

        <x-posts-grid :posts="$posts"/>

            {{$posts->links()}}


            @else
                <p class="text-center">No posts yet. Please check back later</p>
        @endif

    </main>

</x-layout>
