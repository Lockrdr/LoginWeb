<?php


/* Asignatura: GIW, Grupo:2, Miembros: Jose Luis Diaz, Carlos Guijarro Javier Lesaga, Miguel Torres. 
Este codigo es fruto exclusivamente del trabajo de sus miembros */

   // include ("teatroHelper .php");
   // include ("hash.php");


if ($_POST ["Usuario"])
{
    $user= $_POST ["Usuario"];
    $pass = $_POST ["Contra"];

    if ($pass == NULL || $user == null)
    {
        header ("Location: login.html");
    }
    else
    {


        if($user=="usuario1" && $pass=="pass1")
        {
            header ("Location: peticion.html");  
        }
            
        else
        {
            header ("Location: login.html"); 
        }


    }

}
else header ("Location: login.html");

?>
