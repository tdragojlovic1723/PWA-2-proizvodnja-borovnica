@extends('layouts/public')

@section('title')
Kontakt stranica
@endsection

@section('content')
<div class="w3-content w3-justify w3-text-grey w3-padding-64 p-5">

  <h2 class="w3-text-light-grey text-center mb-5">Kontakt</h2>

  <div class="row">
    <div class="col-md-6 mb-3" style="height: 20rem">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2869.626967249443!2d20.908221176697623!3d44.00843687108748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4757211f406347a3%3A0x62fd81f70d3cb710!2sKneza%20Mihaila%206%2C%20Kragujevac%2034105!5e0!3m2!1sen!2srs!4v1743357055496!5m2!1sen!2srs" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="col-md-6">
      <p>
        <b>Adresa:</b> Kneza Mihaila 6
        <br>
        <b>Telefon:</b> +381 64 123 4567
        <br>
        <b>Email:</b> info@borovnice-farm.rs
        <br>
        <b>Radno vreme:</b> Pon-Pet: 08:00 - 16:00, Sub: 09:00 - 13:00
      </p>
    </div>
  </div>
</div>
@endsection