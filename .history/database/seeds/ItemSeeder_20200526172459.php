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
                'price_eur' => 6.5,
                'price_usd' => ,
                'img_url' => 'images/new_margherita_2502.jpg',
                'type_id' => 1
            ],
            [
                'id' => 2, 
                'name' => 'Farmhouse',
                'description' => 'Delightful combination of onion, capsicum, tomato & mushroom',
                'price_eur' => 7.5,
                'price_usd' => 5.23,
                'img_url' => 'images/farmhouse.png', 
                'type_id' => 1
            ],
            [
                'id' => 3, 
                'name' => 'Cheese n Corn',
                'description' => 'A delectable combination of sweet & juicy golden corn',
                'price_eur' => 6,
                'price_usd' => 4.04,
                'img_url' => 'images/new_cheese_n_corn.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 4, 
                'name' => 'Pepper Barbecue Chicken',
                'description' => 'Pepper barbecue chicken with extra zing',
                'price_eur' => 7.5,
                'price_usd' => 4.44,
                'img_url' => 'images/new_pepper_barbeque_chicken.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 5, 
                'name' => 'Peppy Paneer',
                'description' => 'Trio: juicy paneer, crisp capsicum with spicy paprika',
                'price_eur' => 7.5,
                'price_usd' => 5.96,
                'img_url' => 'images/new_peppy_paneer.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 6, 
                'name' => 'Veggie Paradise',
                'description' => 'FourCombo! Golden corn, black olives, capsicum, red paprika',
                'price_eur' => 8.5,
                'price_usd' => 3.78,
                'img_url' => 'images/new_veggie_paradise.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 7, 
                'name' => 'Veg Extravaganza',
                'description' => 'Black olives, capsicum, onion, grilled mushroom, corn, jalapeno',
                'price_eur' => 2,
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
                'name' => 'Brownie Fantasy',
                'description' => null,
                'price_eur' => 1.63,
                'price_usd' => 1.79,
                'img_url' => 'images/Brownie_Fantasy.png', 
                'type_id' => 2
            ],
            [
                'id' => 13, 
                'name' => 'Cheese Onion',
                'description' => 'Tangy & spicy flavours on a super cheesy onion pizza!',
                'price_eur' => 3.69,
                'price_usd' => 4.02,
                'img_url' => 'images/updated_achari_do_pyaza.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 14, 
                'name' => 'Double Cheese Margherita',
                'description' => 'A classic delight loaded with extra 100% real mozzarella cheese',
                'price_eur' => 4.05,
                'price_usd' => 4.41,
                'img_url' => 'images/double_cheese_margherita_2502.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 15, 
                'name' => 'Fresh Veggie',
                'description' => 'Delectable combination of onion & capsicum, a veggie lovers pick',
                'price_eur' => 3.93,
                'price_usd' => 4.28,
                'img_url' => 'images/new_fresh_veggie.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 16, 
                'name' => 'Paneer Butter',
                'description' => 'Tasty twist of spicy butter topped with paneer & capsicum',
                'price_eur' => 4.78,
                'price_usd' => 5.21,
                'img_url' => 'images/updated_paneer_makhani.jpg', 
                'type_id' => 1
            ],
            [
                'id' => 17, 
                'name' => 'Lipton Ice Tea (250ml)',
                'description' => null,
                'price_eur' => 1.23,
                'price_usd' => 1.34,
                'img_url' => 'images/lit.jpg',
                'type_id' => 2
            ],
            [
                'id' => 18, 
                'name' => 'Cheesy Jalapeno Dip',
                'description' => null,
                'price_eur' => 1.76,
                'price_usd' => 1.92,
                'img_url' => 'images/new_jalapeno.png', 
                'type_id' => 2
            ],
            [
                'id' => 19, 
                'name' => 'Crunchy Strips',
                'description' => null,
                'price_eur' => 1.45,
                'price_usd' => 1.58,
                'img_url' => 'images/crunchy_strips.png', 
                'type_id' => 2
            ],
            [
                'id' => 20, 
                'name' => 'Garlic Breadsticks',
                'description' => null,
                'price_eur' => 1.92,
                'price_usd' => 2.09,
                'img_url' => 'images/Garlic_bread.png', 
                'type_id' => 2
            ],
        ]);



    }
}
