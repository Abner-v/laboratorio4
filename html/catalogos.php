<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/Styles.css" media="screen" />
    <title>Inicio</title>
</head>

<body>
    <header class="header">
        <div class="container logo-nav-container">
           <!-- <a href="../imagenes/" class="logo">LOGO</a>-->
            <img src="../imagenes/mercedes.jpg" alt="logo_mercedes">
            <span class="menu-icono">VER MENU</span>
                <nav class="navigation">
                    <ul>
                    <li><a href="../controllers/index.php">INICIO</a></li>
                        <li><a href="../controllers/institucional.php">INSTITUCIONAL</a></li>
                        <li><a href="../controllers/catalogos.php">CATALOGOS</a></li>
                        <li><a href="">PEDIDOS</a></li>
                        <li><a href="">DESCARGAS</a></li>
                        <li><a href="">LOGIN</a></li>
                    </ul>
                </nav>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="cat">
                <nav class="navigation">
            <ul>
                        <li><a id="general" href="">CATALOGO GENERAL</a></li>
                        <li><a id="grupo" href="">CATALOGO POR GRUPO </a></li>
                        <li><a id="marcas" href="">CATALOGO POR MARCA</a></li>
                        
                    </ul>
            </nav></div>
            </div>       
            <h1 id="titulo">aqui va el catalogo segun se elija la opcion </h1>
         
            <div class="container" id="contiene">

            </div>
    </main>
    <footer class="footer">
        <div class="container">
        </div>

    </footer>
<script src="../scripts/script.js">holamundo</script>
</body>

</html>