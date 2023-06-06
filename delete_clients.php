<?php 
    require "connection.php";
    session_start();
    error_reporting(0);

    if(strlen($_SESSION['id'] == 0)){
        header("Location:/Zamphanvu Fitness/clients.php");
    }else{
        if (isset($_GET['id'])){
            $id =$_GET['id'];

            $sql_query ="DELETE FROM client WHERE id=$id";
            $result  = mysqli_query($conn, $sql_query) or die(mysqli_error());

            header('Location: /Zamphanvu Fitness/clients.php');
        }
    }

?>