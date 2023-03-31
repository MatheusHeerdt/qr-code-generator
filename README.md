# Laravel QR Code Generator

This project is a web application developed in Laravel that allows you to generate QR codes for specific URLs. It uses the PHP QR Code library to generate QR codes.

## Requirements

To run this application, you will need:

- PHP 8.1 or higher
- Laravel 9.x or higher
- PHP GD extension

## Installation

1. Clone this repository on your local machine.
2. Install the necessary dependencies by running the following command in the project root directory:

composer install

3. Configure the database connection in the `.env` file.
4. Run the database migrations by running the following command in the project root directory:

php artisan migrate


5. Install the GD for PHP if it is not already installed on your system.
6. Start the development server by running the following command in the project root directory:

php artisan serve


7. Open your web browser and go to http://localhost:8000 to access the application.

## Usage

1. On the home page, enter the data you want to encode in the QR code.
2. Choose the data type (URL, text, phone number, etc.).
3. Click the "Generate QR Code" button.
4. The QR code will be displayed on the screen. You can save it as an image or print it.

## Credits

- PHP QR Code library: https://github.com/SimpleSoftwareIO/simple-qrcode
- Laravel Framework: https://laravel.com/

