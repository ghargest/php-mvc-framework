<?php

class m0001_initial {

    public function up() {

        $db = \ghargest\phpmvc\Application::$app->db;

        $sql = "CREATE TABLE users (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    firstname VARCHAR(255) NOT NULL,
                    lastname VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    status TINYINT NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                ) ENGINE=INNODB;";

        $db->pdo->exec($sql);
    }

    public function down() {

        $db = \ghargest\phpmvc\Application::$app->db;

        $sql = "DROP TABLE users;";

        $db->pdo->exec($sql);
        
    }
}