
ALTER TABLE progress_updates ADD COLUMN IF NOT EXISTS filename VARCHAR(255);

DROP TABLE IF EXISTS progress_comments;
CREATE TABLE progress_comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    progress_id INT,
    mentor_id INT,
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
