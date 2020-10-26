<?php

declare(strict_types=1);

class insertPDO
{
    public function render(array $GET, array $POST)
    {
        require 'config.php'; //user and password of database
        require 'connection.php'; // database connection
        $pdo = openConnection($dbuser, $dbpass);
        session_start();
    }
}

