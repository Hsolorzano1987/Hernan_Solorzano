<?php

$name = isset($_POST['txt_name']) ? $_POST['txt_name'] : '';
$emailAddress = isset($_POST['txt_emailAddress']) ? $_POST['txt_emailAddress'] : '';
$message = isset($_POST['txt_message']) ? $_POST['txt_message'] : '';

<<<<<<< HEAD

echo phpinfo();
=======
try {
    $conexion = new PDO('mysql:host=localhost;port=3306;dbname=usuarios', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


    $pdo = $conexion->prepare('INSERT INTO ingresos(name, emailAddress ,message ) VALUES(?,?,?)');
    $pdo->bindParam(1, $name);
    $pdo->bindParam(2, $emailAddress);
    $pdo->bindParam(3, $message);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

}catch (PDOException $error){
    echo $error->getMessage();
    die();
}



>>>>>>> ad9a8566e19eef66a7ef1323a69348ccd496db92
