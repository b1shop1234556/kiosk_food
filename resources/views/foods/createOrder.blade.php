<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center p-4">

    <!-- Header -->
    <nav class="bg-blue-600 w-full p-4 shadow-md flex justify-between items-center text-white">
        <h1 class="text-xl font-bold ml-4">Welcome, Eric</h1>
        <a href="/" class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2a1 1 0 00-.707.293l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h4a1 1 0 001-1v-4h2v4a1 1 0 001 1h4a1 1 0 001-1v-6.586l1.293 1.293a1 1 0 001.414-1.414l-7-7A1 1 0 0010 2z" />
            </svg>
            <!-- Home -->
        </a>
        <!-- <button class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold">Order History</button>
        <button class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold">Order History</button> -->
    </nav>
    
    <!-- Category Selection -->
    <div class="mt-6 text-center">
        <h2 class="text-lg font-semibold">Scroll & choose a category to explore the menu</h2>
        <div class="flex space-x-4 mt-4 overflow-x-auto px-4">
            <button class="bg-white shadow-md px-4 py-2 rounded-lg">Drinks</button>
            <button class="bg-white shadow-md px-4 py-2 rounded-lg">Burger</button>
            <button class="bg-white shadow-md px-4 py-2 rounded-lg">Snacks</button>
            <button class="bg-white shadow-md px-4 py-2 rounded-lg">Meat</button>
            <button class="bg-white shadow-md px-4 py-2 rounded-lg">Sides</button>
        </div>
    </div>

    <!-- Food Items Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6 w-full max-w-4xl px-4">
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="kfc.jpg" alt="Food Item" class="w-full h-32 object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Chickens Meal</h3>
            <p class="text-blue-600 font-bold">$12.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button>
        </div>
        
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="food2.jpg" alt="Food Item" class="w-full h-32 object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Burger Combo</h3>
            <p class="text-blue-600 font-bold">$10.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button>
        </div>
        
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="food3.jpg" alt="Food Item" class="w-full h-32 object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Snack Box</h3>
            <p class="text-blue-600 font-bold">$8.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button>
        </div>
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="food1.jpg" alt="Food Item" class="w-full h-32 object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Jolly Spaghetti Meal</h3>
            <p class="text-blue-600 font-bold">$12.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button>
        </div>
        
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="food2.jpg" alt="Food Item" class="w-full h-32 object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Palabok Meal</h3>
            <p class="text-blue-600 font-bold">$10.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button>
        </div>
        
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="food3.jpg" alt="Food Item" class="w-full h-32 object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Rice Meal</h3>
            <p class="text-blue-600 font-bold">$8.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button>
        </div>
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="food1.jpg" alt="Food Item" class="w-full h-32 object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Breakfast Meal</h3>
            <p class="text-blue-600 font-bold">$12.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button>
        </div>
        
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="food2.jpg" alt="Food Item" class="w-full h-32 object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Jolly Kids Meal</h3>
            <p class="text-blue-600 font-bold">$10.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button>
        </div>
        
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="food3.jpg" alt="Food Item" class="w-full h-32 object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Family & Party Meals</h3>
            <p class="text-blue-600 font-bold">$8.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button>
        </div>
    </div>
    
</body>
</html>