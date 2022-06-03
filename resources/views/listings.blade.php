@extends('layout')

@section('content')

    @include('partials._hero')

    @include('partials._search')

    @if (count($listings) != 0)
        <div class="grid grid-cols-1 gap-4 m-4 lg:grid-cols-2">
            @foreach ($listings as $listing)
                <div class="bg-gray-100 border border-stone-3400 rounded-md p-4">
                    <!-- Title -->
                    <h3>
                        <a href="/listings/{{ $listing['id'] }}" class="text-2xl">
                            {{ $listing['title'] }}
                        </a>
                    </h3>

                    <!-- Company -->
                    <div class="text-xl font-bold">
                        {{ $listing['company'] }}
                    </div>

                    <!-- Tags -->
                    <ul class="flex">
                        
                    </ul>

                    <!-- Location -->
                    <p><i class="fa-solid fa-location-dot"></i> {{ $listing['location'] }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>No listings found</p>
    @endif

@endsection
