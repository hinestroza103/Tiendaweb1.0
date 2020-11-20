<?php 
         include("Basedatos.php");
        if (isset($_POST["botonEnvio"])){ 
       
        
         
        
        //Recibir los datos     
        $NombreProducto=$_POST["NombreProducto"];
        $MarcaProducto=$_POST["MarcaProducto"];
        $PrecioProducto=$_POST["PrecioProducto"];
        $Descripcion=$_POST["Descripcion"];
        $foto=$_POST["foto"];
            
        
        //Crear una copia de la clase BD 
        //Crear un objeto de la clase bd
        $transaccion=new Basedatos();

        //Crear una consulta sql para agregar datos
        $consultaSQL="INSERT INTO productos(nombre, marca, precio, descripcion,foto) VALUES ('$NombreProducto','$MarcaProducto','$PrecioProducto','$Descripcion','$foto')";
        
        $transaccion->agregarDatos($consultaSQL);
      
        //Redireccion a la vista que necesite 
        header("location:tiendaweb1.php");
              
      
      
      }

  ?>