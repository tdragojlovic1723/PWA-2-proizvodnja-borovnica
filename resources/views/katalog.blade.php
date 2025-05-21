@extends('layouts/public')

@section('title')
Katalog
@endsection

@section('content')
<h2 class="w3-text-light-grey text-center mb-5">Katalog</h2>

<div class="w3-content w3-justify w3-text-grey w3-padding-64 p-3">
  <div class="w3-full w3-padding mb-5">
    <h3 class="w3-padding-16 w3-text-light-grey text-center">Plantaže</h3>

    <div class="row">
      @foreach ($plantaze as $p)
        <div class="col-md-4 w3-container w3-margin-bottom">

          <div class="w3-container w3-dark-grey">
            <h3><b>{{ $p->name }}</b></h3>
            <p>
              <b>Zemlja:</b> {{ $p->country }} <br>
              <b>Grad:</b> {{ $p->city }} <br>
              <b>Površina:</b> {{ $p->surface }}ha <br>
            </p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div class="w3-full w3-padding">
    <h3 class="w3-padding-16 w3-text-light-grey text-center">Sorte borovnica</h3>

    <div class="row">
      @foreach ($sorte as $s)
        <div class="col-md-4 g-3">

          <div class="card">
            <img src="{{ asset('storage/' . $s->image) }}" alt="slika sorte" class="card-img-top" style="width:100%;height:20rem;object-fit:cover;">

            <div class="card-text p-2">
              <h3 class="card-title">{{ $s->kind }}</h3>

              <style>
                .text-3-lines {
                  overflow: hidden;
                  text-overflow: ellipsis;
                  display: -webkit-box;
                  -webkit-line-clamp: 3;
                  -webkit-box-orient: vertical;
                }
              </style>

              <p class="text-3-lines">{{ strip_tags(Str::limit($s->description, 100, '...')) }}</p>

              <a href="{{ route('sorta.single', $s->id) }}" class="w3-button w3-dark-grey w3-padding-large w3-margin-bottom">Opširnije</a>
            </div>

          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection