<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;

class CartController extends Controller
{
    public function add(Request $request)
{
    $productId = $request->input('product_id');

    // Récupérer les détails du produit
    $product = Product::find($productId);

    // Vérifier si le produit existe
    if (!$product) {
        return redirect()->back()->withErrors('Le produit que vous essayez d\'ajouter au panier n\'existe pas.');
    }

    // Ajouter le produit au panier
    $cart = session()->get('cart', []);

    // Vérifier si le produit est déjà dans le panier
    if (isset($cart[$productId])) {
        // Le produit existe déjà dans le panier, augmenter la quantité
        $cart[$productId]['quantity']++;
    } else {
        // Le produit n'existe pas encore dans le panier, l'ajouter
        $cart[$productId] = [
            'product_id' => $productId,
            'product' => $product,
            'quantity' => 1
        ];
    }

    // Mettre à jour la session du panier
    session()->put('cart', $cart);

    return redirect()->route('cart.index');
}
    public function index()
    {
        $cartItems = session()->get('cart', []);

        return view('client.cart', compact('cartItems'));
    }
    public function remove(Request $request)
{
    $productId = $request->input('product_id');

    // Récupérer le panier actuel de la session
    $cart = session()->get('cart', []);

    // Vérifier si le produit est présent dans le panier
    if (isset($cart[$productId])) {
        // Supprimer le produit du panier
        unset($cart[$productId]);

        // Mettre à jour la session du panier
        session()->put('cart', $cart);
    }

    return redirect()->route('cart.index');
}

}
