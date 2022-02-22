<?php

class m0003_default_user_status {

    public function up() {

        $db = \ghargest\phpmvc\Application::$app->db;

        $sql = "ALTER TABLE users CHANGE COLUMN status status TINYINT NOT NULL DEFAULT 0;";

        $db->pdo->exec($sql);
    }

    public function down() {

        $db = \ghargest\phpmvc\Application::$app->db;

        $sql = "ALTER TABLE users CHANGE COLUMN status status TINYINT NOT NULL;";

        $db->pdo->exec($sql);
        
    }
}