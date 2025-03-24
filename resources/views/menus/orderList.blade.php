<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center p-4">

    <nav class="bg-blue-100 w-full p-4 shadow-md flex justify-between items-center text-white">
        <h1 class="text-2xl text-red-500 font-bold ml-2">Welcome, Dionece</h1>
        <a href="/" class="bg-yellow-400 px-2 py-1 rounded-lg font-semibold flex items-center">Home</a>
    </nav>

    <section class="text-center mt-8 w-full max-w-6xl mx-auto">
        <h2 class="text-4xl font-semibold mb-8 text-gray-800">Menu</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($menus as $menu)
                <div class="food-card bg-white p-6 rounded-lg text-center shadow-lg">
                    <img src="{{ $menu->menu_image }}" alt="{{ $menu->name }}" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="font-semibold text-xl mb-2">{{ $menu->name }}</h3>
                    <p class="text-gray-600 mb-2">{{ $menu->description }}</p>
                    <p class="text-blue-600 font-bold mb-2">₱{{ number_format($menu->price, 2) }}</p>
                    <a href="{{ url('/order') }}" class="bg-yellow-500 mt-4 px-6 py-3 rounded-full font-semibold text-white hover:bg-red-700 transition duration-300">Add to Cart</a>
                </div>
            @endforeach
        </div>
    </section>

    <footer class="bg-red-500 text-white w-full mt-12 p-4 text-center">
        <p>&copy; {{ date('Y') }} Food Ordering System</p>
    </footer>

</body>
</html>
