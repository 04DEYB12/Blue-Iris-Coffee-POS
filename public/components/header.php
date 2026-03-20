<header class="main-header p-4 flex items-center gap-4 bg-blue-950 shadow-sm border-b border-gray-200 z-[50] sticky top-0" style="left: 288px; right: 0; width: 100%;">
    <button class="sidebar-toggle p-2 rounded-lg hover:bg-gray-100 transition-colors" id="sidebarToggle">
        <i class='bx bx-menu text-xl text-white'></i>
    </button>
    <h1 id="pageTitle" class="text-2xl font-bold text-white">DASHBOARD</h1>
    <div class="ml-auto flex items-center gap-4 text-white">
        <div class="flex items-center gap-2">
            <i class='bx bx-calendar text-lg'></i>
            <span id="philippinesDate" class="text-sm font-medium"></span>
        </div>
        <div class="flex items-center gap-2">
            <i class='bx bx-time-five text-lg'></i>
            <span id="philippinesTime" class="text-sm font-medium"></span>
        </div>
    </div>
</header>

<script>
function updatePhilippinesDateTime() {
    const now = new Date();
    // Philippines timezone (UTC+8)
    const philippinesTime = new Date(now.toLocaleString("en-US", {timeZone: "Asia/Manila"}));
    
    // Date options
    const dateOptions = { 
        weekday: 'short', 
        year: 'numeric', 
        month: 'short', 
        day: 'numeric'
    };
    
    // Time options
    const timeOptions = { 
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
    };
    
    // Update separate elements
    document.getElementById('philippinesDate').textContent = philippinesTime.toLocaleDateString('en-US', dateOptions);
    document.getElementById('philippinesTime').textContent = philippinesTime.toLocaleTimeString('en-US', timeOptions);
}

// Update immediately and then every second for real-time display
updatePhilippinesDateTime();
setInterval(updatePhilippinesDateTime, 1000);
</script>