@props(['tag'])

<a href="/tags/{{strtolower($tag->name )}}" class="bg-white/10 hover:bg-white/25 rounded-xl text-xs transition duration-200 px-2 p-1">{{ $tag->name }}</a>
