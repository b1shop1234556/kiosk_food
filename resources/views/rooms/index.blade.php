<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Rooms List</h1>

        @if ($rooms->isEmpty())
            <p class="text-gray-500 text-center">No rooms found.</p>
        @else
            <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-md">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Room Name</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Location</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Capacity</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-6 text-sm text-gray-700">{{ $room->roomname }}</td>
                                <td class="py-3 px-6 text-sm text-gray-500">{{ $room->location }}</td>
                                <td class="py-3 px-6 text-sm text-gray-500">{{ $room->capacity }}</td>
                                <td class="py-3 px-6 text-sm text-gray-500 flex space-x-3">
                                    
                                    <!-- Edit Button -->
                                    <a href="{{ route('rooms.edit', $room->id) }}" 
                                       class="inline-block px-4 py-2 text-indigo-600 hover:text-indigo-800 border border-indigo-600 rounded-md transition duration-200">
                                        Edit
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this room?');" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="inline-block px-4 py-2 text-red-500 hover:text-red-700 border border-red-500 rounded-md transition duration-200">
                                            Delete
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <div class="mt-8 text-center">
            <a href="{{ route('rooms.create') }}" 
               class="inline-block px-6 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition duration-200">
                Create New Room
            </a>
        </div>
    </div>

    
    <!-- Success Message -->
    @if (session('success'))
        <div id="success-message" class="fixed top-0 left-0 right-0 z-50 flex justify-center items-center p-4">
            <div class="bg-green-100 border-t-4 border-green-500 text-green-700 p-4 mb-4 rounded-md w-96">
                <p>{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <!-- Script to auto-dismiss success message -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                // Set a timeout to hide the success message after 5 seconds
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 5000); // 5000 milliseconds = 5 seconds
            }
        });
    </script>

</body>
</html>
