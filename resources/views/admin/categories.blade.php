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

      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse bg-white dark:bg-dark-half rounded-lg">
          <thead>
            <tr class="text-left border-b border-gray-300 dark:border-gray-700">
              <th class="p-4">#</th>
              <th class="p-4">Category Name</th>
              <th class="p-4 text-right">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <td class="p-4">1</td>
              <td class="p-4">Music</td>
              <td class="p-4 text-right">
                <button onclick="openEditPopup('Music')" class="text-light-primary dark:text-dark-primary hover:underline">Edit</button>
                <button class="ml-4 text-red-500 hover:underline">Delete</button>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <td class="p-4">2</td>
              <td class="p-4">Technology</td>
              <td class="p-4 text-right">
                <button onclick="openEditPopup('Technology')" class="text-light-primary dark:text-dark-primary hover:underline">Edit</button>
                <button class="ml-4 text-red-500 hover:underline">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Edit Modal -->
      <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white dark:bg-dark-half p-6 rounded-lg shadow-lg w-96">
          <h2 class="text-xl font-semibold mb-4">Edit Category</h2>
          <input type="text" id="editCategoryName" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-4" />
          <div class="flex justify-end space-x-2">
            <button onclick="closeEditPopup()" class="px-4 py-2 bg-gray-300 dark:bg-gray-700 rounded-lg">Cancel</button>
            <button class="px-4 py-2 bg-dark-primary text-white rounded-lg">Save</button>
          </div>
        </div>
      </div>

      <!-- Add Modal -->
      <div id="addModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white dark:bg-dark-half p-6 rounded-lg shadow-lg w-96">
          <h2 class="text-xl font-semibold mb-4">Add New Category</h2>
          <input type="text" id="newCategoryName" placeholder="Enter category name" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-4" />
          <div class="flex justify-end space-x-2">
            <button onclick="closeAddPopup()" class="px-4 py-2 bg-gray-300 dark:bg-gray-700 rounded-lg">Cancel</button>
            <button class="px-4 py-2 bg-dark-primary text-white rounded-lg">Add</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- JS Modal Functions -->
  <script>
    function openEditPopup(name) {
      document.getElementById('editCategoryName').value = name;
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
