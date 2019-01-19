<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51HSkTKlauL._SX346_BO1,204,203,200_.jpg',
            'title' => 'Harry Potter',
            'description' => 'Cool  at least as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\product([
            'imagePath' => 'http://s.lubimyczytac.pl/upload/books/4814000/4814632/613451-352x500.jpg',
            'title' => 'Katedra',
            'description' => 'Tajemnicze, interesujaca powieść',
            'price' => 6
        ]);
        $product->save();

        $product = new \App\product([
            'imagePath' => 'https://image.ceneostatic.pl/data/products/12812948/i-pod-kopula-stephen-king-e-book.jpg',
            'title' => 'Pod kopułą',
            'description' => 'Świetny thriller stephena kinga',
            'price' => 15
        ]);
        $product->save();

    }
}
