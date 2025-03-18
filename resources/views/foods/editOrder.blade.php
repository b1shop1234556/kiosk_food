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
        <h1 class="text-2xl text-red-500 font-bold ml-2">Welcome, Qpal</h1>
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
   
    <div class="mt-6 text-center">
        <h2 class="text-lg font-semibold text-right pl-4">Your Order</h2>
    </div>
    <!-- Food Items Grid -->
    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mt-6 w-full max-w-2xl px-4">
        <div class="bg-white p-4 shadow-md rounded-lg text-center flex items-center">
            <p class="p-5">1x</p>
            <div class="w-1/4">
                <img src="/Cheeseburger.jpg" alt="Food Item" class="w-auto h-auto object-cover rounded-md">
            </div>
            <div class="w-3/4 pl-4 text-left">
            <h3 class="mt-2 font-semibold">Jolly Spaghetti with Yumburger</h3>
            <ul class="list-disc list-inside">
                <li>Jolly Crispy Fries (L)</li>
                <li>Coke (L)</li>
                <li>Coke (L)</li>
            </ul>
            <p class="text-blue-600 text-right font-bold mt-2">$12.50</p>
            </div>
        </div>

        <div class="bg-white p-4 shadow-md rounded-lg text-center flex items-center">
            <p class="p-5">1x</p>
            <div class="w-1/4">
                <img src="/Cheeseburger.jpg" alt="Food Item" class="w-auto h-auto object-cover rounded-md">
            </div>
            <div class="w-3/4 pl-4 text-left">
            <h3 class="mt-2 font-semibold">Jolly Spaghetti with Yumburger</h3>
            <ul class="list-disc list-inside">
                <li>Jolly Crispy Fries (L)</li>
                <li>Coke (L)</li>
                <li>Coke (L)</li>
            </ul>
            <p class="text-blue-600 text-right font-bold mt-2">$12.50</p>
            </div>
        </div>

        <div class="bg-white p-4 shadow-md rounded-lg text-center flex items-center">
            <p class="p-5">1x</p>
            <div class="w-1/4">
                <img src="/Cheeseburger.jpg" alt="Food Item" class="w-auto h-auto object-cover rounded-md">
            </div>
            <div class="w-3/4 pl-4 text-left">
            <h3 class="mt-2 font-semibold">Jolly Spaghetti with Yumburger</h3>
            <ul class="list-disc list-inside">
                <li>Jolly Crispy Fries (L)</li>
                <li>Coke (L)</li>
                <li>Coke (L)</li>
            </ul>
            <p class="text-blue-600 text-right font-bold mt-2">$12.50</p>
            </div>
        </div>
    </div>
    
    <!-- Payment Option -->
    <div class="mt-6 w-full max-w-2xl px-4">
        <!-- <h2 class="text-lg font-semibold text-center">Payment Options</h2> -->
        <div class="p-4 rounded-lg mt-4">
            <div class="flex justify-center">
                <a href="{{ url('/payment') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg font-semibold">Proceed to Payment</a>
            </div>
        </div>
    </div>
    
</body>
</html>