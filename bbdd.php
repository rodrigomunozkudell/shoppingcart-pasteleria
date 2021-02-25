<?php
   $host = 'localhost';
   $username = 'rodrigo';
   $password = 'Nathan1234';
   $database = 'pasteleria';
   $port = 3307;

   $conexion = new mysqli($host, $username, $password, $database, $port);

   return $conexion;
?>