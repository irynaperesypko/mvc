<?php

namespace Ira\Models;

use PDO;
use PDOException;

class Model
{
    private $host = "localhost";
    private $port = 3306;
    private $user = "root";
    private $password = "password";
    private $dbname = "hillel";
    private $dbh;

    /**
     * @return string
     */
    public function __construct()
    {
        try {
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $this->dbh = new PDO("mysql:host={$this->host};port={$this->port};dbname={$this->dbname}", $this->user, $this->password,$opt);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }


    public function all($table)
    {
        return $this->dbh->query('SELECT * FROM ' . $table)->fetchAll();
    }

}