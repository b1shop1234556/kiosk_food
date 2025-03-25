<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Options</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            /* padding: 20px; */
        }
        .payment-options {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .payment-option {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            width: 150px;
            text-align: center;
            cursor: pointer;
        }
        .payment-option img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <img src="/poster.jpg" alt="Food Item" class="w-full h-auto object-cover landscape" style="height: 50vh; width: 100vw;">
    <h1 class="p-5 font-bold">Select your payment options</h1>
    <div class="payment-options">
        <div class="payment-option">
            <img src="/gcash.jpg" alt="Visa/MasterCard">
            <p>Debit & Credit Cards</p>
        </div>
        <div class="payment-option">
            <img src="/maya.jpg"  alt="PayMaya">
            <p>PayMaya</p>
        </div>
        <div class="payment-option">
            <img src="/apple.png"  alt="Apple Pay">
            <p>Apple Pay</p>
        </div>
        <div class="payment-option">
            <img src="/google.png"  alt="Google Pay">
            <p>Google Pay</p>
        </div>

        <div class="mt-6 w-full max-w-2xl px-4">
        <!-- <h2 class="text-lg font-semibold text-center">Payment Options</h2> -->
        <div class="p-4 rounded-lg mt-4">
            <div class="flex justify-center">
                <a href="{{ url('/order') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg font-semibold">Back to Order</a>
            </div>
        </div>
    </div> 
</body>
</html>