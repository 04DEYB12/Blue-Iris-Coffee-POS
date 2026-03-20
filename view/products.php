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
            <section class="content-section active" id="dashboardSection">
                <div class="p-6">
                    
                </div>
            </section>
        </div>
    </main>
    
    <script src="../controller/toastNotification.js"></script>
    <script>
    
    document.addEventListener('DOMContentLoaded', () => {
        let pageTitle = document.getElementById('pageTitle');
        pageTitle.textContent = 'PRODUCTS';
    });
    
        // Profile dropdown functionality
        function toggleProfileDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            const icon = document.getElementById('profileDropdownIcon');
            
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                dropdown.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            const dropdown = document.getElementById('profileDropdown');
            const button = e.target.closest('button[onclick="toggleProfileDropdown()"]');
            
            if (!button && !dropdown.contains(e.target)) {
                dropdown.classList.add('hidden');
                document.getElementById('profileDropdownIcon').style.transform = 'rotate(0deg)';
            }
        });

    </script>

</html>