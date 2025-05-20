@extends('layouts.admin.default')

@section('content')
<h1 class="mt-2 mb-4 text-center">Izmena plantaže</h1>

<div class="row d-flex justify-content-center">
  <div class="text-center col-xl-4 col-md-6">

    @include('komponente.prikaz_greski') 

    <form action="{{ route('plantaza.update', $plantaza->id) }}" method="POST" class="d-flex flex-column gap-4">
      @csrf

      <div class="form-group">
        <label for="">Naziv</label>
        <input type="text" name="name" id="" class="form-control" value="{{ $plantaza->name }}">
      </div>

      <div class="form-group">
        <label for="">Država</label>
        <input type="text" name="country" id="" class="form-control" value="{{ $plantaza->country }}">
      </div>

      <div class="form-group">
        <label for="">Grad</label>
        <input type="text" name="city" id="" class="form-control" value="{{ $plantaza->city }}">
      </div>

      <div class="form-group">
        <label for="">Površina (ha)</label>
        <input type="number" name="surface" id="" class="form-control" step="0.01" value="{{ $plantaza->surface }}">
      </div>

      <button type="submit" class="btn btn-primary">Izmeni plantažu</button>
      <a href="{{ route('plantaza.list') }}" class="btn btn-secondary">Nazad</a>
    </form>
  </div>
</div>
@endsection