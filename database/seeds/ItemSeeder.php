<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'id' => 1, 
                'name' => 'Margherita',
                'description' => 'Classic delight with 100% real mozzarella cheese',
                'price_eur' => 2.40,
                'price_usd' => 2.64,
                'img_url' => 'images/new_margherita_2502.jpg',
                'type_id' => 1
            ],
            [
                'id' => 2, 
                'name' => 'Farmhouse',
                'description' => 'Delightful combination of onion, capsicum, tomato & grilled mushroom',
                'price_eur' => 4.76,
                'price_usd' => 5.23,
                'img_url' => 'images/farmhouse.png', 
                'type_id' => 1
            ],
            [
                'id' => 3, 
                'name' => 'Cheese n Corn',
                'description' => 'A delectable combination of sweet & juicy golden corn',
                'price_eur' => 3.68,
                'price_usd' => 4.04,
                'img_url' => 'images/new_cheese_n_corn.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 4, 
                'name' => 'Pepper Barbecue Chicken',
                'description' => 'Pepper barbecue chicken for that extra zing',
                'price_eur' => 4.04,
                'price_usd' => 4.44,
                'img_url' => 'images/new_pepper_barbeque_chicken.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 5, 
                'name' => 'Peppy Paneer',
                'description' => 'Flavorful trio of juicy paneer, crisp capsicum with spicy red paprika',
                'price_eur' => 5.43,
                'price_usd' => 5.96,
                'img_url' => 'images/new_peppy_paneer.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 6, 
                'name' => 'Veggie Paradise',
                'description' => 'The awesome foursome! Golden corn, black olives, capsicum, red paprika',
                'price_eur' => 3.44,
                'price_usd' => 3.78,
                'img_url' => 'images/new_veggie_paradise.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 7, 
                'name' => 'Veg Extravaganza',
                'description' => 'Black olives, capsicum, onion, grilled mushroom, corn, tomato, jalapeno & extra cheese',
                'price_eur' => 2.98,
                'price_usd' => 3.27,
                'img_url' => 'images/new_veg_extravaganza.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 8, 
                'name' => 'Chicken Sausage',
                'description' => 'American classic! Spicy, herbed chicken sausage on pizza',
                'price_eur' => 4.89,
                'price_usd' => 5.37,
                'img_url' => 'images/new_chicken_sausage.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 9, 
                'name' => 'Crinkle Fries',
                'description' => null,
                'price_eur' => 0.83,
                'price_usd' => 0.91,
                'img_url' => 'images/Crinkle_Fries.png', 
                'type_id' => 2
            ],
            [
                'id' => 10, 
                'name' => 'Pepsi (500ml)',
                'description' => null,
                'price_eur' => 0.44,
                'price_usd' => 0.66,
                'img_url' => 'images/pepsi_new_20190312.png', 
                'type_id' => 2
            ],
            [
                'id' => 11, 
                'name' => 'Choco Lava Cake',
                'description' => null,
                'price_eur' => 1.19,
                'price_usd' => 1.31,
                'img_url' => 'images/Choco_Lava.png', 
                'type_id' => 2
            ],
            [
                'id' => 12, 
                'name' => 'White Pasta Italiano Veg',
                'description' => null,
                'price_eur' => 1.63,
                'price_usd' => 1.79,
                'img_url' => 'images/White-Pasta_Veg.png', 
                'type_id' => 2
            ]
        ]);



    }
}
