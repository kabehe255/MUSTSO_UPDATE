-- Create the database
CREATE DATABASE schoolinfo;

-- Use the newly created database
USE schoolinfo;

-- Create the admin_info table
CREATE TABLE admin_info (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Create the contact_info table
CREATE TABLE contact_info (
    id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(15),
    message VARCHAR(100) NOT NULL
);

-- Create the sent_information table
CREATE TABLE sent_information (
    id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    department VARCHAR(100),
    college VARCHAR(100),
    problem_title VARCHAR(150),
    image VARCHAR(100) NOT NULL,
    comment VARCHAR(100),
    sent_date DATETIME DEFAULT CURRENT_TIMESTAMP
);
