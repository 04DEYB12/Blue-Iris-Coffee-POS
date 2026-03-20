# Blue Iris Coffee POS System

A comprehensive Point of Sale (POS) system designed for coffee shop management.

## 📋 Table of Contents
- [Installation](#installation)
- [Accounts](#accounts)
- [Features](#features)
- [Development](#development)
- [Project Status](#project-status)

## 🚀 Installation

### Prerequisites
- XAMPP or similar web server environment
- Node.js (for CSS compilation)
- MySQL database

### Setup Instructions
1. Clone the repository
2. Configure database connection in `model/connection.php`
3. Run the CSS build command:
   ```bash
   npm run build-css
   ```
4. Access the application via your web server

## 👤 Accounts

### Default Admin Account
- **ID**: `CMIMS0001`
- **Password**: `CMIMS123`

## ✨ Features

### Core Features
- ✅ **Landing Page** (Open for Improvement)
- ✅ **User Authentication** with session management
- 🔄 **Forgot Password** functionality (pending)

### Components
- ✅ **Responsive Sidebar** with dynamic navigation
- ✅ **Sticky Header** with real-time date/time display
- ✅ **Toast Notifications** for user feedback

### Dashboard
- ✅ **Modern UI/UX Design** (Static implementation)
- 🔄 **Today's Revenue** tracking
- 🔄 **Today's Orders** monitoring
- 🔄 **Top Products** analysis
- 🔄 **Stock Alerts** system
- 🔄 **Recent Transactions** display
- ✅ **Quick Actions** panel

### Products Management
- 🔄 **Add Product** functionality
- 🔄 **Edit Product** capabilities
- 🔄 **Delete Product** operations
- 🔄 **View Product** details
- 🔄 **Search Product** feature
- 🔄 **Filter Product** options
- 🔄 **Sort Product** functionality

## 🛠️ Development

### Technology Stack
- **Frontend**: HTML5, Tailwind CSS, JavaScript
- **Backend**: PHP, MySQL
- **Icons**: Boxicons
- **Build Tool**: Node.js

### File Structure
```
Blue-Iris-Coffee-POS/
├── public/
│   ├── components/     # Reusable components
│   └── assets/         # Static assets
├── view/              # Page templates
├── model/             # Database models
├── controller/        # Business logic
└── dist/              # Compiled CSS
```

### CSS Compilation
```bash
npm run build-css
```

## 📊 Project Status

### Completed (✅)
- Database connection and setup
- Landing page design
- User authentication system
- Sidebar navigation
- Header component with real-time clock
- Dashboard UI/UX design

### In Progress (🔄)
- Product management system
- Point of Sale interface
- Transaction recording
- Forgot password functionality

### Pending (📋)
- Advanced reporting
- Inventory management
- Customer management
- Analytics dashboard

## 📅 Development Timeline

### March 03-04, 2026
- ✅ Database Connection
- ✅ Landing Page
- ✅ Login Authentication

### March 19-20, 2026
- ✅ Dashboard (Static)
- ✅ Sidebar Component
- ✅ Header Component

---

**Note**: This project is actively being developed. Features marked as pending are planned for future releases.