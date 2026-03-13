CREATE DATABASE IF NOT EXISTS feedback_system;
USE feedback_system;

CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Temporary plain credential (for quick class demo):
INSERT INTO admin (username, password)
VALUES ('admin', 'admin123')
ON DUPLICATE KEY UPDATE username = VALUES(username);

-- Recommended secure alternative (replace plain password row):
-- INSERT INTO admin (username, password)
-- VALUES ('admin', '$2y$10$replace_with_password_hash');
