<?php include("./../php/conexion.php") ?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStudio</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/libros_buscados.css">
    <link rel="stylesheet" href="../CSS/registro.css">


</head>

<body>
    <div id="Contenedor">
        <header id="Header">

            <a href="./../index.php"><img class="Logo" src="./../Imagenes/LogoBSfinal.png" alt=""></a>
            <form action="./../html/libros_buscados.php" method="POST" id="iniciar">
                <button class="Boton_Busqueda" type="submit"><img class="Icono" src="Imagenes/Icono_Busqueda.png"alt=""></button>
                <input  class="Input_Busqueda" value="" type="text" name="buscar" autocomplete="off" id="campo_busqueda" class="campo_busqueda_G">
            </form>

            <p id="bienvenido" class="Usuario">Hola
                <?php  
                        error_reporting(0); 
                        $nom = $_SESSION['nombre']; 
                        if(!($nom == null || $nom == '')){
                            echo $_SESSION['nombre'];
                        }
                    ?>
            </p>
            <form action="./../html/Carrito.php">
                <button id="Boton_Carrito"><img src="./../Imagenes/icons8-carrito-de-la-compra-cargado-64.png"
                        alt=""></button>
            </form>
        </header>
        <div id="Opciones">
            <form action="./../html/iniciar.php">
                <button id="Boton_Inicio" class="Formato_Boton">Iniciar Sesion</button>
            </form>
            <form action="./../html/registro.php">
                <button id="Boton_Registro" class="Formato_Boton">Registro de Usuario</button>
            </form>
            <form action="./../php/destruir.php">
                <button id="Boton_Cerrae" class="Formato_Boton">Cerrar Sesion</button>
            </form>
            <form action="./../html/ordenes.php">
                <button id="Boton_Ordenes" class="Formato_Boton">Ordenes</button>
            </form>
            <form action="./../html/libros.php">
                <button id="Boton_Libros" class="Formato_Boton">Libros</button>
            </form>      
        </div>
        <!-- FIN DE HEADER -->

        <!-- DE AQUI SE ELIMINA -->

        <div id="contenido">

            <div class="libros">
                <h2>Registro</h2>

                <form action="./../php/registro.php" method="POST" class="forms">
                    
                    <div class="elemento">
                        <label>Nombre</label>
                        <input value="" type="text" name="nombre" autocomplete="off" required>
                    </div>

                    <div class="elemento">
                        <label>Usuario</label>
                        <input value="" type="text" name="usuario" autocomplete="off" required>
                    </div>
                    
                    <div class="elemento">
                        <label>Telefono</label>
                        <input value="" type="text" name="telefono" autocomplete="off">
                    </div>
                    
                    <div class="elemento">
                        <label>Correo</label>
                        <input value="" type="email" name="correo" autocomplete="off" required>
                    </div>

                    <div class="elemento">
                        <label>Domicilio</label>
                        <input value="" type="text" name="domicilio" autocomplete="off" required>
                    </div>
                    
                    <div class="elemento">
                        <label>CP</label>
                        <input value="" type="text" name="cp" autocomplete="off" required>
                    </div>
                    
                    <div class="elemento">
                        <label>Contraseña</label>
                        <input value="" type="password" name="pass" required>
                    </div>
                    
                    <div class="elemento">
                        <button class="btn_forms" class="btn_inSesion" class="btn_opciones_G" type="submit">Registrarme</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Pie de pagina -->
        <footer id="Pie_de_Pagina">
            <h2 style="text-align:center;">BookStudio</h2><br><h4 style="text-align:center;">Informacion de contacto</h4>
        </footer>

    </div>

        <script type="text/javascript" src="../scripts/botones_Global.js"></script>
</body>

</html>