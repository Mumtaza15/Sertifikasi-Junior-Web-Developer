# Scholarship Registration System

## Overview
This Laravel project allows students to register for scholarships based on their current semester and automatically assigns their GPA (IPK). Depending on the GPA, certain fields like scholarship selection and document upload may be enabled or disabled.

## How to Run

1. Clone the repository.
2. Install dependencies:
    ```
    composer install
    ```
3. Setup the `.env` file and configure your database connection.
4. Run migrations:
    ```
    php artisan migrate
    ```
5. Run dev scripts:
    ```
    npm run dev
    ```
6. Serve the application:
    ```
    php artisan serve
    ```

## Folder Structure

- **app/Http/Controllers**: Contains all the controllers for handling form submissions.
- **resources/views**: Contains Blade templates for form and results views.
- **routes/web.php**: Defines the routes for form submission and results display.
