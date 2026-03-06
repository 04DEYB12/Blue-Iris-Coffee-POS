<?php
session_start();
include_once("../model/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login - Blue Iris Coffee</title>
    <link rel="icon" type="image/x-icon" href="../assets/blue_iris_logo.png">
    <link href="../dist/output.css" rel="stylesheet">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .floating-shape {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }
        
        .input-group:focus-within label {
            color: #384862;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #384862 0%, #483527 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(56, 72, 98, 0.3);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#384862] via-[#483527] to-[#384862] min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Floating Background Elements -->
    <div class="floating-shape w-64 h-64 bg-white/20 rounded-full top-10 left-10" style="animation-delay: 0s;"></div>
    <div class="floating-shape w-48 h-48 bg-white/20 rounded-full bottom-10 right-10" style="animation-delay: 2s;"></div>
    <div class="floating-shape w-32 h-32 bg-white/20 rounded-full top-1/2 left-1/4" style="animation-delay: 4s;"></div>
    
    <div class="glass-effect rounded-3xl shadow-2xl p-6 w-full max-w-md animate-fade-in-up relative z-10">
        <!-- Back Button -->
        <button onclick="goToLandingPage()" class="absolute top-4 left-4 text-gray-600 hover:text-[#384862] transition-colors p-2">
            <i class="bx bx-arrow-back text-xl"></i>
        </button>
        
        <!-- Logo and Title -->
        <div class="text-center mb-8 mt-2">
            <div class="relative inline-block mb-6">
                <!-- Enhanced glow effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#384862] via-[#483527] to-[#384862] rounded-full blur-3xl opacity-70 scale-125"></div>
                <!-- Secondary glow -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#483527] to-[#384862] rounded-full blur-2xl opacity-50 scale-110"></div>
                <!-- Logo container with enhanced styling -->
                <div class="relative w-32 h-32 rounded-full border-4 border-white shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300 bg-gradient-to-br from-[#384862] to-[#483527] p-1">
                    <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
                        <img id="charater" src="../assets/character_facing.png" alt="character" 
                             class="w-32 h-32 object-cover">
                    </div>
                </div>
                <!-- Animated ring around logo -->
                <div class="absolute inset-0 rounded-full border-2 border-[#384862] opacity-60 animate-pulse"></div>
                <!-- Rotating ring -->
                <div class="absolute inset-0 rounded-full border border-transparent border-t-[#384862] border-r-[#483527] animate-spin" style="animation-duration: 4s;"></div>
                <!-- Coffee bean decorations -->
                <div class="absolute -top-2 -right-2 text-2xl animate-bounce" style="animation-delay: 0s;">☕</div>
                <div class="absolute -bottom-2 -left-2 text-xl animate-bounce" style="animation-delay: 1s;">☕</div>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2 bg-gradient-to-r from-[#384862] to-[#483527] bg-clip-text text-transparent">Welcome Back</h2>
            <p class="text-gray-600 text-base font-medium">Login to your coffee shop account</p>
        </div>

        <!-- Login Form -->
        <div class="input-group">
            <label for="userid" class="block text-sm font-semibold text-gray-700 mb-2 transition-colors">
                <i class='bx bx-user-circle mr-2'></i>User ID
            </label>
            <input 
                type="text" 
                id="userid" 
                name="userid"
                class="w-full px-3 py-3 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-[#384862] focus:border-[#384862] outline-none transition-all text-base"
                placeholder="Enter your user ID"
                required
            >
        </div>

        <!-- Password Field -->
        <div class="input-group">
            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2 transition-colors">
                <i class='bx bx-lock-alt mr-2 mt-4'></i>Password
            </label>
            <div class="relative">
                <input 
                    type="password" 
                    id="password" 
                    name="password"
                    class="w-full px-3 py-3 pr-12 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-[#384862] focus:border-[#384862] outline-none transition-all text-base"
                    placeholder="Enter your password"
                    required
                >
                <button 
                    type="button" 
                    id="togglePassword"
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-[#384862] focus:outline-none transition-colors"
                >
                    <i id="eyeIcon" class="bx bx-show text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Forgot Password Link -->
        <div class="text-right mb-4">
            <a href="#" onclick="openForgotPasswordModal()" class="text-xs text-[#384862] hover:text-[#483527] font-semibold transition-colors">
                Forgot your password?
            </a>
        </div>

        <!-- Login Button -->
        <button onclick="Login()" class="btn-primary w-full text-white font-bold py-3 rounded-lg text-base transition-all duration-300 relative overflow-hidden group">
            <span class="relative z-10 flex items-center justify-center">
                <i class='bx bx-log-in-circle mr-2'></i>
                Login
            </span>
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
        </button>
    </div>

    <script src="../controller/toastNotification.js"></script>
    <script>
    
        const characterImg = document.getElementById('charater');
        
        function goToLandingPage() {
            window.location.href = "landingPage.php";
        }
        
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Change icon based on password visibility
            if (type === 'text') {
                eyeIcon.className = 'bx bx-hide text-xl';
            } else {
                eyeIcon.className = 'bx bx-show text-xl';
            }
        });

        // Character image change on input focus
        const useridInput = document.getElementById('userid');

        function updateCharacterImage(inputType) {
            switch(inputType) {
                case 'facing':
                    characterImg.src = '../assets/character_facing.png';
                    break;
                case 'userid':
                    characterImg.src = '../assets/character_down.png';
                    break;
                case 'password':
                    characterImg.src = '../assets/character_cover.png';
                    break;
                case 'toggle':
                    characterImg.src = '../assets/character_down.png';
                    break;
            }
        }

        // Add focus/blur event listeners
        useridInput.addEventListener('focus', () => updateCharacterImage('userid'));
        useridInput.addEventListener('blur', () => updateCharacterImage('facing'));
        passwordInput.addEventListener('focus', () => {
            if (passwordInput.getAttribute('type') === 'password') {
                updateCharacterImage('password');
            } else {
                updateCharacterImage('userid');
            }
        });
        passwordInput.addEventListener('blur', () => updateCharacterImage('facing'));
        
        // Add event listener for password type changes
        passwordInput.addEventListener('input', () => {
            if (passwordInput.getAttribute('type') === 'password') {
                updateCharacterImage('password');
            } else {
                updateCharacterImage('userid');
            }
        });

        // Initialize character image on page load
        document.addEventListener('DOMContentLoaded', () => {
            updateCharacterImage('facing');
        });

        // Forgot Password Modal Functions
        function openForgotPasswordModal() {
            showAlert('Forgot password functionality coming soon!', 'info');
        }
        
        function Login() {
            const formData = new FormData();
            formData.append('action', 'login');
            formData.append('userid', document.getElementById('userid').value);
            formData.append('password', document.getElementById('password').value);

            fetch('../model/UserFunctions.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    showAlert(data.error, 'error');
                    document.getElementById('userid').value = '';
                    document.getElementById('password').value = '';
                }
            })
            .catch(error => {
                console.error('Error logging in:', error);
                showAlert('An error occurred while logging in: ' + error.message, 'error');
            });
        }
    </script>
</body>
</html>
