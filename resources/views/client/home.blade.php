@extends('client_layaout.layout')

@section('content')
    <main class="limitedWidthBlockContainer">
      <div class="limitedWidthBlock">
        <div class="titles">
          <h1>Nos produits</h1>
          <h2>Une gamme d'articles exclusifs</h2>
        </div>
        <section class="items" id="items">
            @if ($products->isEmpty())
            <p>Un problème est survenu lors du chargement des produits. Veuillez réessayer ultérieurement.</p>
        @else
            @foreach ($products as $product)
            <a href="{{ route('product.show', ['id' => $product->id]) }}">
                <article>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}">
                    <h3 class="productName">{{ $product->name }}</h3>
                    <p class="productDescription">{{ $product->description }}</p>
                </article>
            </a>
        @endforeach
        <a href="{{ route('login') }}">Se connecter</a>

        </section>
      </div>
    </main>


  <script src="../js/script.js"></script>
  @endsection
