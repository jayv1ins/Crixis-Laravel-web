{{-- removing the hard html code and make it blade by putting props--}}
@props(['category'])

<a href="/?category={{ $category->slug }}"
    class="px-3 py-1 border border-darkb rounded-full text-darkb text-xs uppercase font-semibold
    hover:border-darkerb hover:text-darkerb"
    style="font-size: 10px"
    >{{ $category->name }}</a>
