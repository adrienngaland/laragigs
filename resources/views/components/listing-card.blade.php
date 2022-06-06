@props(['listing'])

<x-card>
  <img src="images/no-image.png" alt="" class="hidden w-64 object-contain mr-4 md:block">
  <div class="p-1">
    <!-- Title -->
    <h3 class="py-2">
      <a href="/listings/{{ $listing['id'] }}" class="text-lg md:text-xl">
        {{ $listing['title'] }}
      </a>
    </h3>

    <!-- Company -->
    <div class="text-base font-bold">
      {{ $listing['company'] }}
    </div>

    <!-- Tags -->
    <x-listing-tags :tagsCsv="$listing->tags" />

    <!-- Location -->
    <p><i class="fa-solid fa-location-dot mb-4"></i> {{ $listing['location'] }}</p>
  </div>
</x-card>
