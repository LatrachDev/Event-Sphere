<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
      if (
        localStorage.getItem("theme") === "dark" ||
        (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)
      ) {
        document.documentElement.classList.add("dark");
      }
    </script>
</head>
<body class="bg-light-background text-light-text dark:bg-dark-background dark:text-dark-text font-poppins">

    <div class="flex min-h-screen">

    @include('partials.sidebar', ['requestedCount' => $requestedCount])
        <!-- Main content -->
        <div class="flex-1 p-8 font-montserrat">
            <h1 class="text-3xl font-semibold mb-10">Admin Dashboard</h1>
            
            <!-- <h2 class="text-lg mb-6">Statistics</h2> -->
            
            <!-- Stat cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <!-- Total Users -->
                <div class="bg-dark-accent text-dark-text py-7 hover:text-dark-text rounded-lg p-4 flex flex-col transition-all duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
                    <div class="flex justify-between mb-2">
                        <span>Total Users</span>
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="text-4xl font-bold ">{{ $totalUsers }}</div>
                </div>

                <!-- Total Events -->
                <div class="bg-dark-half py-7 rounded-lg p-4 flex flex-col transition-all text-dark-text hover:text-dark-text duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
                    <div class="flex justify-between mb-2">
                        <span class="dark:text-dark-text">Total Events</span>
                        <i class="fas fa-eye dark:text-dark-text"></i>
                    </div>
                    <div class="text-4xl font-bold dark:text-dark-text">{{ $totalEvents }}</div>
                </div>

                <!-- Incoming Events -->
                <div class="bg-dark-half py-7 rounded-lg p-4 flex flex-col transition-all duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
                    <div class="flex justify-between mb-2">
                        <span class="text-dark-text dark:text-dark-text">Incoming Events <span class="text-xs">(30days Left)</span> </span>
                        <i class="fas fa-chart-line text-dark-text dark:text-dark-text"></i>
                    </div>
                    <div class="text-4xl font-bold text-dark-text dark:text-dark-text">{{ $incomingEvents }}</div>
                </div>

                <!-- Closed Events -->
                <div class="bg-dark-half py-7 rounded-lg p-4 flex flex-col transition-all duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
                    <div class="flex justify-between mb-2">
                        <span class="text-dark-text dark:text-dark-text">Closed Events</span>
                        <i class="fas fa-chart-line text-dark-text dark:text-dark-text"></i>
                    </div>
                    <div class="text-4xl font-bold text-dark-text dark:text-dark-text">{{ $pastEventsCount  }}</div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="grid grid-cols-3 gap-4">
                <!-- Pie Chart -->
                <div class="bg-white rounded-lg p-4">
                    <canvas id="pieChart"></canvas>
                </div>
                
                <!-- Bar Chart - Span 2 columns -->
                <div class="bg-dark-half rounded-lg p-4 col-span-2">
                    <!-- Bar chart implementation -->
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        const menu = document.getElementById('mobile-menu');
        const menuLinks = document.querySelectorAll('#mobile-menu a');
        
        document.getElementById('menu-button').onclick = () => menu.classList.remove('-translate-y-full');
        document.getElementById('close-button').onclick = () => menu.classList.add('-translate-y-full');
        
        menuLinks.forEach(link => {
            link.onclick = () => menu.classList.add('-translate-y-full');
        });
        
        function toggleDarkMode() {
          document.documentElement.classList.toggle("dark");
          localStorage.setItem("theme", document.documentElement.classList.contains("dark") ? "dark" : "light");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    // PIE CHART
    const pieData = @json(array_values($eventsStatus)); 
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Approved', 'Pending'],
            datasets: [{
                label: 'Event Status',
                data: pieData, 
                backgroundColor: ['#C228F6', '#721093'],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    labels: {
                        color: '#1A1E30',
                        font: {
                            size: 10,
                            family: 'Poppins, sans-serif',
                            weight: 'bold'
                        }
                    }
                }
            }
        }
    });

    // BAR CHART
    const monthlyLabels = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
    const monthlyData = {!! json_encode($eventsPerMonth) !!};
    const currentYear = {!! json_encode($year) !!};

    const ctx = document.getElementById('barChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: monthlyLabels,
            datasets: [{
                label: `Events per Month (${currentYear})`,
                data: monthlyData,
                backgroundColor: '#D28BEA'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });
</script>



</body>
</html>