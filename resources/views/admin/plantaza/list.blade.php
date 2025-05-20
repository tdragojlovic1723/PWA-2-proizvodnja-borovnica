@extends('layouts.admin.default')

@section('content')
<h1 class="mt-2 mb-4">Dashboard za plantaže</h1>

<a href="{{ route('plantaza.create') }}" class="btn btn-primary mt-2 mb-4">Dodaj plantažu</a>

@include('komponente.prikaz_uspeha')
@include('komponente.prikaz_greski')

<table id="dt" class="display">
  <thead>
    <tr>
      <th>ID</th>
      <th>Naziv</th>
      <th>Država</th>
      <th>Grad</th>
      <th>Površina</th>
      <th>Created / Updated</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($plantaze as $p)
      <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->country }}</td>
        <td>{{ $p->city }}</td>
        <td>{{ $p->surface }}</td>

        <td>{{ $p->created_at }} / {{ $p->updated_at }}</td>

        <td>
          <a href="{{ route('plantaza.edit', $p->id) }}" class="btn btn-primary">Izmeni</a>
        </td>

        <td>
          <form action="{{ route('plantaza.destroy', $p->id) }}" method="POST">
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