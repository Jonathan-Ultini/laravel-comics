@extends("layouts.app")

@section("page-title", "Comics Index")

@section("main-content")
<section class="container py-4">
  <div class="row">
    <div class="col-12">
      <h1>
        Comic index page
      </h1>
    </div>
  </div>

  <!-- "title" => "Action Comics #1000: The Deluxe Edition",
    "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
    "thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
    "price" => "$19.99",
    "series" => "Action Comics",
    "sale_date" => "2018-10-02",
    "type" => "comic book", -->
  <div class="row">
    @foreach ($comics as $comic)
    <div class="col-6 col-md-4 col-lg-2 mb-4 d-flex">
      <a href="{{ route('comics.show', ['id' => $loop->index]) }}" class="text-decoration-none w-100">
        <div class="comic-card text-center p-2 border">
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid mb-2">
          <h5>{{ $comic['title'] }}</h5>
          <p class="text-muted"><strong>Price:</strong> {{ $comic['price'] }}</p>
          <p class="text-muted"><strong>Type:</strong> {{ $comic['type'] }}</p>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</section>
@endsection