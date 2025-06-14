 @props(['comment'])
 <x-panel class="bg-gray-50">
 <article class="flex   space-x-4">
    <div class="flex-shrink-0">
        <img src="/images/icons8-pen-24.png" alt="Author pen">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->name }}</h3>

            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at->format('F j, Y, g:i a ') }}</time>
            </p>
        </header>

        <p>
            {{  $comment->body }}
        </p>

    </div>
</article>
</x-panel>
