<!-- Add Product Modal -->
<div id="addProductModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-6 rounded-t-2xl">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <i class='bx bx-plus-circle text-3xl'></i>
                    <h2 class="text-2xl font-bold">Add New Product</h2>
                </div>
                <button onclick="closeAddProductModal()" class="text-white hover:bg-white/20 rounded-lg p-2 transition-colors">
                    <i class='bx bx-x text-2xl'></i>
                </button>
            </div>
        </div>

        <!-- Modal Body -->
        <form id="addProductForm" class="p-6 space-y-6" enctype="multipart/form-data">
            <!-- Basic Information -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                    <i class='bx bx-info-circle text-blue-600'></i>
                    Basic Information
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Product Code -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Product Code <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <i class='bx bx-barcode absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400'></i>
                            <input type="text" id="productCode" name="productCode" required
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="e.g., COF001">
                        </div>
                    </div>

                    <!-- Product Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Product Name <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <i class='bx bx-package absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400'></i>
                            <input type="text" id="productName" name="productName" required
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="e.g., Cappuccino">
                        </div>
                    </div>
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Category <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <i class='bx bx-category absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400'></i>
                        <select id="productCategory" name="productCategory" required
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                            <option value="">Select Category</option>
                            <option value="coffee">Coffee</option>
                            <option value="tea">Tea</option>
                            <option value="pastries">Pastries</option>
                            <option value="sandwiches">Sandwiches</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Description
                    </label>
                    <div class="relative">
                        <i class='bx bx-file-text absolute left-3 top-3 text-gray-400'></i>
                        <textarea id="productDescription" name="productDescription" rows="3"
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                            placeholder="Enter product description..."></textarea>
                    </div>
                </div>
            </div>

            <!-- Pricing & Stock -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                    <i class='bx bx-dollar-circle text-green-600'></i>
                    Pricing & Stock
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Price -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Price (₱) <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <i class='bx bx-peso absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400'></i>
                            <input type="number" id="productPrice" name="productPrice" required min="0" step="0.01"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="0.00">
                        </div>
                    </div>

                    <!-- Stock Quantity -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Stock Quantity <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <i class='bx bx-box absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400'></i>
                            <input type="number" id="stockQuantity" name="stockQuantity" required min="0"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="0">
                        </div>
                    </div>

                    <!-- Minimum Stock Level -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Min Stock Level
                        </label>
                        <div class="relative">
                            <i class='bx bx-error-circle absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400'></i>
                            <input type="number" id="minStockLevel" name="minStockLevel" min="0"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="5">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Settings -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                    <i class='bx bx-cog text-purple-600'></i>
                    Additional Settings
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Status -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <i class='bx bx-toggle-left absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400'></i>
                            <select id="productStatus" name="productStatus" required
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <!-- Image Upload (Optional) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Product Image
                        </label>
                        <div class="relative">
                            <i class='bx bx-image absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400'></i>
                            <input type="file" id="productImage" name="productImage" accept="image/*"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Modal Footer -->
        <div class="bg-gray-50 p-6 rounded-b-2xl flex justify-end gap-3">
            <button onclick="closeAddProductModal()" 
                class="px-6 py-3 bg-gray-200 text-gray-700 rounded-xl font-medium hover:bg-gray-300 transition-colors">
                <i class='bx bx-x mr-2'></i>Cancel
            </button>
            <button onclick="saveProduct()" 
                class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-medium hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                <i class='bx bx-save mr-2'></i>Save Product
            </button>
        </div>
    </div>
</div>

<script>
// Modal Functions
function openAddProductModal() {
    document.getElementById('addProductModal').classList.remove('hidden');
    document.getElementById('addProductModal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeAddProductModal() {
    document.getElementById('addProductModal').classList.add('hidden');
    document.getElementById('addProductModal').classList.remove('flex');
    document.body.style.overflow = 'auto';
    resetAddProductForm();
}

function resetAddProductForm() {
    document.getElementById('addProductForm').reset();
}

function saveProduct() {
    const form = document.getElementById('addProductForm');
    const formData = new FormData(form);
    
    // Validate required fields
    const requiredFields = ['productCode', 'productName', 'productCategory', 'productPrice', 'stockQuantity', 'productStatus'];
    let isValid = true;
    
    requiredFields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (!field.value.trim()) {
            field.classList.add('border-red-500');
            isValid = false;
        } else {
            field.classList.remove('border-red-500');
        }
    });
    
    if (!isValid) {
        showAlert('Please fill in all required fields', 'error');
        return;
    }
    
    // Add action to form data
    formData.append('action', 'addProduct');
    
    // Send to server
    fetch('../model/productActions.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showAlert(data.message, 'success');
            closeAddProductModal();
            if (window.location.pathname.includes('dashboard.php')) {
                // Redirect to products page to see the new product
                setTimeout(() => {
                    window.location.href = 'products.php';
                }, 5000);
            } else {
                getProducts(); // Refresh products list
            }
        } else {
            showAlert(data.error, 'error');
        }
    })
    .catch(error => {
        console.error('Error saving product:', error);
        showAlert('An error occurred while saving the product', 'error');
    });
}

// Close modal when clicking outside
document.getElementById('addProductModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeAddProductModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeAddProductModal();
    }
});
</script>