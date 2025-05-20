@extends('layouts/public')

@section('title')
Izmena rezervacije
@endsection

@section('content')
<div class="w3-content w3-justify w3-text-white w3-padding-64 p-3">
  <div class="w3-full w3-padding d-flex flex-column align-items-center">
    <h2 class="w3-padding-16 w3-text-light-grey text-center">Izmena rezervacije</h2>

    <div class="text-center col-md-6">

      @include('komponente.prikaz_greski')

      <form action="{{ route('reservation.update', $tr->id) }}" class="d-flex flex-column gap-2" method="POST">
        @csrf

        <div class="form-group">
          <label for="">Kila rezervisano</label>
          <input type="number" name="kilos_reserved" class="form-control" value="{{ $tr->kilos_reserved }}">
        </div>

        <button class="w3-button w3-light-green w3-medium-padding mt-5">Izmeni</button>
      </form>
    </div>

  </div>
</div>
@endsection