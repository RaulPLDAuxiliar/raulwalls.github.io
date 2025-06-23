<?php

//Funcion para insertar o actualizar invitados en la base de datos
function insertInvitado($invitados){
    global $connect;
    
    foreach ($invitados as $invitado) {
        $query = "INSERT invitados (id, familia, telefono, personas, status, tipo) 
        VALUES (".$invitado["id"].", '"
                 .$invitado["familia"]."', '"
                 .$invitado["telefono"]."', "
                 .$invitado["personas"].", "
                 .$invitado["status"].", "
                 .$invitado["tipo"].")";
        if(mysqli_query($connect, $query)){
            echo "Invitado actualizado correctamente.";
        }else{
            echo "Error al actualizar el invitado: " . mysqli_error($connect);
        }
        
    }
}

//Funcion para obtener el invitado por ID
function callInvitado($id){
    global $connect;
    if(isset($_GET['id'])){
        //Muestra la Familia Invitada conforme a la solicitud
        // $invitado = $invitados[$_GET['id']];
        $query = "SELECT * FROM invitados WHERE id = ".$id;
        $result = mysqli_query($connect, $query);
        $invitado = mysqli_fetch_assoc($result);
    }
    return $invitado;
}

?>