@extends('layouts/public')

@section('title')
Vaše rezervacije
@endsection

@section('content')

<div class="w3-content w3-justify w3-text-grey w3-padding-64 p-3">
  <div class="w3-full w3-padding">

    @include('komponente.prikaz_uspeha')

    <div class="d-flex justify-content-between align-items-center">
      <h2 class="w3-padding-16 w3-text-light-grey text-center">Vaše rezervacije</h2>

      <a href="{{ route('reservation.create') }}" class="w3-button w3-deep-purple w3-padding-large" style="height: 50%;">Napravi rezervaciju</a>
    </div>


    <div class="row">

      @foreach ($reservations as $r)
        <div class="col-md-4">
          <div class="card mb-4 p-2">
            <div class="card-text">
              <p>
                Vrsta borovnice: {{ $r->sorta->kind }} <br>
                Kila rezervisano: {{ $r->kilos_reserved }} <br>
                Datum rezervacije: {{ $r->date_reserved }} <br>
              </p>

              <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('reservation.edit', $r->id) }}" class="w3-button w3-dark-grey w3-padding-medium">Izmeni</a>

                <form action="{{ route('reservation.destroy', $r->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w3-button w3-red w3-padding-medium">Otkaži</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      @endforeach
    </div>

  </div>
</div>
@endsection