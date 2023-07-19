<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Kanap</title>

    <meta charset="utf-8">
    <meta name="description" content="Plateforme incroyable de e-commerce">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css/confirmation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/cart.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/product.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js') }}"></script>
    <script src="{{ asset('assets/js/confirmation.js') }}"></script>
    <script src="{{ asset('assets/js/cart.js') }}"></script>
    <script src="{{ asset('assets/js/product.js') }}"></script>




    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <header>
    <div class="limitedWidthBlockContainer informations">
      <div class="limitedWidthBlock">
        <ul>
          <li><img src=" {{ asset('assets/images/icons/phone.svg') }}" alt="logo de téléphone" class="informations__phone">01 23 45 67 89</li>


          <li><img src="{{ asset('assets/images/icons/mail.svg') }}" alt="logo d'une enveloppe" class="informations__mail">support@name.com</li>
          <li><img src="{{ asset('assets/images/icons/phone.svg') }}" alt="logo d'un point de géolocalisation" class="informations__address">01 23 45 67 89</li>
        </ul>
      </div>
    </div>
    <div class="limitedWidthBlockContainer menu">
      <div class="limitedWidthBlock">
        <a href="./index.html">
          <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="Logo de l'entreprise">
        </a>
        <nav>
          <ul>
            <a href="{{ route('product.index') }}"><li>Accueil</li></a>
            <a href="{{ route('cart.index') }}"><li>Panier</li></a>
          </ul>
        </nav>
      </div>
    </div>
    <img class="banniere" src="{{ asset('assets/images/banniere.png') }}" alt="Baniere">
  </header>


  @yield('content')

<footer>
    <div class="limitedWidthBlockContainer footerMain">
      <div class="limitedWidthBlock">
        <div>
          <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="Logo de l'entreprise">
        </div>
        <div>
          <p>10 quai de la charente <br>75019 Paris 19</p>
        </div>
        <div>
          <p>Téléphone : 01 23 45 67 89</p>
        </div>
        <div>
          <p>Email : support@name.com</p>
        </div>
      </div>
    </div>
    <div class="limitedWidthBlockContainer footerSecondary">
      <div class="limitedWidthBlock">
        <p>© Copyright 2021 - 2042 | Openclassrooms by Openclassrooms | All Rights Reserved | Powered by <3</p>
      </div>
    </div>
  </footer>
  <script src="{{ asset('assets/js/product.js') }}"></script>
</body>
</html>

