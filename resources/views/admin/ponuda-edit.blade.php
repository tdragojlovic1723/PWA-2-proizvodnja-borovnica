@extends('layouts.admin.default')

@section('content')
<h1 class="mt-2 mb-4 text-center">Izmena ponude</h1>

<div class="row d-flex justify-content-center">
  <div class="text-center col-xl-4 col-md-6">
    <form action="{{ route('ponuda.update') }}" method="POST" class="d-flex flex-column gap-3">
      @csrf

      <div class="form-group">
        <label class="mb-3">Izmena istaknutog na početnoj stranici</label>

        <div class="form-check">

          @if ($settings['ponuda'] === '1')
            <input class="form-check-input" type="radio" name="ponuda" value="1" checked>
          @else
            <input class="form-check-input" type="radio" name="ponuda" value="1">
          @endif
          <label class="form-check-label">Prikaz najplodnijih sorti</label>
        </div>

        <div class="form-check">
          @if ($settings['ponuda'] === '2')
            <input class="form-check-input" type="radio" name="ponuda" value="2" checked>
          @else
            <input class="form-check-input" type="radio" name="ponuda" value="2">
          @endif
          <label class="form-check-label">Prikaz najvećih sorti po veličini</label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Izmeni ponudu</button>
      <a href="{{ route('admin.index') }}" class="btn btn-secondary">Nazad</a>
    </form>
  </div>
</div>

@endsection