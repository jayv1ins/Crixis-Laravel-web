@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shirnk-0">
            <h4 class="font-semibold mb-4">Links</h4>

            <ul>
                @admin
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-darkb' : '' }}">All Posts</a>
                </li>
                @endadmin

                @user

                <li>
                    <a href="/posts/myPost" class="{{ request()->is('posts/myPost') ? 'text-darkb' : '' }}">My Posts</a>
                </li>

                <li>
                    <a href="/posts/create" class="{{ request()->is('posts/create') ? 'text-darkb' : '' }}">New Post</a>
                </li>

                @enduser

            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
