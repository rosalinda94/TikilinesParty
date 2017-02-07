<!DOCTYPE html>

<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/reset.css" type="text/css"  />
<link rel="stylesheet" href="css/style.css" type="text/css"  />
<link href="#" rel="shortcut icon" type="image/x-icon" /> <!--Icono de la pagina-->  

<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/jquery.innerfade.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript" language="javascript">
    $(function() {
    //  Basic carousel, no options
        $('#riel-pro').carouFredSel({
                items : 3,
                scroll: 2000,
                prev: '#prev',
                next: '#next'
        });
    });
</script>
<body background="7.jpeg";>
<script type="text/javascript" language="javascript">
    $(function() {
        $("#tips").innerfade({ animationtype: "slide", speed: 850, timeout: 10000, type: "sequence"});
    });
</script>

<title> Tikilines Party Falcon C.A.</title>
</head>
<body>
<div id="container">
    <div id="wrapper">
        <header>
            <nav>
                <ul>
                    <li><a href="index.php" class="selected">Inicio</a></li>
                    <li><a href="catalogo.php">Producto</a></li>
                     <li><a href="contacto.php">Contacto</a>                
                    <li><a href="#">Ingresar</a>
                        <ul>
                            <li><a href="ingresar.php">Ingresar</a></li>
                            <li><a href="registrarse.php">Registro</a></li>
                        </ul>
                        <li><a href="#">Ayuda</a>
                       <ul>
                           <li><a href="manual.php">Manual</a></li>                       
                           <li><a href="info.php">Informacion</a></li>                       
                        </ul> 
                    </li>
                </ul>
            </nav>
        </header>
        
        <section id="middle-pro">
<div class="h1"><img src="images/aaa.png" alt="" height="70" width="70"><h1>Inicio!</h1></div>
            <div class="riel-pro">
                <ul id="riel-pro">
                    <li><a>
                        <figure id="img-fruit"><img src="images/1.jpeg" alt=""></figure>
                    </a></li>
                    <li><a>
                        <figure id="img-fruit"><img src="images/decolugar.jpeg" alt=""></figure>
                    </a></li>
                    <li><a>
                        <figure id="img-fruit"><img src="images/cotillones.jpeg" alt=""></figure>
                    </a></li>
                    <li><a>
                        <figure id="img-fruit"><img src="images/dulces.jpeg" alt=""></figure>
                    </a></li>
                    <li><a>
                        <figure id="img-fruit"><img src="images/fuentechoco.jpg" alt=""></figure>
                    </a></li>
                    <li><a>
                        <figure id="img-fruit"><img src="images/juegomesa.jpg" alt=""></figure>
                    </a></li>
                    <li><a>
                        <figure id="img-fruit"><img src="images/mesadedulces.jpeg" alt=""></figure>
                    </a></li>
                    <li><a>
                        <figure id="img-fruit"><img src="images/mesas.jpeg" alt=""></figure>
                    </a></li>
                    <li><a>
                        <figure id="img-fruit"><img src="images/pasapalos.jpg" alt=""></figure>
                    </a></li>
                </ul>
                <a id="prev" class="prev" href="#"><img src="images/arrow-left.png" alt=""></a>
                <a id="next" class="next" href="#"><img src="images/arrow-right.png" alt=""></a>
            </div>
            
         
        </section>
        
        
        
        <footer>
            <?php require 'footer.php' ?>
        </footer>
    </div> <!--End wrapper-->
</div> <!--End Container-->
</body>
</html>