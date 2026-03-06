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
    <title>CMIMS | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../assets/CMIMS_logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link href="../dist/output.css" rel="stylesheet">
    <script src="../controller/toastNotification.js"></script>
</head>
<body>
    <div class="dashboard-container">
        <?php include '../public/components/sidebar.php'; ?>
        
        <main class="main-content w-full h-screen overflow-auto bg-gray-50">
            <header class="main-header p-4 flex items-center gap-4 bg-white shadow-sm border-b border-gray-200 z-[1001] fixed top-0 left-0 right-0">
                <button class="sidebar-toggle p-2 rounded-lg hover:bg-gray-100 transition-colors ml-72" id="sidebarToggle">
                    <i class='bx bx-menu text-xl text-gray-700'></i>
                </button>
                <h1 id="pageTitle" class="text-2xl font-bold text-slate-800">DASHBOARD</h1>
            </header>
            
            <div class="content-container pt-20 ml-72">
                <section class="content-section active" id="dashboardSection">
                    
                </section>
            </div>
        </main>
    </div>
</body>


<?php if (isset($_SESSION['LoginSuccess']) && $_SESSION['LoginSuccess'] === true): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showAlert('Login Successful!', 'success');
        });
    </script>
    <?php $_SESSION['LoginSuccess'] = false; ?>
<?php endif; ?>

</html>