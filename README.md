# garage-management-system
# Garage Management System

# PROJECT DEMO VIDEO https://youtu.be/tcgR-7Ba9gg

A simple garage management application built with PHP and HTML/CSS for displaying clients and cars from a MySQL database.

## Features

- Displays client records from the `clients` table.
- Displays vehicle records from the `cars` table.
- Uses a MySQL database connection defined in `db_connect.php`.
- Basic dashboard UI available in `garage_management_dashboard_ui.jsx` for future React/Tailwind integration.

## Files

- `index.php` - Main frontend page that queries and displays clients and cars.
- `db_connect.php` - Database connection script for MySQL.
- `style.css` - Styles for the HTML layout.
- `garage_management_dashboard_ui.jsx` - React dashboard component prototype.
- `package-lock.json` - Node package lock file placeholder.

## Requirements

- PHP 7.x or newer
- MySQL / MariaDB
- Web server (Apache, Nginx, etc.)

## Setup

1. Place the project files in your web server document root.
2. Create a MySQL database named `auto_service_system`.
3. Create the required tables (`clients`, `cars`) and populate them with data.
4. Update `db_connect.php` with your database credentials if needed.
5. Open `index.php` in your browser through the web server.

## Example SQL

```sql
CREATE DATABASE auto_service_system;
USE auto_service_system;

CREATE TABLE clients (
    client_id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    email VARCHAR(255)
);

CREATE TABLE cars (
    plate_number VARCHAR(50) PRIMARY KEY,
    model VARCHAR(255) NOT NULL,
    brand VARCHAR(255) NOT NULL,
    manufacture_year YEAR
);
```

## Notes

- The current `index.php` page is read-only and does not include create/update/delete operations.
- `garage_management_dashboard_ui.jsx` is a UI component example and is not currently integrated into the PHP app.
