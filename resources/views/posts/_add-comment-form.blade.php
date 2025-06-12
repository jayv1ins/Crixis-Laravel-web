@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug}}/comments">
            @csrf

            <header class="flex items-center">
                <img src="/images/icons8-pen-24.png" alt="Author pen">
                <h2 class="ml-4">{{ auth()->user()->name}}</h3>
            </header>

           <x-form.field>
            <x-form.textarea name="body" />
            </x-form.field>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
    @else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log in</a> to leave a comment.
    </p>
@endauth
