-- Create a database if it doesn't exist 
CREATE DATABASE IF NOT EXISTS employee_records;

-- Switch
USE employee_records;

-- Create an employee table
CREATE TABLE IF NOT EXISTS employees (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    hours_worked DECIMAL(10, 2) NOT NULL,
    salary DECIMAL(10, 2) NOT NULL,
    age INT NOT NULL
);

-- Add sample data (optional)
INSERT INTO employees (name, email, hours_worked, salary, age)
VALUES
    ('John Doe', 'john@gmail.com', 160.50, 50000.00, 30),
    ('Jane Smith', 'jane@gmail.com', 150.75, 55000.00, 28);
