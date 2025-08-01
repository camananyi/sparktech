<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<body class='container mt-4'>
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(255),
  role ENUM('user','parent','mentor','admin'),
  approved TINYINT(1) DEFAULT 0
);
CREATE TABLE progress (
  id INT AUTO_INCREMENT PRIMARY KEY,
  mentee_id INT,
  mentee_name VARCHAR(100),
  parent_email VARCHAR(100),
  update TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE mentor_resources (
  id INT AUTO_INCREMENT PRIMARY KEY,
  mentor_id INT,
  link TEXT,
  description TEXT
);
</body>