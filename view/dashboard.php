<?php
session_start();
include '../model/connection.php';

if (!isset($_SESSION['User_ID'])) {
    echo "<script>window.location.href = '../components/Error401.php';</script>";
    exit();
}

$user_id = $_SESSION['User_ID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Iris Coffee | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../assets/blue_iris_logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link href="../dist/output.css" rel="stylesheet">
    <script src="../controller/toastNotification.js"></script>
</head>
<body class="bg-gray-50">
    
    <?php include '../public/components/sidebar.php'; ?>

    <!-- Main Content Area -->
    <main class="main-content bg-gradient-to-br from-slate-50 via-blue-50/20 to-indigo-50/30 min-h-screen" style="margin-left: 288px; width: calc(100% - 288px);">
        
        <?php include '../public/components/header.php'; ?>
        
        <div class="content-container pt-2 w-full">
            <section class="content-section active" id="dashboardSection">
                <div class="p-6">
                    <!-- Welcome Section -->
                    <!-- <div class="mb-8 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-3xl p-8 shadow-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-32 translate-x-32"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full translate-y-24 -translate-x-24"></div>
                        <div class="relative z-10">
                            <h2 class="text-3xl font-bold text-white mb-2">Good <?php echo date('H') < 12 ? 'Morning' : (date('H') < 18 ? 'Afternoon' : 'Evening'); ?>! ☀️</h2>
                            <p class="text-white/90 text-lg">Ready to manage your coffee business today?</p>
                            <div class="mt-6 flex gap-4">
                                <button onclick="window.location.href='point_of_sale.php'" class="px-6 py-3 bg-white text-blue-600 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                    <i class='bx bx-coffee mr-2'></i>Start Selling
                                </button>
                                <button class="px-6 py-3 bg-white/20 text-white rounded-xl font-semibold hover:bg-white/30 transition-all duration-300 backdrop-blur-sm">
                                    <i class='bx bx-chart-line mr-2'></i>View Reports
                                </button>
                            </div>
                        </div>
                    </div> -->

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- Today's Sales -->
                        <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl p-6 border border-gray-100 hover:border-blue-200 transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/20 to-transparent rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-700"></div>
                            <div class="relative z-10">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-xl group-hover:shadow-blue-500/30 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                                        <i class='bx bx-dollar-circle text-white text-3xl'></i>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full">TODAY</span>
                                        <p class="text-xs text-gray-500 mt-1">Revenue</p>
                                    </div>
                                </div>
                                <h3 class="text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-3">₱0.00</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-sm text-gray-600 font-medium">Today's Sales</p>
                                    <div class="flex items-center text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg">
                                        <i class='bx bx-up-arrow-alt mr-1'></i>
                                        <span>0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Number of Transactions -->
                        <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl p-6 border border-gray-100 hover:border-green-200 transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-400/20 to-transparent rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-700"></div>
                            <div class="relative z-10">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-xl group-hover:shadow-green-500/30 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                                        <i class='bx bx-receipt text-white text-3xl'></i>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-xs font-semibold text-green-600 bg-green-50 px-3 py-1 rounded-full">TODAY</span>
                                        <p class="text-xs text-gray-500 mt-1">Orders</p>
                                    </div>
                                </div>
                                <h3 class="text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-3">0</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-sm text-gray-600 font-medium">Transactions</p>
                                    <div class="flex items-center text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg">
                                        <i class='bx bx-up-arrow-alt mr-1'></i>
                                        <span>0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Best Selling Item -->
                        <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl p-6 border border-gray-100 hover:border-purple-200 transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-400/20 to-transparent rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-700"></div>
                            <div class="relative z-10">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-xl group-hover:shadow-purple-500/30 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                                        <i class='bx bx-trophy text-white text-3xl'></i>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-xs font-semibold text-purple-600 bg-purple-50 px-3 py-1 rounded-full">TOP</span>
                                        <p class="text-xs text-gray-500 mt-1">Product</p>
                                    </div>
                                </div>
                                <h3 class="text-2xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-3 truncate">No data</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-sm text-gray-600 font-medium">Best Selling</p>
                                    <div class="flex items-center text-xs font-semibold text-purple-600 bg-purple-50 px-2 py-1 rounded-lg">
                                        <i class='bx bx-package mr-1'></i>
                                        <span>0</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Low Stock Alerts -->
                        <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl p-6 border border-gray-100 hover:border-red-200 transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-red-400/20 to-transparent rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-700"></div>
                            <div class="relative z-10">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center shadow-xl group-hover:shadow-red-500/30 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3 animate-pulse">
                                        <i class='bx bx-error-circle text-white text-3xl'></i>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-xs font-semibold text-red-600 bg-red-50 px-3 py-1 rounded-full">ALERT</span>
                                        <p class="text-xs text-gray-500 mt-1">Stock</p>
                                    </div>
                                </div>
                                <h3 class="text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-3">0</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-sm text-gray-600 font-medium">Low Stock</p>
                                    <div class="flex items-center text-xs font-semibold text-red-600 bg-red-50 px-2 py-1 rounded-lg">
                                        <i class='bx bx-time-five mr-1'></i>
                                        <span>Now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Recent Transactions (2 columns) -->
                        <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg hover:shadow-2xl p-6 border border-gray-100 hover:border-blue-200 transition-all duration-500">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-4">
                                        <i class='bx bx-history text-white text-xl'></i>
                                    </div>
                                    <div>
                                        <h2 class="text-xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">Recent Transactions</h2>
                                        <p class="text-sm text-gray-500">Latest sales and orders</p>
                                    </div>
                                </div>
                                <button class="text-blue-600 hover:text-blue-700 text-sm font-medium hover:bg-blue-50 px-4 py-2 rounded-xl transition-all duration-300">
                                    View All
                                </button>
                            </div>
                            <div class="space-y-4">
                                <div class="text-center py-16 text-gray-500">
                                    <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-6 hover:scale-110 transition-transform duration-300">
                                        <i class='bx bx-inbox text-4xl text-gray-400'></i>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-600 mb-2">No transactions yet</h3>
                                    <p class="text-sm text-gray-400">Start processing orders to see them here</p>
                                    <button onclick="showAlert('Point of Sale coming soon!', 'info')" class="mt-4 px-6 py-3 bg-blue-600 text-white rounded-xl font-medium hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                                        <i class='bx bx-plus-circle mr-2'></i>New Sale
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions (1 column) -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl p-6 border border-gray-100 hover:border-yellow-200 transition-all duration-500">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class='bx bx-bolt-circle text-white text-xl'></i>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">Quick Actions</h2>
                                    <p class="text-sm text-gray-500">Common tasks</p>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <button onclick="showAlert('Point of Sale coming soon!', 'info')" class="w-full p-4 bg-gradient-to-br from-blue-50 via-blue-100 to-blue-50 hover:from-blue-100 hover:via-blue-200 hover:to-blue-100 rounded-2xl transition-all duration-500 text-left border border-blue-100 hover:border-blue-300 hover:shadow-lg transform hover:-translate-y-1 group">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                            <i class='bx bx-coffee text-white text-2xl'></i>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-semibold text-gray-700 group-hover:text-blue-700 transition-colors">New Sale</p>
                                            <p class="text-xs text-gray-500">Process orders</p>
                                        </div>
                                        <i class='bx bx-chevron-right text-gray-400 group-hover:text-blue-600 transition-colors'></i>
                                    </div>
                                </button>
                                
                                <button onclick="openAddProductModal()" class="w-full p-4 bg-gradient-to-br from-green-50 via-green-100 to-green-50 hover:from-green-100 hover:via-green-200 hover:to-green-100 rounded-2xl transition-all duration-500 text-left border border-green-100 hover:border-green-300 hover:shadow-lg transform hover:-translate-y-1 group">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                            <i class='bx bx-plus-circle text-white text-2xl'></i>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-semibold text-gray-700 group-hover:text-green-700 transition-colors">Add Product</p>
                                            <p class="text-xs text-gray-500">Manage inventory</p>
                                        </div>
                                        <i class='bx bx-chevron-right text-gray-400 group-hover:text-green-600 transition-colors'></i>
                                    </div>
                                </button>
                                
                                <button onclick="showAlert('Inventory coming soon!', 'info')" class="w-full p-4 bg-gradient-to-br from-purple-50 via-purple-100 to-purple-50 hover:from-purple-100 hover:via-purple-200 hover:to-purple-100 rounded-2xl transition-all duration-500 text-left border border-purple-100 hover:border-purple-300 hover:shadow-lg transform hover:-translate-y-1 group">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                            <i class='bx bx-package text-white text-2xl'></i>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-semibold text-gray-700 group-hover:text-purple-700 transition-colors">Inventory</p>
                                            <p class="text-xs text-gray-500">Stock levels</p>
                                        </div>
                                        <i class='bx bx-chevron-right text-gray-400 group-hover:text-purple-600 transition-colors'></i>
                                    </div>
                                </button>
                                
                                <button onclick="showAlert('Reports coming soon!', 'info')" class="w-full p-4 bg-gradient-to-br from-orange-50 via-orange-100 to-orange-50 hover:from-orange-100 hover:via-orange-200 hover:to-orange-100 rounded-2xl transition-all duration-500 text-left border border-orange-100 hover:border-orange-300 hover:shadow-lg transform hover:-translate-y-1 group">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                            <i class='bx bx-pie-chart-alt-2 text-white text-2xl'></i>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-semibold text-gray-700 group-hover:text-orange-700 transition-colors">Reports</p>
                                            <p class="text-xs text-gray-500">Analytics</p>
                                        </div>
                                        <i class='bx bx-chevron-right text-gray-400 group-hover:text-orange-600 transition-colors'></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php
    include 'modal/addProduct_modal.php';    
    
    if(isset($_SESSION['LoginSuccess']) && $_SESSION['LoginSuccess'] == true) {
        echo "<script>showAlert('Login successful!', 'success');</script>";
        unset($_SESSION['LoginSuccess']);
    }
    ?>
    <script src="../controller/toastNotification.js"></script>
    
    <script>
        

    </script>

</html>