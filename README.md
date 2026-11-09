
<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

# Application Name

Library Application

# Objective

This application was created as a learning project to practice developing a library management application. It provides features for managing book categories, books, members, loans, returns, and reports.

# How to Run Application

## Requirements

Make sure the following software is installed:

- PHP
- Composer
- MySQL
- Git
- Node.js and npm

## 1. Clone Repository

Clone the project repository:

```bash
git clone https://github.com/EnokhIovan/app-perpustakaan.git
```

## 2. Change Directory to Project

Navigate to the project directory:

```bash
cd app-perpustakaan
```

## 3. Install Dependencies

Install PHP dependencies using Composer:

```bash
composer install
```

Install frontend dependencies:

```bash
npm install
```

## 4. Configure Environment

Copy the example environment file:

```bash
copy .env.example .env
```

For Linux/macOS:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Open the `.env` file and configure the database connection:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_perpustakaan
DB_USERNAME=root
DB_PASSWORD=
```

### Database Configuration Explanation

- `DB_CONNECTION`: Specifies the database driver used by the application, which is MySQL.
- `DB_HOST`: Specifies the database server address. `127.0.0.1` refers to the local machine.
- `DB_PORT`: Specifies the MySQL connection port, which defaults to `3306`.
- `DB_DATABASE`: Specifies the database name used by the application.
- `DB_USERNAME`: Specifies the MySQL username used to access the database.
- `DB_PASSWORD`: Specifies the MySQL password. Leave it empty if the MySQL account does not use a password.

Before running migrations, create a MySQL database named `db_perpustakaan` using phpMyAdmin or MySQL.

### Internal API Configuration

Add or adjust the following configuration in `.env`:

```env
INTERNAL_API_URL=http://127.0.0.1:8011
```

This configuration specifies the URL used by the application to communicate with its internal API server. Port `8011` is used for the second Laravel server.

## 5. Run Database Migrations and Seeders

Run the following command to create the database tables and insert initial data:

```bash
php artisan migrate --seed
```

To reset the database and recreate all tables with seed data:

```bash
php artisan migrate:fresh --seed
```

**Note:** The `migrate:fresh` command deletes all existing tables and data before recreating them. Use it only when resetting the database is intended.

## 6. Run the Application

This project requires two Laravel servers to run properly. The main application runs on port `8000`, while the internal API runs on port `8011`.

Open two separate terminals in the project directory.

### Terminal 1 — Main Application

Run the main application server:

```bash
php artisan serve
```

Access the application through:

```text
http://127.0.0.1:8000
```

### Terminal 2 — Internal API

Run the internal API server:

```bash
php artisan serve --port=8011
```

The internal API will be available at:

```text
http://127.0.0.1:8011
```

Both servers must remain running while using the application. The internal API is required by features such as Dashboard and Reports.

## 7. Accessing the API

The API base URL is:

```text
http://127.0.0.1:8000/api
```

You can use Postman to test the available API endpoints.

For requests that return JSON, add the following header:

```http
Accept: application/json
```

Configure the HTTP method, endpoint, headers, and request body according to the available API routes.

## 8. Stopping the Servers

To stop a server, select its terminal and press:

```text
Ctrl + C
```

Repeat this for both terminals.

# Difference Between Model, View, and Controller

- **Model** is responsible for managing the application's data and interacting with the database.
- **View** handles the interface displayed to the user.
- **Controller** acts as an intermediary between the Model and the View and manages the application's flow.
