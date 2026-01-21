-- Ejecutá este script estando dentro de tu base en Hostinger.

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(120) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  role ENUM('admin','worker') NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE worksites (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  address VARCHAR(255) NOT NULL,
  lat DECIMAL(10,7) NULL,
  lng DECIMAL(10,7) NULL
) ENGINE=InnoDB;

CREATE TABLE worker_worksites (
  worker_id INT NOT NULL,
  worksite_id INT NOT NULL,
  assigned_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (worker_id, worksite_id),
  FOREIGN KEY (worker_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (worksite_id) REFERENCES worksites(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE checkins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  worker_id INT NOT NULL,
  checkin_time DATETIME NOT NULL,
  checkout_time DATETIME NULL,
  checkin_lat DECIMAL(10,7) NULL,
  checkin_lng DECIMAL(10,7) NULL,
  checkout_lat DECIMAL(10,7) NULL,
  checkout_lng DECIMAL(10,7) NULL,
  FOREIGN KEY (worker_id) REFERENCES users(id) ON DELETE CASCADE,
  INDEX idx_worker_time (worker_id, checkin_time)
) ENGINE=InnoDB;

CREATE TABLE photos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  worker_id INT NOT NULL,
  photo_blob LONGBLOB NOT NULL,
  mime_type VARCHAR(100) NOT NULL,
  created_at DATETIME NOT NULL,
  FOREIGN KEY (worker_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;

INSERT INTO users (name, email, password_hash, role) VALUES
('Admin', 'admin@demo.com', '$2y$10$k1JjKp2qH5C6r9JqXcXnIuUu6lP8m8U5m8kVSWnYt0c1fJtBvY1aC', 'admin');
-- La contraseña demo es: Admin123
