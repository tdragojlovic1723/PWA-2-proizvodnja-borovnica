@extends('layouts.admin.default')

@section('content')
<h1 class="mt-2 mb-4 text-center">Izmena berbe</h1>

<div class="row d-flex justify-content-center">
  <div class="text-center col-xl-4 col-md-6">

    @include('komponente.prikaz_greski') 

    <form action="{{ route('berba.update', $berba->id) }}" method="POST" class="d-flex flex-column gap-4">
      @csrf

      <div class="form-group">
        <label for="">Datum berbe</label>
        <input type="date" name="date_harvested" class="form-control" value="{{ $berba->date_harvested }}">
      </div>

      <div class="form-group">
        <label for="">Komentar</label>
        <textarea name="summary" class="form-control" rows="10" placeholder="Opiši kako je prošla berba...">{{ $berba->summary }}</textarea>
      </div>

      <div class="form-group">
        <label for="">Ocena</label>
        <input type="number" name="grade" class="form-control" value="{{ $berba->grade }}">
      </div>

      <div class="form-group">
        <label for="">Kila ubrano</label>
        <input type="number" name="kilos_harvested" class="form-control" value="{{ $berba->kilos_harvested }}">
      </div>

      <div class="form-group">
        <label for="">Sorta</label>
        <select name="sorta_id">
          @foreach ($sortas as $s)
            @if ($s->id === $berba->sorta_id)
              <option value="{{ $s->id }}" selected>{{ $s->kind }}</option>
            @else
              <option value="{{ $s->id }}">{{ $s->kind }}</option>
            @endif
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="">Plantaža</label>
        <select name="plantaza_id">
          @foreach ($plantazas as $p)
            @if ($p->id === $berba->plantaza_id)
              <option value="{{ $p->id }}" selected>{{ $p->name }}</option>
            @else
              <option value="{{ $p->id }}">{{ $p->name }}</option>
            @endif
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Izmeni berbu</button>
      <a href="{{ route('berba.list') }}" class="btn btn-secondary">Nazad</a>
    </form>
  </div>
</div>
@endsection