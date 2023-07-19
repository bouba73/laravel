@extends('client_layaout.layout')
@section('content')
    <section style=" background-color: rgb(79, 79, 215);">


        <div class="cart__order">

            <form method="POST" action="{{ route('order.submit') }}" class="cart__order__form">
                @csrf
                <div class="cart__order__form__question">
                    <label for="firstName">Prénom: </label>
                    <input type="text" name="firstName" id="firstName" required>
                    <p id="firstNameErrorMsg">
                        <!-- ci est un message d'erreur -->
                    </p>
                </div>
                <div class="cart__order__form__question">
                    <label for="lastName">Nom: </label>
                    <input type="text" name="lastName" id="lastName" required>
                    <p id="lastNameErrorMsg"></p>
                </div>
                <div class="cart__order__form__question">
                    <label for="address">Adresse: </label>
                    <input type="text" name="address" id="address" required>
                    <p id="addressErrorMsg"></p>
                </div>
                <div class="cart__order__form__question">
                    <label for="city">Ville: </label>
                    <input type="text" name="city" id="city" required>
                    <p id="cityErrorMsg"></p>
                </div>
                <div class="cart__order__form__question">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" required>
                    <p id="emailErrorMsg"></p>
                </div>
                <div class="cart__order__form__submit">
                    <input type="submit" value="Connecter !" id="order">
                </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection
