<?php 

    include("Basedatos.php");

if (isset($_POST["botonEditar"])){

    //1. Recibir los datos a editar 
    $nombre=$_POST["nombreEditar"];
    $precio=$_POST["precioEditar"];
    $descripcion=$_POST["descripcionEditar"];

    //2. Recibir el id del usuario a editar 
    $id=$_GET["id"];
    
    //3.Crear un objeto de la clase Basedatos
    $transaccion=new Basedatos();

    //4. Crear la consulta SQL para Editar
    $ConsultaSQL="UPDATE productos SET nombre='$nombre',precio='$precio',descripcion='$descripcion' WHERE id='$id'";

    //5. Llamar al metodo editarDatos()
    $transaccion->editarDatos($ConsultaSQL);

    //6. redirección 
    header("location:listadoProductos.php");
}





?>