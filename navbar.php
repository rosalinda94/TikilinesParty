<?php
session_start();
if(!isset($_SESSION["nada"])){
    header('Location: ingresar.php');
}
?>
         
<center>

<?php
echo "Bienvenido "."".$_SESSION['nada'];
?></center>

<title>Tikilines Party Falcon</title>
</head>
</center>
<body background="7.jpeg">
<div id="container">
        <div id="wrapper">
        <header>
            <div class="logo"></div>
            <nav>
                <ul>
                    <li><a href="indexre.php" >Inicio</a></li>
                    <li><a href="catalogore.php">Producto</a></li>
                    <li><a href="contactore.php">Contacto</a>                     
                    <li><a href="#">Ayuda</a>
                       <ul>
                           <li><a href="manual.php">Manual</a></li>                       
                           <li><a href="infore.php">Informacion</a></li>                       
                        </ul> 
                    </li>
                    <li><a href="cerrarsesion.php">Salir</a>                    
                    <li style="border-right:none"></li>
                </ul>
            </nav>
        </header>