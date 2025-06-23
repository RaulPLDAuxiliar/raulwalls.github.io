<?php
require_once "bd.php";
require_once "utilidades.php";

// Se recuperan los datos del formulario
$id = $_POST["id"];
$status = $_POST["status"];
$mensaje = $_POST["mensaje"];

$invitado = callInvitado($id);
$familia = $invitado["familia"];

// Se actualiza el estado del invitado en la base de datos
$query = "UPDATE invitados SET status = '$status' WHERE id = '$id'";
if (mysqli_query($connect, $query)) {
    echo "Invitado actualizado correctamente.";
} else {
    echo "Error al actualizar el invitado: " . mysqli_error($connect);
}


// Se manda el mensaje del invitado al correo de los padres
$to = "raul.walls18@gmail.com"; // Aquí debes poner el correo de los padres
$subject = "Mensaje de $familia para el bautizo de Gael Antonio";
$message = "Un invitado ha enviado un mensaje:\n\n" . $mensaje;

// Enviar el correo
mail($to, $subject, $body, $headers);

$headers = "From: invitaciones@bananabrain.com\r\n";


// header("Location: invitados.php?id=$id");
header("Location: gracias.php");
exit();
?>