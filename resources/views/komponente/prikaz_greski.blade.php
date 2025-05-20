@if ($errors->any())
<div class="alert alert-danger mt-3 mb-3">
  <strong>Greške:</strong>
  <ul class="mb-1">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif