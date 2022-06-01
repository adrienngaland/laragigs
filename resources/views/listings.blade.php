<h1>Listings </h1>
<p>Hi my name is : {{ $name }}</p>

@foreach ($listings as $listing)
    <h3>{{ $listing['title'] }}</h3>
    <p>{{ $listing['description'] }}</p>
@endforeach