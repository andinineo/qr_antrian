CREATE DATABASE IF NOT EXISTS db_antrian CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE db_antrian;

CREATE TABLE IF NOT EXISTS queues (
  id INT AUTO_INCREMENT PRIMARY KEY,
  patient_name VARCHAR(200) NOT NULL,
  nik VARCHAR(50) DEFAULT NULL,
  phone VARCHAR(30) DEFAULT NULL,
  queue_number INT NOT NULL,
  token VARCHAR(64) NOT NULL UNIQUE,
  status ENUM('waiting','called','served','cancelled') NOT NULL DEFAULT 'waiting',
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  called_at DATETIME NULL
);

CREATE INDEX idx_status_created ON queues (status, created_at);