<?php
$products = [
    [
        'title' => 'Camera',
        'image' => 'images/mock1.jpg',
        'price' => 1000
    ],
    [
        'title' => 'Cutlery',
        'image' => 'images/mock2.jpg',
        'price' => 1200
    ],
    [
        'title' => 'Bike',
        'image' => 'images/mock3.jpg',
        'price' => 800000
    ]
];

echo "<div class='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6'>";

foreach ($products as $product) {
    echo "
    <div class='bg-white shadow-md rounded-lg p-4'>
        <img src='{$product['image']}' alt='{$product['title']}' class='w-full h-48 object-cover mb-4 rounded-md'>
        <h2 class='text-xl font-bold mb-2'>{$product['title']}</h2>
        <p class='text-orange-500 font-bold'>KES {$product['price']}</p>
        <div class='flex justify-between items-center mt-4'>
            <button class='bg-gray-200 px-2 py-1 rounded'>-</button>
            <input type='text' value='1' class='w-12 text-center border rounded-md'>
            <button class='bg-gray-200 px-2 py-1 rounded'>+</button>
        </div>
    </div>
    ";
}

echo "</div>";
?>