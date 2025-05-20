@extends('layouts/public')

@section('title')
Nova rezervacija
@endsection

@section('content')
<div class="w3-content w3-justify w3-text-white w3-padding-64 p-3">
  <div class="w3-full w3-padding d-flex flex-column align-items-center">
    <h2 class="w3-padding-16 w3-text-light-grey text-center">Kreiranje rezervacije</h2>

    <div class="text-center col-md-6">

      @include('komponente.prikaz_greski')

      <form action="{{ route('reservation.create') }}" class="d-flex flex-column gap-2" method="POST">
        @csrf

        <div class="form-group">
          <label for="">Sorta borovnice</label>
          <select name="sorta_id" class="form-control">
            @foreach($sortas as $s)
              <option value="{{ $s->id }}">{{ $s->kind }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="">Kila rezervisano</label>
          <input type="number" name="kilos_reserved" class="form-control">
        </div>

        <button class="w3-button w3-light-green w3-medium-padding mt-5">Kreiraj</button>
      </form>
    </div>

  </div>
</div>
@endsection