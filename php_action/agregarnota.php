<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

$idUsuario = $_SESSION['userId'];
$idRol = $_SESSION['rol'];

$ufechanac 		= date('y/m/d');
$uemail 		= $_POST['uemail'];

$utelefono 		= $_POST['utelefono'];
$urolUser 		=	$idUsuario;


            $sql = "INSERT INTO notas (id_usu, fecha, desnota) 
            VALUES ($urolUser, '$ufechanac', '$uemail')";
            //echo $sql;exit;
            if($connect->query($sql) === TRUE) {
                $valid['success'] = true;
                $valid['messages'] = "Successfully Added";	
                header('location:../notas.php');

            } else {
                $valid['success'] = false;
                $valid['messages'] = "Error while adding the members";
            }

            // /else	
    
} 




$connect->close();

echo json_encode($valid);