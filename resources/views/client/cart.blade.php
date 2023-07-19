
@extends('client_layaout.layout')

@section('content')
    <main class="limitedWidthBlockContainer">
      <div class="limitedWidthBlock" id="limitedWidthBlock">
        <div class="cartAndFormContainer" id="cartAndFormContainer">
          <h1>Votre panier</h1>
          <section class="cart">
            <section id="cart__items">
                @foreach ($cartItems as $cartItem)
                <article class="cart__item" data-id="{{ $cartItem['product']['id'] }}">


                    <div class="cart__item__img">
                        <img src="{{ $cartItem['product']['image'] }}" alt="Photographie d'un canapé">

                    </div>
                    <div class="cart__item__content">
                        <div class="cart__item__content__description">
                            <h2>{{ $cartItem['product']['name'] }}</h2>
                            <p>{{ $cartItem['product']['price'] }} €</p>
                        </div>
                        <div class="cart__item__content__settings">
                            <div class="cart__item__content__settings__quantity">
                                <p>Qté :</p>
                                <input type="number" class="itemQuantity" name="itemQuantity" min="1" max="100" value="{{ $cartItem['quantity'] }}">
                            </div>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $cartItem['product']['id'] }}">
                                <div class="cart__item__content__settings__delete">
                                    <button type="submit" class="deleteItem">Supprimer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
                @endforeach
            </section>

            <div class="cart__price">
              <p>Total (<span id="totalQuantity"><!-- 2 --></span> articles) : <span id="totalPrice"><!-- 84,00 --></span> €</p>
            </div>
            <form action="{{ route('client.confirmation', ['orderId' => $cartItem['product']['id']]) }}" method="POST">
                @csrf
                <div class="cart__order__form__submit">
                    <input type="submit" value="Valider la commande" id="orderSubmit">
                </div>
            </form>
          </section>
        </div>
      </div>
    </main>


    <script src="{{ asset('assets/js/cart.js') }}"></script>
  @endsection
