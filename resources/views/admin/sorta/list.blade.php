@extends('layouts.admin.default')

@section('content')
<h1 class="mt-2 mb-4">Dashboard za sorte</h1>

<a href="{{ route('sorta.create') }}" class="btn btn-primary mt-2 mb-4">Dodaj sortu</a>

@include('komponente.prikaz_uspeha')
@include('komponente.prikaz_greski')

<table id="dt" class="display">
  <thead>
    <tr>
      <th>ID</th>
      <th>Vrsta</th>
      <th>Opis</th>
      <th>Veličina</th>
      <th>Plodnost</th>
      <th>Slika</th>
      <th>Created / Updated</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sorta as $s)
      <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->kind }}</td>
        <td>{{ strip_tags(Str::limit($s->description, 50, '...')) }}</td>
        <td>{{ $s->average_fruit_size }}</td>
        <td>{{ $s->average_fertility }}</td>
        <!-- TODO: slika prikazuje samo tekst -->
        <td>
          <img src="{{ asset('storage/' . $s->image) }}" style="width: 10rem;" alt="">
        </td>

        <td>{{ $s->created_at }} / {{ $s->updated_at }}</td>
        <td>
          <a href="{{ route('sorta.edit', $s->id) }}" class="btn btn-primary">Izmeni</a>
        </td>
        <td>
          <form action="{{ route('sorta.destroy', $s->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Obriši</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<script>
$(document).ready(function() {
  $('#dt').DataTable({
    language: {
      url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/sr-SP.json'
    }
  });
});
</script>
@endsection