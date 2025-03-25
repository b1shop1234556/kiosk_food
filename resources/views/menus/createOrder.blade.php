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
            Order History
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

    <!-- Hero Section -->
    <section class="text-center mt-1 bg-red-500 text-white p-12 w-full max-w-8xl">
        <h2 class="text-4xl font-semibold mb-6 font-bold">Bringing joy to you</h2>
        <p class="text-xl font-semibold mb-6">Have your Jollibee favorites delivered right to your doorstep!</p>
        <a  href="{{ url('/menu') }}" class="bg-yellow-500 mt-6 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Order Now</a>
    </section>

    <!-- Exclusive Bundles Section -->
    <div id="exclusive-bundles" class="mt-12 text-center w-full">
        <h3 class="text-3xl font-semibold mb-8">Exclusive Bundles</h3>
        <div class="flex justify-center space-x-6 px-4">
            <div class="bg-white p-6 rounded-lg text-center transition duration-300 hover:scale-105 transform">
                <img src="/snaks.png" alt="Bundle 1" class="w-full h-full object-cover rounded-md mb-4">
                <!-- <h3 class="font-semibold text-xl mb-2">Family Feast</h3>
                <p class="text-blue-600 font-bold mb-2">₱1,499.99</p> -->
                <!-- <button class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">Add to Cart</button> -->
            </div>
            <div class="bg-white p-6 rounded-lg text-center transition duration-300 hover:scale-105 transform">
                <img src="/bundles.png" alt="Bundle 2" class="w-full h-full object-cover rounded-md mb-4">
                <!-- <h3 class="font-semibold text-xl mb-2">Party Pack</h3>
                <p class="text-blue-600 font-bold mb-2">₱2,099.99</p> -->
                <!-- <button class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">Add to Cart</button> -->
            </div>
            <div class="bg-white p-6 rounded-lg text-center transition duration-300 hover:scale-105 transform">
                <img src="/joy.png" alt="Bundle 3" class="w-full h-full object-cover rounded-md mb-4">
                <!-- <h3 class="font-semibold text-xl mb-2">Ultimate Meal Deal</h3>
                <p class="text-blue-600 font-bold mb-2">₱2,499.99</p> -->
                <!-- <button class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">Add to Cart</button> -->
            </div>
        </div>
        <a href="#view-all-bundles" class="text-blue-600 font-semibold mt-6 inline-block">See All Bundles</a>
    </div>
    

    <!-- Food Items Grid -->
    <h3 class="text-3xl font-semibold mt-6 mb-8">Featured Menu Items</h3>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 w-full max-w-4xl px-4">
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="/breakfast.png" alt="Food Item" class="w-full h-auto object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Breakfast</h3>
           
            <!-- <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button> -->
        </div>
        
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="/burgers.png" alt="Food Item" class="w-full h-auto object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Burgers</h3>
            
            <!-- <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button> -->
        </div>
        
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="/chickenjoy.png" alt="Food Item" class="w-full h-auto object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Chickenjoy</h3>
            
            <!-- <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button> -->
        </div>
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="/jolly.png" alt="Food Item" class="w-full h-auto object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Jolly Spaghetti</h3>
           
            <!-- <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button> -->
        </div>

        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="/coke.png" alt="Food Item" class="w-full h-auto object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Beverages</h3>
           
            <!-- <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button> -->
        </div>
        
        <div class="bg-white p-4 shadow-md rounded-lg text-center">
            <img src="/palabok.png" alt="Food Item" class="w-full h-auto object-cover rounded-md">
            <h3 class="mt-2 font-semibold">Palabok</h3>
          
            <!-- <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add to Cart</button> -->
        </div>
        
        
    </div>

    <a  href="{{ url('/menu') }}" class="bg-yellow-500 mt-6 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">View All Menu</a>

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