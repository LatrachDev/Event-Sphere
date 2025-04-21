<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - Events</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light-background text-light-text dark:bg-dark-background dark:text-dark-text font-poppins">
<div class="flex min-h-screen">

    @include('partials.sidebar')

    <div class="flex-1 p-8 font-montserrat">
        <h1 class="text-3xl font-semibold my-10">Manage Events</h1>

        <div class="mb-6 flex justify-between">
            <button onclick="openAddPopup()" class="bg-light-accent dark:bg-dark-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80">+ Add New Event</button>
        </div>

        @if (session('success'))
            <div id="successMessage" class="bg-green-100 border border-green-400 text-dark-success px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(() => {
                    const msg = document.getElementById('successMessage');
                    if (msg) msg.style.display = 'none';
                }, 5000);
            </script>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <!-- Events Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse bg-light-half dark:bg-dark-half rounded-lg">
                <thead>
                <tr class="text-left border-b border-gray-300 dark:border-gray-700">
                    <th class="p-4">#</th>
                    <th class="p-4">Image</th>
                    <th class="p-4">Title</th>
                    <th class="p-4">Category</th>
                    <th class="p-4">Start Time</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Tickets</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
                </thead>
                @forelse ($events as $event)
                    <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="p-4">{{ $event->id }}</td>

                        <td class="p-4">
                            @if ($event->image)
                                <img src="{{ asset('storage/' . str_replace('public/', '', $event->image)) }}" alt="{{ $event->title }}" class="w-20 h-20 object-cover rounded">
                            @else
                                <span class="text-gray-400 italic">No image</span>
                            @endif
                        </td>

                        <td class="p-4">{{ $event->title }}</td>
                        <td class="p-4">{{ $event->category->name }}</td>
                        <td class="p-4">{{ $event->start_time }}</td>
                        <td class="p-4">{{ $event->price ?? 'Free' }} $</td>
                        <td class="p-4">{{ $event->number_of_tickets }}</td>
                        <td class="p-4 text-right">

                        <button onclick='openEditPopup(@json($event))' class="text-light-primary dark:text-dark-primary hover:underline">Edit</button>
                            <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-4 text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @empty
                        <div class="bg-white dark:bg-dark-half shadow-md rounded-lg p-6">
                            <p class="text-center text-gray-500">No events found.</p>
                        </div>
                    @endforelse
                    
                    </tbody>
            </table>
            <div class="mt-4">
                {{ $events->links() }}
            </div>
        </div>

        <!-- Edit Modal -->
        <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <form id="editForm" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-dark-half p-6 rounded-lg shadow-lg w-96">
                @csrf
                @method('PUT')
                <h2 class="text-xl font-semibold mb-4">Edit Event</h2>
                <input type="text" name="title" id="editTitle" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2" />
                <textarea name="description" id="editDescription" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2"></textarea>
                <input type="datetime-local" name="start_time" id="editStartTime" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2" />
                <select name="category_id" id="editCategory" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="price" id="editPrice" placeholder="Leave empty for Free" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2" />
                <input type="number" name="number_of_tickets" id="editTickets" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-4" />
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Upload Image</label>
                <input type="file" name="image" accept="image/*" class="w-full mb-4 dark:bg-dark-background dark:text-dark-text" /> 
                <div class="flex justify-end space-x-2">
                    <button onclick="closeEditPopup()" class="px-4 py-2 bg-gray-300 dark:bg-gray-700 rounded-lg">Cancel</button>
                    <button class="px-4 py-2 bg-dark-primary text-white rounded-lg">Save</button>
                </div>
            </form>
        </div>

        <!-- Add Modal -->
        <div id="addModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-dark-half p-6 rounded-lg shadow-lg w-96">
                @csrf
                <h2 class="text-xl font-semibold mb-4">Add New Event</h2>

                <input type="text" name="title" placeholder="Title" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2" />

                <textarea name="description" placeholder="Description" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2"></textarea>

                <input type="datetime-local" name="start_time" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2" />

                <select name="category_id" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <!-- Price -->
                <input type="number" name="price" placeholder="Leave empty for Free" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2">

                <!-- Number of Tickets -->
                <input type="number" name="number_of_tickets" placeholder="Number of Tickets" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2">

                <!-- Image Upload -->
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Upload Image</label>
                <input type="file" name="image" accept="image/*" class="w-full mb-4 dark:bg-dark-background dark:text-dark-text" />

                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeAddPopup()" class="px-4 py-2 bg-gray-300 dark:bg-gray-700 rounded-lg">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-light-primary dark:bg-dark-accent text-white rounded-lg">Add</button>
                </div>
            </form>
        </div>


        <!-- Requested Events Table -->
        <h2 class="text-2xl font-semibold mt-10 mb-4">Requested Events</h2>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse bg-light-half dark:bg-dark-half rounded-lg">
                <thead>
                <tr class="text-left border-b border-gray-300 dark:border-gray-700">
                    <th class="p-4">#</th>
                    <th class="p-4">Title</th>
                    <th class="p-4">Submitted By</th>
                    <th class="p-4">Actions</th>
                </tr>
                </thead>
                <tbody>
                <!-- foreach ($requestedEvents as $request) -->
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="p-4">id</td>
                        <td class="p-4">title</td>
                        <td class="p-4">name</td>
                        <td class="p-4">
                            <form  method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-green-500 hover:underline">Approve</button>
                            </form>
                            <form  method="POST" class="inline ml-4">
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Reject</button>
                            </form>
                        </td>
                    </tr>
                <!-- endforeach -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function openEditPopup(event) {
        document.getElementById('editTitle').value = event.title;
        document.getElementById('editDescription').value = event.description;
        document.getElementById('editStartTime').value = event.start_time.slice(0, 16); // fixes datetime-local input
        document.getElementById('editCategory').value = event.category_id;
        document.getElementById('editPrice').value = event.price;
        document.getElementById('editTickets').value = event.number_of_tickets;

        const form = document.getElementById('editForm');
        form.action = `/events/${event.id}`; // Uses your resource route

        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeEditPopup() {
        document.getElementById('editModal').classList.add('hidden');
    }
    function openAddPopup() {
        document.getElementById('addModal').classList.remove('hidden');
    }
    function closeAddPopup() {
        document.getElementById('addModal').classList.add('hidden');
    }
</script>
</body>
</html>