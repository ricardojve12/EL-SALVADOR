<?php
class Conexion2
{
    public static function Conectar2()
    {
        define('servidor', 'localhost');
        define('nombre_bd', 'id21694231_pangrande');
        define('usuario', 'id21694231_richardjv11');
        define('password', 'Weed420@');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $conexion = new PDO("mysql:host=" . servidor . "; dbname=" . nombre_bd, usuario, password, $opciones);
            return $conexion;
        } catch (Exception $e) {
            die("El error de Conexión es: " . $e->getMessage());
        }
    }
}
