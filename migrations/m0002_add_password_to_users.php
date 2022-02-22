<?php

class m0002_add_password_to_users {

    public function up() {

        $db = \ghargest\phpmvc\Application::$app->db;

        $sql = "ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL AFTER email;";

        $db->pdo->exec($sql);
    }

    public function down() {

        $db = \ghargest\phpmvc\Application::$app->db;

        $sql = "ALTER TABLE users DROP COLUMN password;";

        $db->pdo->exec($sql);
        
    }
}