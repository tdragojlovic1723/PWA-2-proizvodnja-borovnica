@extends('layouts.admin.default')

@section('content')
<h1 class="mt-2 mb-4 text-center">Izmena sorti</h1>

<div class="row d-flex justify-content-center">
  <div class="text-center col-xl-4 col-md-6">

    @include('komponente.prikaz_greski') 

    <form id="myform" action="{{ route('sorta.update', $sorta->id) }}" method="POST" class="d-flex flex-column gap-4" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="">Vrsta</label>
        <input type="text" name="kind" class="form-control" value="{{ $sorta->kind }}">
      </div>

      <div class="form-group">
        <label for="">Opis</label>
        <div id="editor">{!! $sorta->description !!}</div>
        <input type="hidden" name="description" id="description">
      </div>

      <div class="form-group">
        <label for="">Prosečna veličina</label>
        <input type="number" name="average_fruit_size" class="form-control" step="0.01" value="{{ $sorta->average_fruit_size }}">
      </div>

      <div class="form-group">
        <label for="">Prosečna plodnost</label>
        <input type="number" name="average_fertility" class="form-control" step="0.1" value="{{ $sorta->average_fertility }}">
      </div>

      <div class="form-group">
        <label for="">Slika</label>
        <input type="file" name="image" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Izmeni sortu</button>
      <a href="{{ route('sorta.list') }}" class="btn btn-secondary">Nazad</a>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
const quill = new Quill('#editor', {
  theme: 'snow',
});

// REMINDER: prebacujemo sav tekst iz quill editora i stavljamo ga u input element da bismo poslali POST
const form = document.getElementById('myform');
form.addEventListener('submit', function () {
  const html = quill.root.innerHTML;

  document.querySelector('#description').value = html;
});
</script>
@endsection