<?php
$password = "";
$user = "root";
$database = "agenda";

try {
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$database,
        $user,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception $e) {
    echo "Erro de conexão: ".$e->getMessage();
}
