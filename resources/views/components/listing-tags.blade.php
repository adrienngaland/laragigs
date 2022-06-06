@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex py-2 text-sm">
  @foreach ($tags as $tag)
    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
      <a href="/?tag={{ $tag }}">{{ $tag }}</a>
    </li>
  @endforeach
</ul>
