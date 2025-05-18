@extends('layouts.admin.default')

@section('content')
<h1>Dashboard za berbe</h1>

<a href="{{ route('berba.create') }}" class="btn btn-primary mt-2 mb-4">Dodaj berbu</a>

<table id="dt" class="display">
  <thead>
    <tr>
      <th>ID</th>
      <th>Datum branja</th>
      <th>Komentar</th>
      <th>Ocena</th>
      <th>Kila ubrano</th>
      <th>Sorta</th>
      <th>Plantaža</th>
      <th>Created / Updated</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($berbe as $b)
      <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->date_harvested }}</td>
        <td>{{ Str::limit($b->summary, 50, '...') }}</td>
        <td>{{ $b->grade }}</td>
        <td>{{ $b->kilos_harvested }}</td>
        <td>{{ $b->sorta->kind }}</td>
        <td>{{ $b->plantaza->name }}</td>
        <td>{{ $b->created_at }} / {{ $b->updated_at }}</td>
        <td>
          <a href="{{ route('berba.edit', $b->id) }}" class="btn btn-primary">Izmeni</a>
        </td>
        <td>
          <form action="{{ route('berba.destroy', $b->id) }}" method="POST">
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