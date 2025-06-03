# Laravel Task Manager

A simple Task Manager web application built with Laravel.  
Allows users to create, edit, delete, and view tasks.

---

## Features

- List all tasks
- Add new tasks
- Edit existing tasks
- Delete tasks with confirmation
- Basic CRUD operations with Laravel resource controller
- Simple UI using Blade templates

---

## Prerequisites

- PHP >= 8.1
- Composer
- MySQL or any supported database
- Laravel 12.x installed (or run via composer)
- Node.js and npm (optional if you use Laravel Mix for assets)

---

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/laravel-task-manager.git
   cd laravel-task-manager
  ```

2. **Install PHP dependencies:**

   ```bash
   composer install
   ```

3. **Copy `.env` file and set up your environment variables:**

   ```bash
   cp .env.example .env
   ```

   * Update `.env` with your database credentials:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=task_db
   DB_USERNAME=your_db_user
   DB_PASSWORD=your_db_password
   ```

4. **Generate application key:**

   ```bash
   php artisan key:generate
   ```

5. **Run database migrations:**

   ```bash
   php artisan migrate
   ```

6. (Optional) **Seed database** if seeds exist:

   ```bash
   php artisan db:seed
   ```

7. **Run the development server:**

   ```bash
   php artisan serve
   ```

   The app will be available at: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## Usage

* Visit the home page to see the task list.
* Click **Add New Task** to create a task.
* Use **Edit** to update tasks.
* Use **Delete** button to remove a task (with confirmation popup).

---

## Project Structure

* `app/Http/Controllers/TaskController.php` - Controller handling CRUD operations
* `app/Models/Task.php` - Eloquent Task model
* `resources/views/layouts/app.blade.php` - Layout file
* `resources/views/tasks/index.blade.php` - Task listing page
* `resources/views/tasks/create.blade.php` - Create task form
* `resources/views/tasks/edit.blade.php` - Edit task form
* `resources/views/welcome.blade.php` - Welcome/home page

---

## CSS Styling

* CSS is located in `public/css/style.css` and linked in `layouts/app.blade.php`

---

## Troubleshooting

* If you get **Class "Controller" not found** error, ensure your `TaskController` extends `App\Http\Controllers\Controller` and that file exists.
* Check database credentials in `.env`.
* Run `php artisan migrate:fresh` to reset database if needed.

---

## License

This project is open-source and free to use.

---

## Contact

Created by \[SJA] - feel free to reach out!

---

## [More about Laravel](laravelinfo.md)

---
