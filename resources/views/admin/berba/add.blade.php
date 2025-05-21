@extends('layouts.admin.default')

@section('content')
<h1 class="mt-2 mb-4 text-center">Dodavanje berbe</h1>

<div class="row d-flex justify-content-center">
  <div class="text-center col-xl-4 col-md-6">

    @include('komponente.prikaz_greski') 

    <form action="{{ route('berba.store') }}" method="POST" class="d-flex flex-column gap-4">
      @csrf

      <div class="form-group">
        <label for="">Datum berbe</label>
        <input type="date" name="date_harvested" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Komentar</label>
        <textarea name="summary" class="form-control" rows="10" placeholder="Opiši kako je prošla berba..."></textarea>
      </div>

      <div class="form-group">
        <label for="">Ocena</label>
        <input type="number" name="grade" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Kila ubrano</label>
        <input type="number" name="kilos_harvested" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Sorta</label>
        <select name="sorta_id">
          @foreach ($sortas as $s)
          <option value="{{ $s->id }}">{{ $s->kind }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="">Plantaža</label>
        <select name="plantaza_id">
          @foreach ($plantazas as $p)
          <option value="{{ $p->id }}">{{ $p->name }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Dodaj berbu</button>
      <a href="{{ route('berba.list') }}" class="btn btn-secondary">Nazad</a>
    </form>
  </div>
</div>
@endsection