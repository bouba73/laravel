@extends('client_layaout.layout')
@section('content')
    <main class="limitedWidthBlockContainer">
      <div class="limitedWidthBlock" id="limitedWidthBlock">

        <div class="confirmation">
            <p>Commande validée ! <br>Votre numéro de commande est : <span id="orderId">{{ $orderId }}</span></p>

        </div>

      </div>
    </main>


    <script src="{{ asset('assets/js/confirmation.js') }}"></script>
  @endsection
