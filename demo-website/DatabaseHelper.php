<?php

class DatabaseHelper {

    private $connection;

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
        $statement = $this->connection->prepare($query);

        $statement->execute($queryParams);

        return $statement;
    }
}