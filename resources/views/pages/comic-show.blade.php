@extends('layouts.app')

@section('page-title', $comic['title'])

@section('main-content')
<section class="container py-4">
  <div class="row">
    <div class="col-12 text-center">
      <h1>{{ $comic['title'] }}</h1>
      <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid mb-3">
      <p>{{ $comic['description'] }}</p>
      <p><strong>Price:</strong> {{ $comic['price'] }}</p>
      <p><strong>Series:</strong> {{ $comic['series'] }}</p>
      <p><strong>Sale Date:</strong> {{ $comic['sale_date'] }}</p>
      <p><strong>Type:</strong> {{ $comic['type'] }}</p>
      <a href="{{ route('comic-index') }}" class="btn btn-secondary">Back to Index</a>
    </div>
  </div>
</section>
@endsection