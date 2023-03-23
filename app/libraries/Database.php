<?php

class Database
{
    private $db = "TP";
    private $host = "localhost";
    private $username = "root";
    private $password = "qwerty";
    public $_connection;
    public $table;
    private $query;

    public function getConnection()
    {
        $this->_connection = null;
        try {
            $this->_connection = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->db,
                $this->username,
                $this->password
            );
        } catch (PDOException $exception) {
            echo "Err : " . $exception->getMessage();
        }
    }

    public function query($sql)
    {
        $this->query = $this->_connection->prepare($sql);
    }

    public function execute()
    {
        $this->query->execute();
    }

    public function single()
    {
        $this->query->execute();
        return $this->query->fetch();
    }

    public function rowCount()
    {
        return count($this->resultSet());
    }
    public function resultSet()
    {
        $this->query->execute();
        return $this->query->fetchAll();
    }
}

?>