@extends('client_layaout.layout')

@section('content')

    <main class="limitedWidthBlockContainer">
      <div class="limitedWidthBlock">
        <section class="item">
            <article>
                <div class="item__img">
                    <img src="{{ $product->image }}" alt="Photographie d'un canapé">
                </div>
                <div class="item__content">
                    <div class="item__content__titlePrice">
                        <h1 id="title">{{ $product->name }}</h1>
                        <p>Prix : <span id="price">{{ $product->price }}</span>€</p>
                    </div>
                    <div class="item__content__description">
                        <p class="item__content__description__title">Description :</p>
                        <p id="description">{{ $product->description }}</p>
                    </div>
                    <div class="item__content__settings">
                        <div class="item__content__settings__color">
                            <label for="color-select">Choisir une couleur :</label>
                            <select name="color-select" id="colors">
                                <option value="">-- SVP, choisissez une couleur --</option>

                            </select>
                        </div>
                        <div class="item__content__settings__quantity">
                            <label for="itemQuantity">Nombre d'article(s) (1-100) :</label>
                            <input type="number" name="itemQuantity" min="1" max="100" value="0" id="quantity">
                        </div>
                    </div>
                </div>
            </article>


            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="item__content__addButton">
                    <button type="submit" id="addToCart">Ajouter au panier</button>
                </div>
            </form>


            </div>
          </article>
        </section>
      </div>
    </main>
    <script src="{{ asset('assets/js/product.js') }}"></script>

    @endsection
