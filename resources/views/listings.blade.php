@extends('layout')

@section('content')

  @include('partials._hero')

  <div class="container mx-auto">
    @include('partials._search')

    @if (count($listings) != 0)
      <div class="grid grid-cols-1 gap-4 m-4 lg:grid-cols-2">
        @foreach ($listings as $listing)
          <div class="bg-gray-100 flex border border-stone-3400 rounded-md">
            <img src="images/no-image.png" alt="" class="hidden w-64 object-contain mr-4 md:block">
            <div class="p-1">
              <!-- Title -->
              <h3 class="py-2">
                <a href="/listings/{{ $listing['id'] }}" class="text-xl md:text-2xl">
                  {{ $listing['title'] }}
                </a>
              </h3>

              <!-- Company -->
              <div class="text-xl font-bold">
                {{ $listing['company'] }}
              </div>

              <!-- Tags -->
              <ul class="flex py-4">
                <li>
                  {{ $listing['tags'] }}
                </li>
              </ul>

              <!-- Location -->
              <p><i class="fa-solid fa-location-dot mb-4"></i> {{ $listing['location'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p>No listings found</p>
    @endif
  </div>
@endsection
