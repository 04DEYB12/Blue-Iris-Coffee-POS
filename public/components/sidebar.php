<?php
$firstname = $_SESSION['firstname'] ?? 'Guest';
$lastname = $_SESSION['lastname'] ?? 'Guest';
$role = $_SESSION['role'] ?? 'Guest';
?>

<aside id="sidebar" class="fixed top-0 left-0 w-72 h-screen bg-gradient-to-br from-[#384862] via-[#483527] to-[#384862] text-white z-[1000] transition-all duration-300 overflow-hidden shadow-2xl flex flex-col">
    <!-- Sidebar Header -->
    <div class="p-6 border-b border-white/10 bg-white/5 backdrop-blur-sm">
        <div class="flex items-center gap-4">
            <div class="relative w-16 h-16 flex items-center justify-center">
                <div class="absolute inset-0 bg-gradient-to-r from-white/30 to-white/10 rounded-full blur-lg opacity-60 animate-pulse"></div>
                <img src="../assets/blue_iris_logo.png" alt="Blue Iris Coffee Logo" width="50" height="50" 
                     class="relative w-12 h-12 rounded-xl border-2 border-white/30 shadow-lg object-cover hover:scale-105 transition-all duration-300 z-10">
            </div>
            <div class="brand">
                <h1 class="text-xl font-bold text-white font-['Segoe_UI'] shadow-lg">Blue Iris Coffee</h1>
                <span class="text-xs text-white/70 leading-tight font-medium">POS Management System</span>
            </div>
        </div>
    </div>  
    
    <!-- Sidebar Navigation -->
    <nav class="flex-1 p-4 overflow-y-auto">
        <div class="mb-6">
            <h2 class="text-xs font-semibold text-white/50 uppercase tracking-wider px-4 mb-3">Main Menu</h2>
            <ul class="space-y-1">
                <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'], 'dashboard.php') !== false ? 'active' : ''; ?>">
                    <a href="../view/dashboard.php" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:bg-white/10 hover:text-white hover:pl-6 transition-all duration-300 relative font-medium group rounded-lg overflow-hidden">
                        <i class='bx bx-home-smile text-lg min-w-[20px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">Dashboard</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'], 'AccountManagement.php') !== false ? 'active' : ''; ?>">
                    <a href="#" onclick="showAlert('POS coming soon!', 'info');" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:bg-white/10 hover:text-white hover:pl-6 transition-all duration-300 relative font-medium group rounded-lg overflow-hidden">
                        <i class='bx bx-coffee text-lg min-w-[20px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">POS</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'], 'products.php') !== false ? 'active' : ''; ?>">
                    <a href="../view/products.php" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:bg-white/10 hover:text-white hover:pl-6 transition-all duration-300 relative font-medium group rounded-lg overflow-hidden">
                        <i class='bx bx-cookie text-lg min-w-[20px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">Products</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'], 'Inventory.php') !== false ? 'active' : ''; ?>">
                    <a href="#" onclick="showAlert('Inventory coming soon!', 'info');" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:bg-white/10 hover:text-white hover:pl-6 transition-all duration-300 relative font-medium group rounded-lg overflow-hidden">
                        <i class='bx bx-package text-lg min-w-[20px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">Inventory</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'], 'Sales.php') !== false ? 'active' : ''; ?>">
                    <a href="#" onclick="showAlert('Sales coming soon!', 'info');" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:bg-white/10 hover:text-white hover:pl-6 transition-all duration-300 relative font-medium group rounded-lg overflow-hidden">
                        <i class='bx bx-money-withdraw text-lg min-w-[20px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">Sales</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'], 'Reports.php') !== false ? 'active' : ''; ?>">
                    <a href="#" onclick="showAlert('Reports coming soon!', 'info');" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:bg-white/10 hover:text-white hover:pl-6 transition-all duration-300 relative font-medium group rounded-lg overflow-hidden">
                        <i class='bx bx-pie-chart-alt-2 text-lg min-w-[20px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">Reports</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'], 'AuditLogs.php') !== false ? 'active' : ''; ?>">
                    <a href="#" onclick="showAlert('Audit Logs coming soon!', 'info');" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:bg-white/10 hover:text-white hover:pl-6 transition-all duration-300 relative font-medium group rounded-lg overflow-hidden">
                        <i class='bx bx-shield-quarter text-lg min-w-[20px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">Audit Logs</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <!-- <li style="display: <?php echo $role == 'Administrator' || $role == 'Super Administrator' ? 'block' : 'none'; ?>;" class="nav-item <?php echo strpos($_SERVER['PHP_SELF'], 'AuditLogs.php') !== false ? 'active' : ''; ?>">
                    <a href="#" onclick="showAlert('Audit Logs coming soon!', 'info');" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:bg-white/10 hover:text-white hover:pl-6 transition-all duration-300 relative font-medium group rounded-lg overflow-hidden">
                        <i class='bx bx-shield-quarter text-lg min-w-[20px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">Audit Logs</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li> -->
            </ul>
        </div>
    </nav>
    
    <!-- Sidebar User Profile -->
    <div class="p-4 border-t border-white/10 bg-black/10">
        <div class="profile-menu relative" id="profileMenu">
            <div class="flex items-center gap-3 p-3 rounded-lg cursor-pointer transition-all duration-300 bg-white/5 hover:bg-white/10">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center font-semibold text-sm text-white shadow-lg">
                    <?php echo strtoupper(substr($firstname, 0, 1) . substr($lastname, 0, 1)); ?>
                </div>
                <div class="flex-1">
                    <h3 class="text-sm font-semibold text-white"><?php echo $firstname . ' ' . $lastname; ?></h3>
                    <span class="text-xs text-white/70"><?php echo $role; ?></span>
                </div>
                <i class='bx bx-chevron-up text-white/70 transition-transform duration-300'></i>
            </div>
            <div class="absolute bottom-full left-0 right-0 mb-2 bg-slate-800/95 backdrop-blur-sm rounded-xl shadow-2xl border border-white/10 opacity-0 invisible translate-y-2 transition-all duration-300 overflow-hidden" id="profileDropdown">
                <div class="p-4 border-b border-white/10 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center font-semibold text-sm text-white shadow-lg">
                        <?php echo strtoupper(substr($firstname, 0, 1) . substr($lastname, 0, 1)); ?>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-sm font-semibold text-white"><?php echo $firstname . ' ' . $lastname; ?></h3>
                        <span class="text-xs text-white/70"><?php echo $role; ?></span>
                    </div>
                </div>
                
                <ul class="p-2 space-y-1">
                    <li style="display: <?php echo $role == 'Super Administrator' ? 'none' : 'block'; ?>;">
                        <a onclick="showAlert('Profile coming soon!', 'info');" class="flex items-center gap-3 px-3 py-2 text-white/80 hover:bg-white/10 hover:text-white rounded-lg transition-all duration-300 text-sm">
                            <i class='bx bx-user text-base'></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="showAlert('User Guide coming soon!', 'info');" class="flex items-center gap-3 px-3 py-2 text-white/80 hover:bg-white/10 hover:text-white rounded-lg transition-all duration-300 text-sm">
                            <i class='bx bx-book-open text-base'></i>
                            <span>User Guide</span>
                        </a>
                    </li>
                    <div class="h-px bg-white/10 mx-3 my-2"></div>
                    <li>
                        <a href="../public/logout.php" class="flex items-center gap-3 px-3 py-2 text-red-400 hover:bg-red-500/20 hover:text-red-400 rounded-lg transition-all duration-300 text-sm">
                            <i class='bx bx-log-out text-base'></i>
                            <span>Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<script>
    // Profile dropdown toggle
    const profileMenu = document.getElementById('profileMenu');
    const profileDropdown = document.getElementById('profileDropdown');
    const dropdownIcon = profileMenu.querySelector('.bx-chevron-up');
    
    profileMenu.addEventListener('click', function(e) {
        e.stopPropagation();
        profileDropdown.classList.toggle('opacity-100');
        profileDropdown.classList.toggle('invisible');
        profileDropdown.classList.toggle('translate-y-0');
        profileDropdown.classList.toggle('translate-y-2');
        dropdownIcon.classList.toggle('rotate-180');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!profileMenu.contains(e.target)) {
            profileDropdown.classList.remove('opacity-100');
            profileDropdown.classList.add('invisible');
            profileDropdown.classList.add('translate-y-2');
            profileDropdown.classList.remove('translate-y-0');
            dropdownIcon.classList.remove('rotate-180');
        }
    });

    // Add active state styling for navigation items
    document.querySelectorAll('.nav-item').forEach(item => {
        if (item.classList.contains('active')) {
            const link = item.querySelector('a');
            if (link) {
                link.classList.add('bg-gradient-to-r', 'from-white/20', 'to-white/5', 'text-white', 'border-l-3', 'border-white', 'shadow-lg');
            }
        }
    });
</script>

<style>
/* Custom scrollbar for navigation */
.overflow-y-auto::-webkit-scrollbar {
    width: 4px;
}

.overflow-y-auto::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.05);
}

.overflow-y-auto::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 2px;
}

.overflow-y-auto::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 255, 255, 0.3);
}

/* Collapsed state styles */
.sidebar.collapsed {
    width: 5rem;
}

.sidebar.collapsed .brand span,
.sidebar.collapsed .nav-item span,
.sidebar.collapsed .nav-group-title,
.sidebar.collapsed .user-info h3,
.sidebar.collapsed .user-info span,
.sidebar.collapsed .bx-chevron-up {
    display: none;
}

.sidebar.collapsed .nav-item a {
    justify-content: center;
    padding: 0.75rem;
}

.sidebar.collapsed .nav-item a:hover {
    padding-left: 0.75rem;
}

.sidebar.collapsed .profile-info {
    justify-content: center;
    padding: 0.75rem 0.5rem;
}

/* Mobile responsive */
@media (max-width: 768px) {
    .sidebar {
        transform: translateX(-100%);
    }
    
    .sidebar.mobile-open {
        transform: translateX(0);
    }
    
    .sidebar.collapsed {
        width: 18rem;
    }
}
</style>