<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];
    if(isset($_COOKIE["tareas"])){
        $tareas=json_decode($_COOKIE["tareas"],true);
        unset($tareas[$id]);
        setcookie("tareas",json_encode($tareas),time()+60*60*24*7);
    }
}
header("Location:listar.php");
?>