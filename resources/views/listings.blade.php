@extends('layout')

@section('content')

  @include('partials._hero')

  <div class="container mx-auto">
    @include('partials._search')

    @if (count($listings) != 0)
      <div class="grid grid-cols-1 gap-4 m-4 lg:grid-cols-2">
        @foreach ($listings as $listing)
          <x-listing-card :listing="$listing" />
        @endforeach
      </div>
    @else
      <p>No listings found</p>
    @endif
  </div>

  @include('partials._footer')

@endsection
