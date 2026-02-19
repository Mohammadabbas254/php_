Trip Registration Form (PHP + MySQL)

A simple trip registration web application built using PHP, MySQL, HTML, CSS, and JavaScript. This project allows users to submit their trip details through a form, and the data is stored in a MySQL database.

UI

<img width="1911" height="1024" alt="Screenshot 2026-02-20 002628" src="https://github.com/user-attachments/assets/4aa3845f-7a2f-45bc-8513-94faa17e7085" />

php myadmin dashboard 

<img width="1907" height="1005" alt="Screenshot 2026-02-20 002655" src="https://github.com/user-attachments/assets/ea6efb43-e9e2-44fb-900e-9a8300a3b4e1" />

Features

User-friendly trip registration form

Stores user details in MySQL database

Displays confirmation message after successful submission

Clean UI with background image and styling

Simple and beginner-friendly PHP project

Technologies Used

PHP

MySQL

HTML5

CSS3

JavaScript

XAMPP 

Project Structure
trip-form/
│
├── index.php        # Main form and PHP backend
├── style.css       # Styling for the form
├── index.js        # Optional JavaScript file
├── bg.jpg          # Background image
└── README.md       # Project documentation

Database Setup
Step 1: Create Database

Open phpMyAdmin and run:

CREATE DATABASE trip;

Step 2: Create Table
CREATE TABLE trip (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT,
    gender VARCHAR(10),
    email VARCHAR(50),
    phone VARCHAR(15),
    other TEXT,
    dt DATETIME
);


How It Works

User enters trip details in the form

Form submits data using POST method

PHP connects to MySQL database

Data is inserted into trip table

Confirmation message is displayed

Example Form Fields

Name

Age

Gender

Email

Phone

Other Information



