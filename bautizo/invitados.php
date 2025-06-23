<?php 
require_once 'bd.php';
require_once 'utilidades.php';

/**
 * id: petición de invitación
 * familia: nombre de la familia invitada
 * telefono: numero de teléfono del invitado
 * personas: numero de personas que asistirán
 * : tipo de invitado
 * status: 0 = invitado no confirmado,
 *         1 = invitado confirmado,
 *         2 = invitado no asistirá
 * tipo: tipo de invitado
 *        0 = familia, 
 *        1 = amigo,
 *        2 = compañero de trabajo
 */
// Para usar un JSON:
// $invitadosJson = file_get_contents('invitados.json');
// $invitados = json_decode($invitadosJson, true);


//URL de ejemplo
$urlInvitacion = "https://example.com/invitados.php";

/**
 * INICIO DE APLICACIÓN
 */

// Verifica si se ha enviado el ID del invitado
if(!isset($_GET['id']) || $_GET['id'] == 0 || $_GET['id'] >= 22){
    //redirect a pagina de error
    header("Location: error404.php");
    exit;
}else{
    $idInvitado = $_GET['id'];
    $invitado = callInvitado($idInvitado) ;
    if($invitado["status"] == 0){
        require_once 'header.php';
        if($invitado["tipo"] == 0){
            echo "<h1 style='text-align: center;' >Familia ".$invitado["familia"]."</h1>";
        }elseif($invitado["tipo"] == 1 || $invitado["tipo"] == 2){
            echo "<h2 style='text-align: center;'>".$invitado["familia"]."</h2>";
        }
        require_once 'body.php';
        require_once 'footer.php';
    }elseif($invitado["status"] == 1){
        
        header("Location: confirmado.php");
    }elseif ($invitado["status"] == 2) {
        
        header("Location: rechazado.php");
    }
    
}

?>