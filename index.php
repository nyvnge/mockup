<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyStore</title>
    <!-- Import Montserrat font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Use Tailwind CSS from CDN for testing -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome CDN for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f3f4f6; /* fallback for bg-gray-100 */
        }
        .header-bg {
            background-color: #f97316; /* fallback for bg-orange-500 */
        }
        .header-text {
            color: #ffffff; /* fallback for text-white */
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-md p-4" style="background-color: #ffffff;">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Hamburger Menu (left) -->
            <button id="menu-btn" class="text-gray-900 text-2xl">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Store Name (center) -->
            <a href="#" class="text-gray-900 font-light text-xl">My Store</a>
            
            <!-- Shopping Cart (right) -->
            <a href="#" class="text-gray-900 text-2xl">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>
    </nav>
    
    <!-- Header -->
    <header class="header-bg bg-orange-500 py-6 mb-8" style="background-color: #f97316;">
        <h1 class="header-text text-white text-3xl font-bold text-center" style="color: #ffffff;">Shop</h1>
    </header>

    <!-- Section with product count and sorting -->
    <section class="container mx-auto px-4 mb-4">
        <div class="flex justify-between items-center">
            <!-- Showing all results -->
            <p class="text-gray-700 font-light">Showing all 3 results</p>
            
            <!-- Sorting dropdown -->
            <div>
                <label for="sort" class="mr-2 text-gray-700">Sort by:</label>
                <select id="sort" class="border rounded-md p-2 text-gray-700">
                    <option value="default">Default sorting</option>
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="latest">Sort by latest</option>
                    <option value="price-low-high">Sort by price: low to high</option>
                    <option value="price-high-low">Sort by price: high to low</option>
                </select>
            </div>
        </div>
    </section>
    
    <!-- Content -->
    <section class="container mx-auto px-4">
        <?php include('product.php'); ?>
    </section>
    
    <!-- Optional JavaScript for handling the hamburger menu -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        menuBtn.addEventListener('click', () => {
            alert('Menu button clicked! Add your menu functionality here.');
        });
    </script>
</body>
</html>
