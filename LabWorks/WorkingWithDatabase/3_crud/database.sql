-- crud_user/
-- │
-- ├── db.php
-- ├── create.php
-- ├── insert.php
-- ├── read.php
-- ├── edit.php
-- ├── update.php
-- └── delete.php

CREATE DATABASE crud_user;

USE crud_user;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE
);
