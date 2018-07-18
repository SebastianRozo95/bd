<?php

    $host = "localhost";
    $user = 'admin';
    $password = '12345';
    $Base = 'examen';
    $Conexion;
    function IniciarConexion(){
       try{
       $GLOBALS['Conexion']=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['password'],$GLOBALS['Base']);
       }catch(PDOException $e){
       }

    }

    function  DesactivarConexion(){
        $GLOBALS['Conexion']->close();
    }
?>
