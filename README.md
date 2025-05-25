<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


# 🌐 Fouraxiz Laravel Project – Interview Submission

## 🚀 Laravel Project Setup – `fouraxiz`

Follow these steps to install and run the Laravel project on your local machine.

---

### ✅ Prerequisites

Make sure your local machine has the following installed:
- [XAMPP (>= 8.2.12 / PHP 8.2.12)](https://www.apachefriends.org/download.html) (for Apache & MySQL server)
- [PHP (>= 8.4)](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Laravel Installer](https://laravel.com/docs/11.x/installation)
- [Node.js & NPM](https://nodejs.org/) (for frontend asset compilation)

---

### 🛠️ Installation Steps

```bash
# ✅ Step 1: Go to your XAMPP htdocs directory
# Manually open the htdocs folder
# Then type cmd in the folder path and press Enter

# ✅ Step 2: Install Laravel installer globally using Composer
composer global require laravel/installer

# ✅ Step 3: Create a new Laravel project named 'fouraxiz'
laravel new fouraxiz
# Wait around 5 to 10 minutes for the installation to complete

# ✅ Step 4: Move into the project directory
cd fouraxiz

# ✅ Step 5: Open the project in Visual Studio Code
code .

# ✅ Step 6: Configure database connection (MySQL)
# Open the .env file and set the following values:
# (You can use Notepad or VS Code)
# In .env file, set the DB values:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=

# ✅ Step 7: Enable MySQL driver in php.ini
# Open your php.ini file (usually in xampp/php/php.ini)
# Make sure the following line is uncommented (remove semicolon if exists):
extension=pdo_mysql

# ✅ Step 8: Restart Apache from XAMPP control panel

# ✅ Step 9: Create the Database in MySQL
fouraxiz

# ✅ Step 10: Run Laravel Migrations
php artisan migrate

# ✅ Step 11: Run Laravel development server
php artisan serve

# ✅ Step 12: Open your browser and go to:
http://127.0.0.1:8000/


# 👨‍💻 Developer Information
My name is Nafizul Islam. I have completed my BSc in Software Engineering from Daffodil International University in 2023.

This Laravel project is developed as part of my **internship interview task** for **Fouraxiz Software Company** (USA office site front page design).

---

# 📢 Interview Task Details
**Position:** Intern – WordPress/Laravel Developer  
**Platform:** BD Jobs Fair – 21 May 2025  
**Location:** KBI, Farmgate, Dhaka

> You have been shortlisted for the position of Intern WordPress/Laravel Developer through the BD Jobs Fair – 2025. As part of the interview process, please design the front page of our site (https://fouraxiz.com) targeted for our USA office. Submit your work link via email by **31/05/2025**. Top performers will be selected for the final appointment.  
> Md. Alim Razi
> Manager Admin  
> 4axiz IT Ltd.  
> 📧 admin@4axiz.com

---