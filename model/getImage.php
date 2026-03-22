<?php
session_start();
include '../model/connection.php';

if (!isset($_GET['id'])) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

$productId = (int)$_GET['id'];

try {
    $query = "SELECT image_data, image_type FROM products WHERE id = ? AND image_data IS NOT NULL";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        header('Content-Type: ' . $row['image_type']);
        echo $row['image_data'];
    } else {
        // Return default image if no image found
        header('Content-Type: image/png');
        readfile('../assets/no-image.png');
    }
    
    $stmt->close();
    
} catch (Exception $e) {
    header('HTTP/1.0 500 Internal Server Error');
    exit();
}
?>
