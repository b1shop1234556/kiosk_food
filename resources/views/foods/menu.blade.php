<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center p">

    <!-- Header -->
    <nav class="bg-blue-100 w-full p-4 shadow-md flex justify-between items-center text-white">
        <h1 class="text-2xl text-red-500 font-bold ml-2">Welcome</h1>
        <div class="flex space-x-2">
            <a href="{{ url('/order') }}" class="bg-red-500 px-2 py-1 rounded-lg font-semibold flex items-center">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm3 2a1 1 0 011 1v6a1 1 0 01-2 0V6a1 1 0 011-1zm4 0a1 1 0 011 1v6a1 1 0 01-2 0V6a1 1 0 011-1z" />
            </svg> -->
            Order History
            <!-- Home -->
            </a>
            <a href="/" class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2a1 1 0 00-.707.293l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h4a1 1 0 001-1v-4h2v4a1 1 0 001 1h4a1 1 0 001-1v-6.586l1.293 1.293a1 1 0 001.414-1.414l-7-7A1 1 0 0010 2z" fill="black" />
            </svg>
            </a>
        </div>
        <!-- <button class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold">Order History</button>
        <button class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold">Order History</button> -->
    </nav>

     <!-- Category Navigation Section -->
     <section class="text-center mt-8 w-full max-w-6xl mx-auto">
        <h2 class="text-4xl font-semibold mb-8 text-gray-800">Menu</h2>
        <div class="flex justify-center space-x-6 px-4">
            <a href="#drinks" class="category-button bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-500 transition duration-300">Breakfast</a>
            <a href="#burgers" class="category-button bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-500 transition duration-300">Burgers</a>
            <a href="#snacks" class="category-button bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-500 transition duration-300">Chickenjoy</a>
            <a href="#meats" class="category-button bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-500 transition duration-300">Jolly Spaghetti</a>
            <a href="#sides" class="category-button bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-500 transition duration-300">Beverages</a>
            <a href="#sides" class="category-button bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-500 transition duration-300">Palabok</a>
        </div>
    </section>

    <!-- Drinks Category -->
    <section id="drinks" class="mt-12 px-4">
        <h3 class="text-3xl font-semibold mb-6 text-center text-gray-800">Beverages</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Drink 1 -->
            <div class="food-card bg-white p-6 rounded-lg text-center transition duration-300">
                <img src="/coffee.png" alt="Lemonade" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Coffee</h3>
                <h1 class=" mb-2">Freshly brewed coffee with a balance of strong coffee taste, milk taste and just the right sweetness</h1> 
                <!-- <p class="text-blue-600 font-bold mb-2">₱99.99</p> -->
                <a href="{{ url('/order') }}" class="bg-yellow-500 mt-9 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Add to Cart</a>
            </div>

            <!-- Drink 2 -->
            <div class="food-card bg-white p-6 rounded-lg text-center transition duration-300">
                <img src="/cokes.png" alt="Iced Tea" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Coke</h3>
                <h1 class=" mb-2">Refreshing, ice-cold Coke to perfectly match your favorite meal</h1>
                <!-- <p class="text-blue-600 font-bold mb-2">₱129.99</p> -->
                <a href="{{ url('/order') }}" class="bg-yellow-500 mt-9 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Add to Cart</a>
            </div>

            <!-- Drink 3 -->
            <div class="food-card bg-white p-6 rounded-lg text-center transition duration-300">
                <img src="/cokess.png" alt="Mango Shake" class="w-full h-15 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Coke Float</h3>
                <h1 class=" mb-2">Coke soda topped with creamy vanilla soft serve and rich, indulgent chocolate syrup</h1>
                <!-- <p class="text-blue-600 font-bold mb-2">₱149.99</p> -->
                <a href="{{ url('/order') }}" class="bg-yellow-500 mt-9 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Add to Cart</a>
            </div>

            <!-- Drink 4 -->
            <div class="food-card bg-white p-6 rounded-lg text-center transition duration-300">
                <img src="/zero.png" alt="Orange Juice" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Coke Zero</h3>
                <h1 class=" mb-2">Refreshing, ice-cold Coke Zero to perfectly match your favorite meal</h1>
                <!-- <p class="text-blue-600 font-bold mb-2">₱119.99</p> -->
                <a href="{{ url('/order') }}" class="bg-yellow-500 mt-9 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Add to Cart</a >
            </div>

            <!-- Drink 5 -->
            <div class="food-card bg-white p-6 rounded-lg text-center transition duration-300">
                <img src="/iced.png" alt="Coca-Cola" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Ice Tea</h3>
                <h1 class=" mb-2">Delicous, ice-cold lemon flavored Iced Tea that will definitely complement any meal</h1>
                <!-- <p class="text-blue-600 font-bold mb-2">₱69.99</p> -->
                <a href="{{ url('/order') }}" class="bg-yellow-500 mt-9 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Add to Cart</a >
            </div>


            <!-- Drink 6 -->
            <div class="food-card bg-white p-6 rounded-lg text-center transition duration-300">
                <img src="/hot.png" alt="Strawberry Milkshake" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Hot Chocolate</h3>
                <h1 class=" mb-2">Hot, rich and creamy chocolate drink.</h1>
                <!-- <p class="text-blue-600 font-bold mb-2">₱159.99</p> -->
                <a href="{{ url('/order') }}" class="bg-yellow-500 mt-9 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Add to Cart</a >
            </div>

            <!-- Drink 7 -->
            <div class="food-card bg-white p-6 rounded-lg text-center transition duration-300">
                <img src="/royal.png" alt="Green Tea" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Royal</h3>
                <h1 class=" mb-2">Refreshing, ice-cold Royal to perfectly match your favorite meal</h1>
                <!-- <p class="text-blue-600 font-bold mb-2">₱89.99</p> -->
                <a href="{{ url('/order') }}" class="bg-yellow-500 mt-9 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Add to Cart</a >
            </div>

            <!-- Drink 8 -->
            <div class="food-card bg-white p-6 rounded-lg text-center transition duration-300">
                <img src="/juice.png" alt="Peach Smoothie" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Pineapple Juice</h3>
                <h1 class=" mb-2">Natural pineapple juice drink for those looking for a healthy alternative</h1>
                <!-- <p class="text-blue-600 font-bold mb-2">₱139.99</p> -->
                <a href="{{ url('/order') }}" class="bg-yellow-500 mt-9 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Add to Cart</a >
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-red-500 text-white w-full mt-12 p-8">
    <!-- Follow Us Section -->
    <div class="text-center mb-8">
        <h4 class="text-xl font-semibold mb-4">Follow Us</h4>
        <div class="flex justify-center space-x-6">
            <a href="#" class="text-yellow-400 hover:text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23 12c0-6.627-5.373-12-12-12S-1 5.373-1 12 3.373 24 10 24c5.016 0 9.294-3.09 10.71-7.404h-1.91c-.832 2.441-3.13 4.126-6.186 4.126-3.657 0-6.658-2.69-7.18-6.142-.014-.086-.023-.174-.023-.261 0-1.023.298-1.998.831-2.827 1.541-2.423 4.649-3.392 7.057-2.495 2.292.696 4.064 2.664 4.635 4.997 0 .014 0 .03-.008.045h1.95c.046-.315.08-.632.08-.951z"/>
                </svg>
            </a>
            <a href="#" class="text-yellow-400 hover:text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.498 12c0-5.476-4.47-9.946-9.946-9.946-5.477 0-9.946 4.47-9.946 9.946s4.469 9.946 9.946 9.946c5.476 0 9.946-4.47 9.946-9.946zM16.475 7.944c0 .718-.579 1.298-1.298 1.298h-3.469c-.719 0-1.298-.579-1.298-1.298v-3.467c0-.718.579-1.298 1.298-1.298h3.469c.719 0 1.298.579 1.298 1.298v3.467zM16.475 17.191c0 .718-.579 1.298-1.298 1.298h-3.469c-.719 0-1.298-.579-1.298-1.298v-3.467c0-.718.579-1.298 1.298-1.298h3.469c.719 0 1.298.579 1.298 1.298v3.467z"/>
                </svg>
            </a>
            <a href="#" class="text-yellow-400 hover:text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M13 8h-2V5c0-.552-.448-1-1-1h-1c-.552 0-1 .448-1 1v3h-2c-.552 0-1 .448-1 1v3c0 .552.448 1 1 1h2v9c0 .552.448 1 1 1h3c.552 0 1-.448 1-1v-9h2c.552 0 1-.448 1-1v-3c0-.552-.448-1-1-1z"/>
                </svg>
            </a>
        </div>
    </div>

    <!-- How to Order Section -->
    <div class="text-center mb-8">
        <h4 class="text-xl font-semibold mb-4">How To Order</h4>
        <div class="flex justify-center space-x-8">
            <a href="#view-menu" class="text-yellow-400 hover:text-yellow-500">View Menu</a> <a>|</a>
            <a href="#delivery" class="text-yellow-400 hover:text-yellow-500">Delivery</a> <a>|</a>
            <a href="#locations" class="text-yellow-400 hover:text-yellow-500">Locations</a>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="text-center mb-8">
        <h4 class="text-xl font-semibold mb-4">About Us</h4>
        <p class="text-lg text-gray-300">We are a food delivery service dedicated to providing delicious meals right to your doorstep with fast and reliable service.</p>
    </div>

    <!-- About Our Website Section -->
    <div class="text-center">
        <h4 class="text-xl font-semibold mb-4">About Our Website</h4>
        <p class="text-lg text-gray-300">Our website is designed to make your food ordering experience as seamless as possible, from browsing the menu to checking out and tracking your delivery.</p>
    </div>

    <div class="text-center mt-8">
        <p>&copy; 2025 Food Ordering Service. All Rights Reserved.</p>
    </div>
</footer>

    </body>
</html>