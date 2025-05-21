@extends('layouts/public')

@section('title')
Single sorta
@endsection

@section('content')
<h2 class="w3-text-light-grey text-center mb-5">Pregled sorte</h2>

<div class="w3-content w3-justify w3-text-grey w3-padding-64 p-3">

  <div class="w3-full w3-padding">
    <div class="row">
      <div class="card">
        <img src="{{ asset('storage/' . $s->image) }}" alt="slika sorte" class="card-img-top" style="width:100%;max-height: 40rem;object-fit:cover;">

        <div class="card-text p-2">
          <h2 class="card-title">{{ $s->kind }}</h2>

          <p class="card-text">{!! $s->description !!}</p>

          <p class="card-text w3-text-green">
            Prosečna veličina ploda (broj plodova po biljci): <b>{{ $s->average_fruit_size }}</b><br>
            Prosečna plodnost ploda (u centimetrima, prečnik): <b>{{ $s->average_fertility }}</b><br>
          </p>

          <a href="{{ url()->previous() }}" class="w3-button w3-dark-grey w3-padding-large w3-margin-bottom">Nazad</a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection