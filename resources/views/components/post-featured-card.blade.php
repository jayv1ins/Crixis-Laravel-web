@props([ 'post'])
<article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5 lg:flex">
                <div class="flex-1 lg:mr-8">
                    @if(is_null($post->thumbnail))

                    @else
                        <img src="{{ asset('storage/' . $post->thumbnail) }}"  class="rounded-xl">
                    @endif
                </div>

                <div class="flex-1 flex flex-col justify-between">
                    <header class="mt-8 lg:mt-0">
                        <div class="space-x-2">
                            <x-category-button :category="$post->category"/>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">
                                <a href="/posts/{{ $post->slug }}">
                                {{ $post->title }}
                                </a>
                            </h1>

                            <span class="mt-2 block text-gray-400 text-xs">
                                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                                </span>
                        </div>
                    </header>

                    <div class="text-sm mt-2 space-y-4">
                           {!! $post->excerpt !!}
                    </div>

                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img src="/images/icons8-pen-24.png" alt="Author pen">
                            <h5 class="font-bold ml-3">
                                <a href="/?author={{ $post->author->username }}">{{ $post->author->username}}</a>
                            </h5>
                        </div>

                        <div class="hidden lg:block">
                            <a href="/posts/{{ $post->slug }}"
                               class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                            >Read More</a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>
