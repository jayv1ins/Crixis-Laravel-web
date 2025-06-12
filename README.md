# Laravel Blog Web CRUD Application

This is a simple blog web application built using **Laravel**, **MySQL**, and **Tailwind CSS**. It features full **CRUD (Create, Read, Update, Delete)** functionality that allows users to publish blog articles and leave comments. The main goal of this project is to demonstrate basic web development concepts, database interaction, and frontend design integration.

## 📌 Project Description

The application enables users to:
- Create and publish articles that are visible to all visitors
- View all posted articles in a clean and responsive layout
- Edit and delete existing blog posts
- Add comments to articles (basic commenting system)

The frontend is styled using **Tailwind CSS** to ensure a modern and responsive user interface, while the backend uses **Laravel** for routing, model-view-controller (MVC) structure, and database operations with **MySQL**.

This project helped me gain hands-on experience in:
- Laravel routing, controllers, and Eloquent ORM
- Designing dynamic and responsive layouts using Tailwind CSS
- Implementing user input forms and handling data validation
- Structuring and managing CRUD operations in a real-world app

## 🎯 Features

- ✅ Post blog articles (title, content, date)
- ✅ Read and browse all published articles
- ✅ Update and delete blog entries
- ✅ Add basic comments to posts
- ✅ Responsive design using Tailwind CSS

## 🛠️ Technologies Used

- [Laravel 8](https://laravel.com/)
- [MySQL](https://www.mysql.com/)
- [Tailwind CSS](https://tailwindcss.com/)
- PHP 8+
- Blade Templates

## 🧪 How to Run the Project Locally
**Clone the repository**
**Install dependencies** 
composer install 
npm install && npm run dev
**Set up your environment variables**
cp .env.example .env
php artisan key:generate
**Configure your database in .env file**
**Run migrations and Seeder** 
php artisan migrate
php artisan seed
**Start the local development server**
php artisan serve
