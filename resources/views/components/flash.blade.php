@if (session()->has('success'))
        <div x-data="{ show: true}"
            x-init="setTimeout (() => show = false, 4000)"
            x-show="show"
            class=" bg-darkb fixed py-2 px-4 text-white rounded-xl bottom-3 right-3 text-sm">
            <p>{{ session('success') }} </p>
        </div>
    @endif
