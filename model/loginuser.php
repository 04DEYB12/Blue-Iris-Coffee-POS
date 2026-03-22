<?php
session_start();
include 'connection.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $userid = $_POST['userid'];
        $password = $_POST['password'];
        
        if(empty($userid) || empty($password)) {
            sendJsonResponse(['success' => false, 'error' => 'Please fill in all fields!']);
            exit();
        }
    
        $query = "SELECT * FROM users WHERE user_id = ? LIMIT 1";
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $userid);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result && $result->num_rows > 0) {
            $user_data = $result->fetch_assoc();
            if (/*password_verify($password, $user_data['password'])*/ $password == $user_data['password']) {
                if($user_data['status'] == 'active') {
                    $_SESSION['User_ID'] = $user_data['user_id'];
                    $_SESSION['role'] = $user_data['role'];
                    $_SESSION['LoginSuccess'] = true;
                    $_SESSION['firstname'] = $user_data['firstname'];
                    $_SESSION['lastname'] = $user_data['lastname'];
                    session_regenerate_id(true);
                    
                    echo json_encode([
                        'success' => true,
                        'redirect' => '../view/dashboard.php',
                    ]);
                } else { echo json_encode(['success' => false, 'error' => 'Account is inactive!']); }
            } else { echo json_encode(['success' => false, 'error' => 'Incorrect password!']); }
        } else { echo json_encode(['success' => false, 'error' => 'Account not found!']); }
        
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'error' => 'Login failed: ' . $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'error' => 'Invalid request method'
    ]);
}
?>