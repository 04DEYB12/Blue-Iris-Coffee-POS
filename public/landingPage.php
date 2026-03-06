<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Iris Coffee - Point of Sale System</title>
    <link rel="icon" type="image/x-icon" href="../assets/blue_iris_logo.png">
    <link href="../dist/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #384862 0%, #483527 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white shadow-md z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <div class="absolute inset-0 bg-[#384862] rounded-full blur-lg opacity-50"></div>
                        <img src="../assets/blue_iris_logo.png" alt="Blue Iris Coffee Logo" class="relative w-10 h-10 rounded-full border-2 border-white shadow-lg">
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">Blue Iris Coffee</h1>
                        <p class="text-xs text-gray-600">Point of Sale System</p>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="#features" class="text-gray-600 hover:text-[#384862] transition-colors">Features</a>
                    <a href="#about" class="text-gray-600 hover:text-[#384862] transition-colors">About</a>
                    <button onclick="goToLoginPage()" class="bg-[#384862] hover:bg-opacity-90 text-white px-6 py-2 rounded-full transition-all duration-300 transform hover:scale-105 relative overflow-hidden group">
                        <span class="relative z-10">
                            <i class='bx bx-log-in-circle mr-2'></i>Log In
                        </span>
                        <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700">
                            <div class="bg-gradient-to-r from-transparent via-white/30 to-transparent opacity-70 h-full w-20"></div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section id="heros" class="pt-16 min-h-screen flex items-center relative overflow-hidden bg-gradient-to-br from-[#384862] to-[#483527]">
        <!-- Background decoration -->
        <div class="absolute top-20 right-10 w-72 h-72 bg-white/10 rounded-full opacity-20 animate-float z-0"></div>
        <div class="absolute bottom-20 left-10 w-48 h-48 bg-white/10 rounded-full opacity-20 animate-float z-0" style="animation-delay: 2s;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-md text-gray-800 px-6 py-3 rounded-full mb-8 shadow-lg border border-white/30">
                        <i class='bx bx-coffee mr-3 text-[#ffffff] text-xl'></i>
                        <span class="text-white font-semibold tracking-wide">Modern Coffee Shop Management</span>
                    </div>
                    <div class="space-y-6">
                        <h1 class="text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight tracking-tight">
                            Where <span class="text-[#69C5EE] font-extrabold">Efficiency</span> Meets <span class="text-[#69C5EE] font-extrabold">Coffee Service</span>
                        </h1>
                        <p class="text-xl text-white/90 leading-relaxed max-w-lg">
                            Streamline your coffee operations with our intelligent point-of-sale system designed for the modern cafe experience.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <button onclick="goToLoginPage()" class="bg-white text-[#384862] hover:scale-105 hover:shadow-xl px-8 py-4 rounded-xl transition-all duration-300 font-semibold shadow-lg">
                            <i class='bx bx-rocket mr-3 text-xl'></i>
                            <span>Get Started</span>
                        </button>
                        <a href="#features" class="border-2 border-white text-white hover:bg-white hover:text-[#384862] px-8 py-4 rounded-xl transition-all duration-300 font-semibold">
                            <i class='bx bx-info-circle mr-3 text-xl'></i>
                            <span>Learn More</span>
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8 mt-16">
                        <div class="text-center group">
                            <div class="text-4xl font-bold text-white mb-2 group-hover:scale-110 transition-transform">500+</div>
                            <div class="text-sm text-white/80 font-medium">Coffee Shops</div>
                        </div>
                        <div class="text-center group">
                            <div class="text-4xl font-bold text-white mb-2 group-hover:scale-110 transition-transform">50K+</div>
                            <div class="text-sm text-white/80 font-medium">Orders Daily</div>
                        </div>
                        <div class="text-center group">
                            <div class="text-4xl font-bold text-white mb-2 group-hover:scale-110 transition-transform">99.9%</div>
                            <div class="text-sm text-white/80 font-medium">Uptime</div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#384862]/20 to-[#483527]/20 rounded-3xl"></div>
                    <img src="../assets/hero_background.png" alt="Coffee Shop Management" class="relative rounded-2xl shadow-2xl w-full max-w-lg mx-auto group-hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Powerful Features</h2>
                <p class="text-xl text-gray-600">Everything you need to manage your coffee shop efficiently</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-[#384862]/10 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-coffee text-[#384862] text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Menu Management</h3>
                    <p class="text-gray-600">Create and manage your coffee menu with pricing, ingredients, and customizable options.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-[#483527]/10 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-user-check text-[#483527] text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Customer Management</h3>
                    <p class="text-gray-600">Track customer preferences, loyalty programs, and order history for personalized service.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-[#384862]/10 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-bell text-[#384862] text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Smart Alerts</h3>
                    <p class="text-gray-600">Receive notifications for low inventory, special orders, and daily sales summaries.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-[#483527]/10 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-chart text-[#483527] text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sales Analytics</h3>
                    <p class="text-gray-600">Visualize sales trends, popular items, and peak hours to optimize your business strategy.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-[#384862]/10 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-file text-[#384862] text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Report Generation</h3>
                    <p class="text-gray-600">Generate detailed sales reports, inventory summaries, and financial statements.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-[#483527]/10 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-shield text-[#483527] text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Secure & Reliable</h3>
                    <p class="text-gray-600">Data security with role-based access control and secure payment processing.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="py-20 bg-gradient-to-br from-[#384862]/5 to-[#483527]/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-25 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Designed for Modern Coffee Shops</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Blue Iris Coffee is specifically designed for coffee shops and cafes to streamline operations and enhance customer experience. Our intelligent platform helps baristas and managers efficiently track inventory, manage orders, and maintain comprehensive sales records.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class='bx bx-check-circle text-[#384862] text-xl mt-1'></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Easy to Use</h4>
                                <p class="text-gray-600">Intuitive interface designed for coffee shop professionals</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class='bx bx-check-circle text-[#384862] text-xl mt-1'></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Cloud-Based</h4>
                                <p class="text-gray-600">Access your coffee shop data anywhere, anytime</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class='bx bx-check-circle text-[#384862] text-xl mt-1'></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">24/7 Support</h4>
                                <p class="text-gray-600">Dedicated support team to help you succeed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative inline-block">
                        <img src="../assets/blue_iris_logo.png" alt="Blue Iris Coffee Platform" 
                        class="relative w-80 h-80 rounded-full ml-20">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 bg-[#384862]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-4">Ready to Transform Your Coffee Shop?</h2>
            <p class="text-xl text-white/80 mb-8">
                Join hundreds of coffee shops already using Blue Iris Coffee to streamline their operations.
            </p>
            <button onclick="goToLoginPage()" class="bg-white text-[#384862] hover:bg-gray-100 px-8 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg font-semibold">
                <i class='bx bx-rocket mr-2'></i>Get Started Today
            </button>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-10">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="../assets/blue_iris_logo.png" alt="Blue Iris Coffee Logo" class="w-8 h-8 rounded-full">
                        <h3 class="text-xl font-bold">Blue Iris Coffee</h3>
                    </div>
                    <p class="text-gray-400">Point of Sale System for coffee shops and cafes.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Go To</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#heros" class="hover:text-white transition-colors">Hero Section</a></li>
                        <li><a href="#features" class="hover:text-white transition-colors">Feature Section</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">About Section</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Dev. Team</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="https://www.facebook.com/04.deyb.12" target="_blank" class="hover:text-white transition-colors">Malaran, Dave</a></li>
                            <li><a href="https://www.facebook.com/aa.aranthou" target="_blank" class="hover:text-white transition-colors">Arisgado, Anthony</a></li>
                            <li><a href="https://www.facebook.com/elmarr.delacruz" target="_blank" class="hover:text-white transition-colors">Dela Cruz, Elmar</a></li>
                            <li><a href="https://www.facebook.com/2m4j3" target="_blank" class="hover:text-white transition-colors">Sumaylo, Mark Jhone</a></li>
                            <li><a href="https://www.facebook.com/Jobert.Tumbado" target="_blank" class="hover:text-white transition-colors">Tumbado, Jobert</a></li>
                        </ul>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="https://www.facebook.com/Dones.Jhen" target="_blank" class="hover:text-white transition-colors">Dones, Jhen Isaac</a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=61578974051498" target="_blank" class="hover:text-white transition-colors">Latoja, Jhoanna Mae</a></li>
                            <li><a href="https://www.facebook.com/roseclaire.gargar" target="_blank" class="hover:text-white transition-colors">Gargar, Rose Claire</a></li>
                            <li><a href="https://www.facebook.com/tapsawani.argielyn" target="_blank" class="hover:text-white transition-colors">Tapsawani, Argielyn</a></li>
                            <li><a href="https://www.facebook.com/sheila.maeis.3" target="_blank" class="hover:text-white transition-colors">Denosta, Shiela</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                &copy; 2026 Blue Iris Coffee. Developed by GCST 4th Year BSIT Students.
            </div>
        </div>
    </footer>
    
    <script>
        function goToLoginPage() {
            window.location.href = "LogInPage.php";
        }
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
