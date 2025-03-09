CREATE DATABASE ctf_challenge;
USE ctf_challenge;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    is_admin BOOLEAN DEFAULT 0
);

INSERT INTO users (username, password, is_admin) VALUES
('joe', 'securepassword', 0),
('admin', 'adminpass', 1);
