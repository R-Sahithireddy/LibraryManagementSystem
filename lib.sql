CREATE DATABASE library_management;

USE library_management;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);

CREATE TABLE books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    author VARCHAR(100),
    published_year INT
);

CREATE TABLE loans (
    loan_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    book_id INT,
    loan_date DATE,
    return_date DATE,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (book_id) REFERENCES books(book_id)
);
