<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda web 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color:#189AB4">
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" style="color: white;">TiendaWeb</a>
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" > 
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" style="color: white;" href="http://localhost/tiendaweb1/listadoProductos.php" > Lista de productos <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  
    <main>
        <div class="container">
            <form action="registrarproductos.php" method="POST">
                <h1  style="color:white;">ADMINISTRACION DE PRODUCTOS</h1>
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre Producto" name="NombreProducto">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca Producto" name="MarcaProducto">
                    </div>
                   
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Precio Producto" name="PrecioProducto">
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold" style="color:white;">Descripción:</label>
                        <textarea class="form-control" rows="4" name="Descripcion"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold" style="color:white;">Foto:</label>
                        <input type="text" class="form-control" placeholder="URL fotografia" name="foto">
                    </div>
                </div>
                
                <br> <br>
               
                <center>
                 <button type="submit" class="btn btn-outline-light" name="botonEnvio">Registar</button>
                </center>
            </form>
        </div>
    
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>