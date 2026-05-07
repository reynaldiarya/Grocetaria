# Grocetaria

A sophisticated grocery store management system and seamless online shopping experience.

<p align="center">
  <img src="https://img.shields.io/badge/version-1.0.0-blue.svg" />
  <img src="https://img.shields.io/badge/Laravel-8.x-FF2D20.svg" />
  <a href="LICENSE">
    <img alt="License" src="https://img.shields.io/badge/license-MIT-yellow.svg" target="_blank" />
  </a>
  <a href="https://github.com/reynaldiarya/Grocetaria">
    <img src="https://codecov.io/gh/reynaldiarya/Grocetaria/branch/main/graph/badge.svg" />
  </a>
</p>

## Description

Grocetaria is a production-ready retail solution built on the Laravel framework, specifically tailored for modern grocery businesses. It bridges the gap between traditional inventory management and digital commerce by providing a unified platform for both store owners and consumers. The application streamlines product discovery, cart management, and order fulfillment, ensuring an efficient end-to-end shopping workflow. Designed with scalability in mind, Grocetaria offers a robust foundation for businesses looking to digitize their grocery operations.

## Features

- **Integrated Inventory Management** - Maintain a centralized database of products with real-time stock and price adjustments
- **Dynamic Product Catalog** - Interactive user interface for customers to browse and search for grocery items with ease
- **Advanced Shopping Cart** - Seamlessly add, modify, and manage product quantities using integrated cart logic
- **Real-time Order Tracking** - Comprehensive tracking system for consumers to monitor the status of their deliveries
- **Administrative Analytics Dashboard** - Powerful internal tools for managing employees, products, and viewing sales performance reports
- **Role-Based Access Control (RBAC)** - Secure environment with distinct interfaces for administrators and consumers
- **Payment Verification** - Support for flexible payment methods including Proof of Payment (PoP) uploads and Cash on Delivery (COD)

## Tech Stack

- **Backend Framework**: Laravel 8.x (PHP 7.3 - 8.0+)
- **Database Engine**: Eloquent ORM (MySQL / MariaDB)
- **Frontend Toolkit**: Blade Templating, Laravel Mix, Bootstrap 5, PostCSS
- **State Management**: darryldecode/cart for shopping cart persistency
- **Security**: Laravel Sanctum for API and session protection

## Installation

### Prerequisites

- PHP 7.3 or higher
- Composer 2.0+
- Node.js 16+ & NPM
- MySQL 5.7+ or MariaDB 10.3+

### Steps

1. Clone the repository

```bash
git clone https://github.com/reynaldiarya/Grocetaria.git
cd Grocetaria
```

2. Install PHP dependencies

```bash
composer install
```

3. Install frontend dependencies

```bash
npm install
```

4. Configure the environment

```bash
cp .env.example .env
php artisan key:generate
```

5. Set up the database credentials in the `.env` file, then run migrations

```bash
php artisan migrate
```

6. Compile frontend assets

```bash
npm run dev
```

7. Start the application

```bash
php artisan serve
```

## Configuration

The application utilizes a standard Laravel `.env` configuration. Key variables include:

| Variable | Description | Default |
|----------|-------------|---------|
| `APP_URL` | Base application URL | `http://localhost:8000` |
| `DB_CONNECTION` | Database driver type | `mysql` |
| `DB_HOST` | Database server address | `127.0.0.1` |
| `DB_DATABASE` | Name of the database | `grocetaria_db` |
| `DB_USERNAME` | Database user | `root` |
| `DB_PASSWORD` | Database password | `(empty)` |

## Usage

### Consumer Workflow

1. **Registration**: Create an account via the registration form.
2. **Browsing**: Navigate the catalog to view available grocery products.
3. **Cart Management**: Add items to the cart and review the total cost.
4. **Checkout**: Provide delivery details and choose a payment method (COD or Transfer).
5. **Tracking**: Monitor the delivery status through the "Pelacakan" section.

### Administrative Workflow

1. **Dashboard Access**: Access the `/dashboard` route (requires admin credentials).
2. **Inventory Control**: Add or update product details and pricing.
3. **Employee Management**: Manage staff profiles and roles.
4. **Reporting**: Review sales reports and transaction history in the "Laporan" module.

## Project Structure

```text
/
├── app/
│   ├── Http/Controllers/   # Core application logic and routing handlers
│   ├── Models/             # Eloquent models (Produk, Pemesanan, Konsumen, etc.)
│   └── Middleware/         # Custom authentication and role-based filters
├── config/                 # Framework and package configuration files
├── database/
│   ├── migrations/         # Database schema definitions
│   └── seeders/            # Initial data population scripts
├── public/                 # Entry point and compiled static assets
├── resources/
│   ├── views/              # Blade templates (Admin and Utama/Customer UI)
│   └── js/css/             # Frontend source files and styling
├── routes/                 # Web and API route definitions
└── storage/                # Application logs and uploaded files
```

## Scripts / Commands

| Command | Purpose |
|---------|---------|
| `php artisan migrate` | Execute database migrations |
| `php artisan db:seed` | Seed the database with initial data |
| `npm run dev` | Compile assets for local development |
| `npm run prod` | Compile and optimize assets for production |
| `php artisan route:list` | Display all registered application routes |

## Contributing

Professional contributions are welcome to enhance Grocetaria.

1. Fork the repository
2. Create a specific feature branch (`git checkout -b feature/improvement`)
3. Commit your changes with clear, descriptive messages
4. Push to the branch (`git push origin feature/improvement`)
5. Submit a Pull Request for review

## License

This project is licensed under the MIT License. Refer to the [LICENSE](LICENSE) file for more information.

## Author

- Dea Nabila Husna
- Meirza Putri Liandhie
- Selviana Ayu Irawan
- Luthfi Nahar Junestyo
- Reynaldi Arya
- Moh. Ilham Fahrezy
