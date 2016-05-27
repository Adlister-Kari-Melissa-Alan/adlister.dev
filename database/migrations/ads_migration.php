<?php
$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED DEFAULT NULL,
    name VARCHAR(240) NOT NULL,
    description TEXT NOT NULL,
    price DOUBLE NOT NULL,
    image_url VARCHAR(180),
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
)';

$dbc->exec($query);

?>