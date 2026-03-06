<aside class="fixed top-0 left-0 w-72 h-screen bg-gradient-to-br from-slate-800 to-slate-900 text-white z-[1000] transition-all duration-300 overflow-hidden shadow-2xl" id="sidebar">
    <!-- Sidebar Header -->
    <div class="p-8 border-b border-white/10 bg-white/5">
        <div class="flex items-center gap-4">
            <div class="relative">
                <img src="../assets/blue_iris_logo.png" alt="Logo" width="50" height="50" 
                     class="rounded-xl border-2 border-emerald-500/30 hover:border-emerald-500 hover:scale-105 transition-all duration-300">
            </div>
            <div class="brand">
                <h1 class="text-2xl font-bold text-emerald-500 font-['Orbitron']">Blue Iris Coffee</h1>
                <span class="text-xs text-slate-400 leading-tight">Coffee Shop Management System</span>
            </div>
        </div>
    </div>  
    
    <!-- Sidebar Navigation -->
    <nav class="p-6 flex-1">
        <div class="mb-8">
            <h2 class="text-xs font-semibold text-slate-500 uppercase tracking-wider px-6 mb-4">Navigation</h2>
            <ul class="space-y-1">
                <li class="nav-item">
                    <a href="#" class="flex items-center gap-4 px-6 py-3.5 text-slate-300 hover:bg-emerald-500/10 hover:text-emerald-500 hover:pl-8 transition-all duration-300 relative font-medium group active" 
                       data-page="dashboard">
                        <i class='bx bx-grid-alt text-xl min-w-[24px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">DASHBAORD</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-emerald-500/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="flex items-center gap-4 px-6 py-3.5 text-slate-300 hover:bg-emerald-500/10 hover:text-emerald-500 hover:pl-8 transition-all duration-300 relative font-medium group" 
                       data-page="users">
                        <i class='bx bx-capsule text-xl min-w-[24px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">MEDICINE</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-emerald-500/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="flex items-center gap-4 px-6 py-3.5 text-slate-300 hover:bg-emerald-500/10 hover:text-emerald-500 hover:pl-8 transition-all duration-300 relative font-medium group" 
                       data-page="patients">
                        <i class='bx bx-group text-xl min-w-[24px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">ACCOUNTS</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-emerald-500/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="flex items-center gap-4 px-6 py-3.5 text-slate-300 hover:bg-emerald-500/10 hover:text-emerald-500 hover:pl-8 transition-all duration-300 relative font-medium group" 
                       data-page="patients">
                        <i class='bx bx-group text-xl min-w-[24px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">REPORTS</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-emerald-500/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="flex items-center gap-4 px-6 py-3.5 text-slate-300 hover:bg-emerald-500/10 hover:text-emerald-500 hover:pl-8 transition-all duration-300 relative font-medium group" 
                       data-page="inventory">
                        <i class='bx bx-history text-xl min-w-[24px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">HISTORY LOGS</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-emerald-500/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- My Account Navigation -->
    <nav class="px-6 pb-6">
        <div class="mb-4">
            <h2 class="text-xs font-semibold text-slate-500 uppercase tracking-wider px-6 mb-4">My Account</h2>
            <ul class="space-y-1">
                <li class="nav-item">
                    <a href="#" class="flex items-center gap-4 px-6 py-3.5 text-slate-300 hover:bg-emerald-500/10 hover:text-emerald-500 hover:pl-8 transition-all duration-300 relative font-medium group" 
                       data-page="profile">
                        <i class='bx bx-user-circle text-xl min-w-[24px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">Profile</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-emerald-500/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="flex items-center gap-4 px-6 py-3.5 text-slate-300 hover:bg-emerald-500/10 hover:text-emerald-500 hover:pl-8 transition-all duration-300 relative font-medium group" 
                       data-page="guide">
                        <i class='bx bx-book-open text-xl min-w-[24px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">User Guide</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-emerald-500/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="flex items-center gap-4 px-6 py-3.5 text-slate-300 hover:bg-red-500/10 hover:text-red-400 hover:pl-8 transition-all duration-300 relative font-medium group" 
                       onclick="handleLogout()">
                        <i class='bx bx-log-out text-xl min-w-[24px] text-center'></i>
                        <span class="text-sm whitespace-nowrap">Sign Out</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-red-500/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
</aside>

<style>
/* Custom styles for collapsed state and active items */
.sidebar.collapsed {
    width: 5rem;
}

.sidebar.collapsed .brand span,
.sidebar.collapsed .nav-item span,
.sidebar.collapsed .user-info h3,
.sidebar.collapsed .user-info .role,
.sidebar.collapsed .dropdown-icon {
    display: none;
}

.sidebar.collapsed .nav-item a {
    justify-content: center;
    padding: 0.875rem;
}

.sidebar.collapsed .nav-item a:hover {
    padding-left: 0.875rem;
}

.sidebar.collapsed .profile-info {
    justify-content: center;
    padding: 0.75rem;
}

.sidebar.collapsed .nav-group-title {
    display: none;
}

.nav-item a.active {
    background: linear-gradient(90deg, rgba(16, 185, 129, 0.2) 0%, rgba(16, 185, 129, 0.05) 100%);
    color: #10b981;
    border-left: 3px solid #10b981;
}

.profile-dropdown.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.profile-dropdown.show .dropdown-icon {
    transform: rotate(180deg);
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

/* Scrollbar styling */
.sidebar::-webkit-scrollbar {
    width: 4px;
}

.sidebar::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.05);
}

.sidebar::-webkit-scrollbar-thumb {
    background: rgba(16, 185, 129, 0.3);
    border-radius: 2px;
}

.sidebar::-webkit-scrollbar-thumb:hover {
    background: rgba(16, 185, 129, 0.5);
}
</style>

<script>
    // Profile dropdown toggle
    const profileMenu = document.getElementById('profileMenu');
    const profileDropdown = document.getElementById('profileDropdown');
    
    profileMenu.addEventListener('click', function(e) {
        e.stopPropagation();
        profileDropdown.classList.toggle('show');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!profileMenu.contains(e.target)) {
            profileDropdown.classList.remove('show');
        }
    });

    // Navigation item click handlers
    document.querySelectorAll('.nav-item a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all links
            document.querySelectorAll('.nav-item a').forEach(l => l.classList.remove('active'));
            
            // Add active class to clicked link
            this.classList.add('active');
            
            // Handle page navigation
            const page = this.getAttribute('data-page');
            if (page) {
                loadPage(page);
            }
        });
    });

    // Load page content
    function loadPage(page) {
        const mainContent = document.querySelector('.main-content');
        const pageTitle = document.getElementById('pageTitle');
        
        // Update page title
        const titles = {
            dashboard: 'DASHBOARD',
            users: 'USER MANAGEMENT',
            patients: 'PATIENTS / STUDENTS',
            inventory: 'INVENTORY',
            audit: 'AUDIT LOGS'
        };
        
        if (pageTitle) {
            pageTitle.textContent = titles[page] || 'DASHBOARD';
        }
        
        // Here you can load different page content
        console.log('Loading page:', page);
    }

    // Logout handler
    function handleLogout() {
        if (confirm('Are you sure you want to logout?')) {
            window.location.href = '../public/logout.php';
        }
    }

    // Sidebar toggle functionality
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
        });
    }

    // Mobile sidebar toggle
    function toggleMobileSidebar() {
        sidebar.classList.toggle('mobile-open');
    }

    // Close mobile sidebar when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 768 && 
            !sidebar.contains(e.target) && 
            !sidebarToggle.contains(e.target)) {
            sidebar.classList.remove('mobile-open');
        }
    });
</script>