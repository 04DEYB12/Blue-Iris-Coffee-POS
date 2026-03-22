<?php
session_start();
include '../model/connection.php';

header('Content-Type: application/json');

if (!isset($_SESSION['User_ID'])) {
    echo json_encode(['success' => false, 'error' => 'Unauthorized access']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $action = $_GET['action'] ?? '';
    
    switch ($action) {
        case 'getProducts':
            getProducts($con);
        break;
    }
} // if GET method

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    switch ($action) {
        case 'addProduct':
            addProduct($con);
        break;
    }
} // if POST method









// fetch all products
function getProducts($con) {
    try {
    // Fetch products from database
    $products_query = "SELECT * FROM products WHERE status = 'active' ORDER BY name ASC";
    $products_result = mysqli_query($con, $products_query);
    $products = [];

    if ($products_result && $products_result->num_rows > 0) {
        while ($row = $products_result->fetch_assoc()) {
            // Determine stock status
            $stock_status = 'in-stock';
            if ($row['stock_quantity'] == 0) {
                $stock_status = 'out-of-stock';
            } elseif ($row['stock_quantity'] <= $row['min_stock_level']) {
                $stock_status = 'low-stock';
            }
            
            $products[] = [
                'id' => (int)$row['id'],
                'name' => $row['name'],
                'category' => $row['category'],
                'price' => (float)$row['price'],
                'stock' => (int)$row['stock_quantity'],
                'description' => $row['description'],
                'status' => $stock_status,
                'product_code' => $row['product_code'],
                'has_image' => !empty($row['image_data'])
            ];
        }
    }

    echo json_encode([
        'success' => true,
        'products' => $products,
        'count' => count($products)
    ]);

    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'error' => 'Database error: ' . $e->getMessage()
        ]);
    }
}
// add product
function addProduct($con) {
    try {
        // Get form data
        $productCode = $_POST['productCode'] ?? '';
        $productName = $_POST['productName'] ?? '';
        $productCategory = $_POST['productCategory'] ?? '';
        $productPrice = $_POST['productPrice'] ?? 0;
        $stockQuantity = $_POST['stockQuantity'] ?? 0;
        $productStatus = $_POST['productStatus'] ?? '';
        
        // Handle image upload (store as BLOB)
        $imageData = null;
        $imageType = null;
        
        if (isset($_FILES['productImage']) && $_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
            // Validate file type (images only)
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/jpg'];
            $fileType = mime_content_type($_FILES['productImage']['tmp_name']);
            
            if (in_array($fileType, $allowedTypes)) {
                // Read image data
                $imageData = file_get_contents($_FILES['productImage']['tmp_name']);
                $imageType = $fileType;
            }
        }
        
        $productDescription = $_POST['productDescription'] ?? '';
        $minStockLevel = $_POST['minStockLevel'] ?? 0;
        
        // Insert product into database
        $sql = "INSERT INTO products (product_code, name, category, price, stock_quantity, status";
        $params = "sssiis";
        $values = [$productCode, $productName, $productCategory, $productPrice, $stockQuantity, $productStatus];
        
        // Add optional fields if not empty
        if (!empty($productDescription)) {
            $sql .= ", description";
            $params .= "s";
            $values[] = $productDescription;
        }
        
        if (!empty($minStockLevel)) {
            $sql .= ", min_stock_level";
            $params .= "i";
            $values[] = $minStockLevel;
        }
        
        if (!empty($imageData)) {
            $sql .= ", image_data, image_type";
            $params .= "ss"; 
            $values[] = $imageData;
            $values[] = $imageType;
        }
        
        $sql .= ") VALUES (" . str_repeat("?,", count($values) - 1) . "?)";
        
        $stmt = $con->prepare($sql);
        $stmt->bind_param($params, ...$values);
        
        if ($stmt->execute()) {
            echo json_encode([
                'success' => true,
                'message' => 'Product added successfully',
                'product_id' => $con->insert_id
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'error' => 'Failed to add product: ' . $stmt->error
            ]);
        }
        
        $stmt->close();
        
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'error' => 'Error adding product: ' . $e->getMessage()
        ]);
    }
}

?>