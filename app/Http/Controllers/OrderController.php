<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
class OrderController extends Controller
{
    public function submitOrder(Request $request)
    {
        // Récupérer les données du formulaire
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $address = $request->input('address');
        $city = $request->input('city');
        $email = $request->input('email');

        // Créer une nouvelle commande
        $order = new Order();
        $order->first_name = $firstName;
        $order->last_name = $lastName;
        $order->address = $address;
        $order->city = $city;
        $order->email = $email;
        

        // Générer un numéro de commande unique
        $order->order_id = uniqid();

        // Sauvegarder la commande dans la base de données
        $order->save();

        // Récupérer le numéro de commande généré
        $orderId = $order->order_id;

        // Mettre à jour la colonne order_id de chaque produit du panier
        $cartItems = session()->get('cart', []);
        foreach ($cartItems as $productId => $item) {
            $product = Product::find($productId);
            if ($product) {
                $product->order_id = $orderId;
                $product->save();
            }
        }

        // Rediriger l'utilisateur vers une page de confirmation ou autre
        return redirect()->route('client.confirmation', ['orderId' => $orderId]);
    }



    public function confirmation($orderId)
{
    return view('client.confirmation', compact('orderId'));
}


}
