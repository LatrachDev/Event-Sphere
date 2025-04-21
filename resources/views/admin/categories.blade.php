<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - Categories</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light-background text-light-text dark:bg-dark-background dark:text-dark-text font-poppins">
  <div class="flex min-h-screen">
  
    @include('partials.sidebar')
    
    <div class="flex-1 p-8 font-montserrat">
      <h1 class="text-3xl font-semibold my-10">Manage Categories</h1>

      <!-- Add Button -->
      <div class="mb-6 flex justify-between">
        <button onclick="openAddPopup()" class="bg-light-accent dark:bg-dark-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80">+ Add New Category</button>
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

      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse bg-light-half dark:bg-dark-half rounded-lg">
          <thead>
            <tr class="text-left border-b border-gray-300 dark:border-gray-700">
              <th class="p-4">#</th>
              <th class="p-4">Category Name</th>
              <th class="p-4 text-right">Actions</th>
            </tr>
          </thead>
          @forelse ($categories as $category)
          <tbody>
     
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <td class="p-4">{{ $category->id }}</td>
                <td class="p-4">{{ $category->name }}</td>
                <td class="p-4 text-right">
                  <button onclick="openEditPopup('{{ $category->name }}', {{ $category->id }})" class="text-light-primary dark:text-dark-primary hover:underline">Edit</button>
                  
                  <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ml-4 text-red-500 hover:underline">Delete</button>
                  </form>
                
                </td>
              </tr>
              
          @empty
          <div class="bg-white dark:bg-dark-half shadow-md rounded-lg p-6">
            <p class="text-center text-gray-500">No categories found.</p>
          </div> 
          @endforelse

            </tbody>
          </table>
          <div class="mt-4">
            {{ $categories->links() }}
          </div>
        </div>
        


      <!-- Edit Modal -->
      <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <form id="editForm" method="POST" class="bg-white dark:bg-dark-half p-6 rounded-lg shadow-lg w-96">
          @csrf
          @method('PUT')
          <h2 class="text-xl font-semibold mb-4">Edit Category</h2>
          <input type="text" name="name" id="editCategoryName" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-4" />
          <div class="flex justify-end space-x-2">
            <button onclick="closeEditPopup()" class="px-4 py-2 bg-gray-300 dark:bg-gray-700 rounded-lg">Cancel</button>
            <button class="px-4 py-2 bg-dark-primary text-white rounded-lg">Save</button>
          </div>
        </form>
      </div>

      <!-- Add Modal -->
      <div id="addModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        
        <form action="{{ route('categories.store') }}" method="POST" class="bg-white dark:bg-dark-half p-6 rounded-lg shadow-lg w-96">
          @csrf
          <h2 class="text-xl font-semibold mb-4">Add New Category</h2>

          <input type="text" name="name" id="newCategoryName" placeholder="Enter category name" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-4" />
          
          <div class="flex justify-end space-x-2">
            <button onclick="closeAddPopup()" class="px-4 py-2 bg-gray-300 dark:bg-gray-700 rounded-lg">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-light-primary dark:bg-dark-accent text-white rounded-lg">Add</button>
          </div>

        </form>
        
      </div>
    </div>
  </div>

  <!-- JS Modal Functions -->
  <script>
    function openEditPopup(name, id) {
      document.getElementById('editCategoryName').value = name;

      const form = document.getElementById('editForm');
      form.action = `/categories/${id}`;

      document.getElementById('editModal').classList.remove('hidden');
    }
    function closeEditPopup() {
      document.getElementById('editModal').classList.add('hidden');
    }

    function openAddPopup() {
      document.getElementById('newCategoryName').value = '';
      document.getElementById('addModal').classList.remove('hidden');
    }
    function closeAddPopup() {
      document.getElementById('addModal').classList.add('hidden');
    }
  </script>

   <script>
        const menu = document.getElementById('mobile-menu');
        const menuLinks = document.querySelectorAll('#mobile-menu a');
        
        document.getElementById('menu-button').onclick = () => menu.classList.remove('-translate-y-full');
        document.getElementById('close-button').onclick = () => menu.classList.add('-translate-y-full');
        
        menuLinks.forEach(link => {
            link.onclick = () => menu.classList.add('-translate-y-full');
        });
        
        // dark mode toggle
        function toggleDarkMode() {
            document.documentElement.classList.toggle("dark");
            localStorage.setItem("theme", document.documentElement.classList.contains("dark") ? "dark" : "light");
        }

        // check for saved theme preference
        if (localStorage.getItem("theme") === "dark" || 
            (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        }
    </script>
    
</body>
</html>
