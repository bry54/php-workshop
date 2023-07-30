<?php

class DatabaseHelper {

    private $connection;
    private $statement;

    public function __construct($config, $username = 'root', $password = 'toor')
    {

        $params = http_build_query($config,'', ';');

        $dsn = "mysql:$params";
        $this->connection = new PDO($dsn, $username, $password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $queryParams=[])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($queryParams);

        return $this;
    }

    public function findAll()
    {
        return $this->statement->fetchAll();

    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result){
            abort();
        }

        return $result;
    }
}