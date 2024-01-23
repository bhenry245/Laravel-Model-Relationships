## Overview
This file is a laravel project I set up to answer the question of: 
"Create a Laravel model relationship, a one-to-many association, between users and orders, along with appropriate methods to retrieve related data."

## Project Structure
The project is organized as follows:

- **Models**:
    - `User.php`: The User model represents users in the system. It is located in `app/Models` and includes a one-to-many relationship with orders.
    - `Order.php`: The Order model represents individual orders and includes a foreign key relationship to users. It is also located in `app/Models`.

- **Controllers**:
    - `OrderController.php`: This controller contains the logic for retrieving a user's orders based on their username. The `getUserOrders` method handles this functionality.

- **Front-end**:
    - `welcome.blade.php`: This Blade template is the landing page of the application. It includes a simple HTML form for submitting a username to retrieve associated orders. It displays user information and orders when available. If not it will return "No user found!"

## Model Relationships

- The `User` model has a one-to-many relationship with the `Order` model. Each user can have multiple orders, while each order belongs to a single user.

## Database (Valid Users and Orders)

USERS TABLE
+----+---------+----------------------+---------------------+---------------------+
| id | name    | email                | created_at          | updated_at          |
+----+---------+----------------------+---------------------+---------------------+
|  1 | john    | john.doe@example.com | 2024-01-22 23:51:43 | 2024-01-22 23:51:43 |
|  2 | brandon | bhenry@example.com   | 2024-01-22 23:52:08 | 2024-01-22 23:52:08 |
|  3 | katie   | khall@example.com    | 2024-01-22 23:52:29 | 2024-01-22 23:52:29 |
+----+---------+----------------------+---------------------+---------------------+


ORDERS TABLE
+----+------------+---------+---------------------+---------------------+
| id | Name       | user_id | created_at          | updated_at          |
+----+------------+---------+---------------------+---------------------+
|  1 | Clothes    |       1 | 2024-01-22 23:55:02 | 2024-01-22 23:55:02 |
|  2 | TV         |       1 | 2024-01-22 23:55:02 | 2024-01-22 23:55:02 |
|  3 | PS5        |       2 | 2024-01-22 23:55:02 | 2024-01-22 23:55:02 |
|  4 | Charger    |       2 | 2024-01-22 23:55:02 | 2024-01-22 23:55:02 |
|  5 | Smartphone |       2 | 2024-01-22 23:55:02 | 2024-01-22 23:55:02 |
+----+------------+---------+---------------------+---------------------+


Thanks so much for this coding challenge! I had fun writing it! 
I decided to tackle this ptoblem by creating a repository so you can pull it down and see the work yourself! 
