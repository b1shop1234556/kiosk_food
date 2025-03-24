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
        <h1 class="text-2xl text-red-500 font-bold ml-2">Welcome, Dionece</h1>
        <div class="flex space-x-2">
            <a href="/" class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2a1 1 0 00-.707.293l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h4a1 1 0 001-1v-4h2v4a1 1 0 001 1h4a1 1 0 001-1v-6.586l1.293 1.293a1 1 0 001.414-1.414l-7-7A1 1 0 0010 2z" fill="black" />
            </svg>
            </a>
        </div>
        <!-- <button class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold">Order History</button>
        <button class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold">Order History</button> -->
    </nav>
   
    <!-- Cart Page -->
    <section class="max-w-6xl mx-auto mt-12 px-4">
        <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">Your Cart</h2>
        
        <!-- Cart Table -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="text-left py-2 px-4 font-semibold text-gray-600">Item</th>
                        <th class="text-left py-2 px-4 font-semibold text-gray-600">Price</th>
                        <th class="text-left py-2 px-4 font-semibold text-gray-600">Quantity</th>
                        <th class="text-left py-2 px-4 font-semibold text-gray-600">Total</th>
                        <th class="text-left py-2 px-4 font-semibold text-gray-600">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Cart Item 1 -->
                    <tr class="cart-item border-b">
                        <td class="py-4 px-4 flex items-center">
                            <img src="/Cheeseburger.jpg" alt="Lemonade" class="w-16 h-16 object-cover rounded-md mr-4">
                            <span>Cheese Burger</span>
                        </td>
                        <td class="py-4 px-4 text-blue-600">₱99.99</td>
                        <td class="py-4 px-4">
                            <input type="number" value="1" min="1" class="w-16 px-2 py-1 text-center border rounded-md">
                        </td>
                        <td class="py-4 px-4 text-blue-600">₱99.99</td>
                        <td class="py-4 px-4">
                            <button class="text-red-600 hover:text-red-700">Remove</button>
                        </td>
                    </tr>
                    
                    <!-- Cart Item 2 -->
                    <tr class="cart-item border-b">
                        <td class="py-4 px-4 flex items-center">
                            <img src="/iced.png" alt="Iced Tea" class="w-16 h-16 object-cover rounded-md mr-4">
                            <span>Iced Tea</span>
                        </td>
                        <td class="py-4 px-4 text-blue-600">₱129.99</td>
                        <td class="py-4 px-4">
                            <input type="number" value="2" min="1" class="w-16 px-2 py-1 text-center border rounded-md">
                        </td>
                        <td class="py-4 px-4 text-blue-600">₱259.98</td>
                        <td class="py-4 px-4">
                            <button class="text-red-600 hover:text-red-700">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Cart Total -->
            <div class="mt-6 flex justify-end text-xl font-semibold">
                <span class="text-gray-800">Total: </span>
                <span class="text-blue-600">₱359.97</span>
            </div>

            <!-- Checkout Button -->
            <div class="mt-6 text-right">
                <a href="{{ url('/payment') }}" class="bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-300 transition duration-300">Proceed to Checkout</a>
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