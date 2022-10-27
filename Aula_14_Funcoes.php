<?php

function connection()
{
    $pdo = new PDO("mysql:host=localhost, dbname=books", "root", "");
    return $pdo;
}

function getDate($tabela)
{
    $connection = connection();
    $query = $connection->query("select * from {$tabela}");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData("registro"));