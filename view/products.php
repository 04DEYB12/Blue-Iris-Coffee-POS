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
    <title>Blue Iris Coffee | Products</title>
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
            <section class="content-section active" id="productsSection">
                <div class="p-6">
                    <!-- Header Section -->
                    <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div>
                            <h1 class="text-3xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-2">Products Management</h1>
                            <p class="text-gray-600">Manage your coffee shop inventory and products</p>
                        </div>
                        <button onclick="openAddProductModal()" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-medium hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25">
                            <i class='bx bx-plus-circle mr-2'></i>Add New Product
                        </button>
                    </div>

                    <!-- Search, Filter, and Sort Section -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-6 border border-gray-100">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
                            <!-- Search -->
                            <div class="relative">
                                <i class='bx bx-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg'></i>
                                <input type="text" id="searchInput" placeholder="Search products..." 
                                    class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    onkeyup="searchProducts()">
                            </div>
                            
                            <!-- Filter -->
                            <div class="relative">
                                <i class='bx bx-filter absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg'></i>
                                <select id="categoryFilter" onchange="filterProducts()" 
                                    class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 appearance-none">
                                    <option value="">All Categories</option>
                                    <option value="coffee">Coffee</option>
                                    <option value="tea">Tea</option>
                                    <option value="pastries">Pastries</option>
                                    <option value="sandwiches">Sandwiches</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            
                            <!-- Sort -->
                            <div class="relative">
                                <i class='bx bx-sort absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg'></i>
                                <select id="sortBy" onchange="sortProducts()" 
                                    class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 appearance-none">
                                    <option value="name">Sort by Name</option>
                                    <option value="price-low">Price: Low to High</option>
                                    <option value="price-high">Price: High to Low</option>
                                    <option value="stock">Stock Level</option>
                                    <option value="category">Category</option>
                                </select>
                            </div>
                            
                            <!-- Reset -->
                            <div class="relative">
                                <button onclick="resetFilters()" 
                                    class="w-full px-4 py-3 bg-gradient-to-r from-gray-50 to-gray-100 hover:from-gray-100 hover:to-gray-200 text-gray-700 rounded-xl transition-all duration-300 font-medium flex items-center justify-center gap-2 border border-gray-200 hover:border-gray-300 shadow-sm hover:shadow-md transform hover:scale-105">
                                    <i class='bx bx-refresh text-lg'></i>
                                    <span>Reset Filters</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="productsGrid">
                        <!-- display products here via javascript -->
                    </div>

                    <!-- Empty State (hidden by default) -->
                    <div id="emptyState" class="hidden text-center py-12">
                        <i class='bx bx-package text-6xl text-gray-300 mb-4'></i>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">No products found</h3>
                        <p class="text-gray-400 mb-6">Try adjusting your search or filter criteria</p>
                        <button onclick="resetFilters()" class="px-6 py-3 bg-blue-600 text-white rounded-xl font-medium hover:bg-blue-700 transition-colors">
                            Reset Filters
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <?php include 'modal/addProduct_modal.php'; ?>
    
    <script src="../controller/toastNotification.js"></script>
    <script>
    
    document.addEventListener('DOMContentLoaded', () => {
        let pageTitle = document.getElementById('pageTitle');
        pageTitle.textContent = 'PRODUCTS';
        getProducts();
    });
    
    function getProducts() {
        fetch('../model/productActions.php?action=getProducts', {
            method: 'GET'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                products = data.products;
                renderProducts(products);
                console.log('Products loaded:', data.count, 'items');
            } else {
                showAlert(data.error, 'error');
            }
        })
        .catch(error => {
            console.error('Error getting products:', error);
            showAlert('An error occurred while getting products: ' + error.message, 'error');
        });
    }
    
    let products = [];

    // Search functionality
    function searchProducts() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const filteredProducts = products.filter(product => 
            product.name.toLowerCase().includes(searchTerm) || 
            product.description.toLowerCase().includes(searchTerm)
        );
        renderProducts(filteredProducts);
    }

    // Filter functionality
    function filterProducts() {
        const category = document.getElementById('categoryFilter').value;
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        
        let filteredProducts = products;
        
        if (category) {
            filteredProducts = filteredProducts.filter(product => product.category === category);
        }
        
        if (searchTerm) {
            filteredProducts = filteredProducts.filter(product => 
                product.name.toLowerCase().includes(searchTerm) || 
                product.description.toLowerCase().includes(searchTerm)
            );
        }
        
        renderProducts(filteredProducts);
    }

    // Sort functionality
    function sortProducts() {
        const sortBy = document.getElementById('sortBy').value;
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const category = document.getElementById('categoryFilter').value;
        
        let sortedProducts = [...products];
        
        // Apply filter first
        if (category) {
            sortedProducts = sortedProducts.filter(product => product.category === category);
        }
        
        if (searchTerm) {
            sortedProducts = sortedProducts.filter(product => 
                product.name.toLowerCase().includes(searchTerm) || 
                product.description.toLowerCase().includes(searchTerm)
            );
        }
        
        // Then sort
        switch(sortBy) {
            case 'name':
                sortedProducts.sort((a, b) => a.name.localeCompare(b.name));
                break;
            case 'price-low':
                sortedProducts.sort((a, b) => a.price - b.price);
                break;
            case 'price-high':
                sortedProducts.sort((a, b) => b.price - a.price);
                break;
            case 'stock':
                sortedProducts.sort((a, b) => b.stock - a.stock);
                break;
            case 'category':
                sortedProducts.sort((a, b) => a.category.localeCompare(b.category));
                break;
        }
        
        renderProducts(sortedProducts);
    }

    // Render products function
    function renderProducts(productsToRender) {
        const grid = document.getElementById('productsGrid');
        const emptyState = document.getElementById('emptyState');
        
        if (productsToRender.length === 0) {
            grid.innerHTML = '';
            emptyState.classList.remove('hidden');
            return;
        }
        
        emptyState.classList.add('hidden');
        
        grid.innerHTML = productsToRender.map(product => {
            const statusBadge = getStatusBadge(product.status);
            const icon = getProductIcon(product.category);
            const gradient = getProductGradient(product.category);
            
            return `
                <div class="product-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 overflow-hidden group">
                    <div class="relative h-48 ${gradient} flex items-center justify-center">
                        <div class="absolute top-3 right-3">
                            ${statusBadge}
                        </div>
                        <img src="../model/getImage.php?id=${product.id}" alt="${product.name}">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">${product.name}</h3>
                        <p class="text-sm text-gray-600 mb-3">${product.description}</p>
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-2xl font-bold text-blue-600">₱${product.price}</span>
                            <span class="text-sm text-gray-500">Stock: ${product.stock}</span>
                        </div>
                        <div class="flex gap-2">
                            <button onclick="viewProduct(${product.id})" class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition-colors text-sm font-medium">
                                <i class='bx bx-eye'></i> View
                            </button>
                            <button onclick="editProduct(${product.id})" class="flex-1 px-3 py-2 bg-amber-50 text-amber-600 rounded-lg hover:bg-amber-100 transition-colors text-sm font-medium">
                                <i class='bx bx-edit'></i> Edit
                            </button>
                            <button onclick="deleteProduct(${product.id})" class="flex-1 px-3 py-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors text-sm font-medium">
                                <i class='bx bx-trash'></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            `;
        }).join('');
    }

    // Helper functions
    function getStatusBadge(status) {
        switch(status) {
            case 'in-stock':
                return '<span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">In Stock</span>';
            case 'low-stock':
                return '<span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-semibold rounded-full">Low Stock</span>';
            case 'out-of-stock':
                return '<span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded-full">Out of Stock</span>';
            default:
                return '<span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full">Unknown</span>';
        }
    }

    function getProductIcon(category) {
        switch(category) {
            case 'coffee': return 'bx-coffee';
            case 'tea': return 'bx-leaf';
            case 'pastries': return 'bx-cookie';
            case 'sandwiches': return 'bx-sandwich';
            default: return 'bx-blender';
        }
    }

    function getIconColor(category) {
        switch(category) {
            case 'coffee': return 'text-amber-600';
            case 'tea': return 'text-green-600';
            case 'pastries': return 'text-yellow-600';
            case 'sandwiches': return 'text-orange-600';
            default: return 'text-red-600';
        }
    }

    function getProductGradient(category) {
        switch(category) {
            case 'coffee': return 'bg-gradient-to-br from-amber-100 to-orange-100';
            case 'tea': return 'bg-gradient-to-br from-green-100 to-emerald-100';
            case 'pastries': return 'bg-gradient-to-br from-yellow-100 to-orange-100';
            case 'sandwiches': return 'bg-gradient-to-br from-orange-100 to-red-100';
            default: return 'bg-gradient-to-br from-red-100 to-pink-100';
        }
    }

    // Product operations
    function viewProduct(id) {
        const product = products.find(p => p.id === id);
        if (product) {
            showAlert(`Viewing: ${product.name} - ${product.description}`, 'info');
        }
    }

    function editProduct(id) {
        const product = products.find(p => p.id === id);
        if (product) {
            showAlert(`Editing: ${product.name}`, 'info');
        }
    }

    function deleteProduct(id) {
        const product = products.find(p => p.id === id);
        if (product && confirm(`Are you sure you want to delete "${product.name}"?`)) {
            products = products.filter(p => p.id !== id);
            renderProducts(products);
            showAlert(`Product "${product.name}" deleted successfully`, 'success');
        }
    }

    function resetFilters() {
        document.getElementById('searchInput').value = '';
        document.getElementById('categoryFilter').value = '';
        document.getElementById('sortBy').value = 'name';
        renderProducts(products);
    }

    </script>

</html>