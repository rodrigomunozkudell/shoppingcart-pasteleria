<?php
    class Database {
        public static function connect() {
            $host = 'localhost';
            $username = 'rodrigo';
            $password = 'Nathan1234';
            $database = 'carrito';

            $conexion = new mysqli($host, $username, $password, $database);
            $conexion->query("set names 'utf8'");

            return $conexion;
        }
    }
?>