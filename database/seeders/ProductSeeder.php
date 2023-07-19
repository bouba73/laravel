<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Canapé Oslo',
                'description' => 'Un canapé moderne et élégant avec des lignes épurées et des accoudoirs fins. Parfait pour les espaces contemporains',
                'price' => 599,
                'image' => 'https://www.istockphoto.com/fr/photo/canap%C3%A9-lit-gm499880848-80480053',
            ],
            [
                'name' => 'Canapé Chesterfield',
                'description' => 'Un classique intemporel avec un dossier capitonné et des accoudoirs roulés. Ajoutez une touche de sophistication à votre salon',
                'price' => 799,
                'image' => 'https://www.istockphoto.com/fr/photo/couleur-moderne-daim-sofa-sofa-isol%C3%A9-sur-fond-blanc-gm1015165952-273217256',
            ],
            [
                'name' => 'Canapé modulaire Harmony ',
                'description' => 'Un canapé polyvalent qui vous permet de créer différentes configurations selon vos besoinsParfait pour les espaces de vie de toutes tailles.',
                'price' => 899 ,
                'image' => 'https://www.istockphoto.com/fr/photo/mobilier-moderne-et-confortable-et-canap%C3%A9-gm1367362446-437640122',
            ],
            [
                'name' => 'Canapé convertible Luna',
                'description' => 'Un canapé pratique qui se transforme en un lit confortable en un clin dœil. Idéal pour accueillir des invités de manière confortable et pratique.',
                'price' => 699,
                'image' => 'https://www.istockphoto.com/fr/photo/trois-si%C3%A8ges-confortable-canap%C3%A9-tissu-beige-isol%C3%A9-sur-fond-blanc-gm1126135875-296320728',
            ],
            [
                'name' => 'Canapé scandinave Malmö ',
                'description' => 'Un canapé au design nordique avec des pieds en bois et des lignes simples. Ajoute une touche chaleureuse et moderne à votre intérieur.',
                'price' => 549,
                'image' => 'https://www.istockphoto.com/fr/photo/coussin-sur-le-canap%C3%A9-int%C3%A9rieur-confortable-gm1046964674-280081242',
            ],
            [
                'name' => 'Canapé en cuir vintage',
                'description' => 'Un canapé en cuir vieilli avec un charme rétro. Parfait pour ceux qui recherchent une ambiance vintage dans leur salon.',
                'price' =>  999,
                'image' => 'https://www.istockphoto.com/fr/photo/style-moderne-de-salle-de-s%C3%A9jour-gm1162973092-319193273',
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
