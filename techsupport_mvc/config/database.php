<?php

class Database{
    public static function conectar(){
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=db_techsupport;charset=utf8mb4","root","");

            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $pdo->setAttribute(
                PDO::ATTR_EMULATE_PREPARES,
                false
            );

            return $pdo;
        } 
        catch (PDOException $e) {
            die("Não foi possível conectar ao banco.");
        }
    }
}
