<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products =[
        [
            'id' => 1,
            'name' => 'Smartphone X10',
            'price' => 799.99,
            'description' => 'A high-end smartphone with 128GB storage and a powerful processor.',
            'category' => 'Electronics',
            'stock' => 50,
            'img' => 'https://via.placeholder.com/300x300.png?text=Smartphone+X10'
        ],
        [
            'id' => 2,
            'name' => 'Wireless Headphones',
            'price' => 199.99,
            'description' => 'Noise-cancelling over-ear headphones with 20 hours of battery life.',
            'category' => 'Accessories',
            'stock' => 150,
            'img' => 'https://via.placeholder.com/300x300.png?text=Wireless+Headphones'
        ],
        [
            'id' => 3,
            'name' => 'Gaming Laptop Pro',
            'price' => 1299.99,
            'description' => 'A gaming laptop with an NVIDIA RTX 3060 GPU and 16GB RAM.',
            'category' => 'Computers',
            'stock' => 30,
            'img' => 'https://via.placeholder.com/300x300.png?text=Gaming+Laptop+Pro'
        ],
        [
            'id' => 4,
            'name' => '4K Smart TV',
            'price' => 999.99,
            'description' => '55-inch 4K UHD Smart TV with HDR and streaming capabilities.',
            'category' => 'Home Entertainment',
            'stock' => 20,
            'img' => 'https://via.placeholder.com/300x300.png?text=4K+Smart+TV'
        ],
        [
            'id' => 5,
            'name' => 'Bluetooth Speaker',
            'price' => 49.99,
            'description' => 'Compact portable Bluetooth speaker with deep bass.',
            'category' => 'Accessories',
            'stock' => 100,
            'img' => 'https://via.placeholder.com/300x300.png?text=Bluetooth+Speaker'
        ],
        [
            'id' => 6,
            'name' => 'Fitness Tracker',
            'price' => 89.99,
            'description' => 'Waterproof fitness tracker with heart rate monitoring.',
            'category' => 'Wearables',
            'stock' => 200,
            'img' => 'https://via.placeholder.com/300x300.png?text=Fitness+Tracker'
        ],
        [
            'id' => 7,
            'name' => 'Office Chair',
            'price' => 199.99,
            'description' => 'Ergonomic office chair with lumbar support and adjustable height.',
            'category' => 'Furniture',
            'stock' => 80,
            'img' => 'https://via.placeholder.com/300x300.png?text=Office+Chair'
        ],
        [
            'id' => 8,
            'name' => 'Mechanical Keyboard',
            'price' => 129.99,
            'description' => 'RGB backlit mechanical keyboard with blue switches.',
            'category' => 'Accessories',
            'stock' => 120,
            'img' => 'https://via.placeholder.com/300x300.png?text=Mechanical+Keyboard'
        ],
        [
            'id' => 9,
            'name' => 'Electric Scooter',
            'price' => 549.99,
            'description' => 'Lightweight foldable electric scooter with 20km range.',
            'category' => 'Vehicles',
            'stock' => 0,
            'img' => 'https://via.placeholder.com/300x300.png?text=Electric+Scooter'
        ],
        [
            'id' => 10,
            'name' => 'Digital Camera',
            'price' => 499.99,
            'description' => 'Mirrorless digital camera with a 24MP sensor and 4K recording.',
            'category' => 'Photography',
            'stock' => 25,
            'img' => 'https://via.placeholder.com/300x300.png?text=Digital+Camera'
        ]
        
        
           
    ];
    return view('welcome',compact('products'));
});

