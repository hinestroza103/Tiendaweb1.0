<?php

        include("Basedatos.php");

        $id=$_GET["id"];

        

        $transaccion= new Basedatos();

        $consultaSQL="DELETE FROM productos WHERE id='$id'";

        $transaccion->eliminarDatos($consultaSQL);



?>