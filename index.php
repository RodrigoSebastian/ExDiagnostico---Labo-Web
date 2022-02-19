<?php
    require './database/connection.php';
    if(!$connection)
        die();

    $statement = $connection->prepare("SELECT nombre, apellidoPaterno, apellidoMaterno, sexo, telefono, lada, correo, direccion FROM persona ORDER BY persona.idPersona");
    $statement->execute();
    $personas = $statement->fetchAll();

    // echo var_dump($personas);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!$connection)
            die();

        $apPaterno = $_POST['input_apPaterno'];
        $apMaterno = $_POST['input_apMaterno'];
        $direccion = $_POST['input_direccion'];
        $telefono = $_POST['input_telefono'];
        $correo = $_POST['input_correo'];
        $nombre = $_POST['input_name'];
        $sexo = $_POST['input_sexo'];
        $lada = "+".$_POST['input_lada'];

        $statement = $connection->prepare("INSERT INTO persona VALUES(0,:nombre,:apPaterno,:apMaterno,:sexo,:direccion,:correo,:lada,:telefono)");
        $resultado = $statement->execute(array(
            ':nombre' => $nombre,
            ':apPaterno' => $apPaterno,
            ':apMaterno' => $apMaterno,
            ':sexo' => $sexo,
            ':direccion' => $direccion,
            ':lada' => $lada,
            ':correo' => $correo,
            ':telefono' => $telefono
        ));

        header('Location: index.php');

    }

    require "view/index.view.php";
?>
