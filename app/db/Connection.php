<?php

namespace Db;

class Connection
{
    private $connection;

    public function getConnection()
    {
        if ($this->connection === null) {
            $config = new \Doctrine\DBAL\Configuration();
            $connectionParams = [
                'dbname' => 'test',
                'user' => 'root',
                'password' => 'root',
                'host' => 'localhost',
                'driver' => 'pdo_mysql',
            ];
            $this->connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
        }
        return $this->connection;
    }
}