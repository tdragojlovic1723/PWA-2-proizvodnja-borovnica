@extends('layouts/public')

@section('title')
Pocetna stranica
@endsection

@section('content')
<h2 class="w3-text-light-grey text-center mb-5">{{ $naslov }}</h2>

<div class="w3-content w3-justify w3-text-grey w3-padding-64 p-3">
  <div class="w3-full w3-padding mb-5">

    <div class="row d-flex justify-content-center">
      @foreach ($sortas as $s)
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

              <p class="card-text w3-text-blue">
                Prosečna veličina ploda: {{ $s->average_fruit_size }}<br>
                Prosečna plodnost ploda: {{ $s->average_fertility }}<br>
              </p>


              <a href="{{ route('sorta.single', $s->id) }}" class="w3-button w3-dark-grey w3-padding-large w3-margin-bottom">Opširnije</a>
            </div>

          </div>
        </div>
      @endforeach
      </ul>
    </div>
  </div>
  
</div>
@endsection