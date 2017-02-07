<body background="5.jpeg">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<form method="post" action="transferencia.php">
<?php

$direccionEnvio = $_POST["direccion"];  
$fechaEnvio = $_POST["fechaEnvio"];  
$fechaReserva = $_POST["fechaReserva"];  
$cliente_cedula = $_POST["cedula"];  
?>
    <table width="50%" bgcolor="" border="1" cellspacing="0" cellpadding="4" align="center" bordercolor="#CCCCCC" style="BORDER-COLLAPSE: collapse">
        <TR><TD align="CENTER" bgcolor="#8CC63F">Pago Por Transferencia</TD></TR>
        <TR><TD align="CENTER">      

                <input type="hidden" name="direccion" value="<?php echo $direccionEnvio ?>">
                <input type="hidden" name="envio" value="<?php echo $fechaEnvio ?>">
                <input type="hidden" name="reserva" value="<?php echo $fechaReserva ?>">
                <input type="hidden" name="cliente_cedula" value="<?php echo $cliente_cedula ?>">


            <TABLE width="50%" cellspacing="0" cellpadding="0" border="0" bordercolor="#cccccc" >
            <br>A partir de este momento tiene 24 horas para realizar el depósito o la transferencia bancaria por el monto de tu orden. Recuerda, para no retrasar el proceso, transfiere al mismo banco o antes de las 10am. <br> (Tiene 2 dias para transferir).
</br><P ALIGN=left> Nombre de titular: Rosalinda Rivera.
  <br>
Cedula: 26006360
  <br>
Tipo de cuenta: Corriente
Bancos
    Venezuela: 0102-0862-98-0000-116787
    <br>
    Mercantil:0105-1235-05-0000-121904
    <br>
    Banesco: 0134-3309-09-3354-945379
    <br>
    Provincial: 0108-0904-20-0506-1996
        <tr>
            <td class="texto_items"> Referencia  </td>
            <td><input type="text" required  name="referencia"  placeholder="Referencia" ></td>
        </tr>
        <tr>
            <td class="texto_items"> Cedula  </td>
        <td><input type="text" required name="cedulita" placeholder="cedula" ></td>
        </tr>       
        <tr>
            <td class="texto_items"> Monto  </td>
            <td><input type="text" required  name="monto" placeholder="monto" ></td>
        </tr>   
        <tr>
            <td class="texto_items"> Banco  </td>
            <td><input type="text" required  name="banco"></td>
        </tr>           
        <tr>
    </table><br>
    <input type="submit" name="Submit" value="  Pagar  " class="botones" >
    <br><br>
    </td></tr>
    </table>
</form>

<form method="post" action="pagos.php" >
<?php
$direccionEnvio = $_POST["direccion"];  
$fechaEnvio = $_POST["fechaEnvio"];  
$fechaReserva = $_POST["fechaReserva"];  
$cliente_cedula = $_POST["cedula"];  
?>
    <table width="50%" bgcolor="" border="1" cellspacing="0" cellpadding="4" align="center" bordercolor="#CCCCCC" style="BORDER-COLLAPSE: collapse">
        <TR><TD align="CENTER" bgcolor="#8CC63F">Pagos por Tarjeta de Credito</TD></TR>
        <TR><TD align="CENTER" bgcolor="#8CC63F">Puede realizar el pago con tarjeta de credito Visa o Mastercard de cualquier banco</TD></TR>
        <TR><TD align="CENTER"><BR>
            <img src="images/tarjetas.jpg" alt="" height="100" width="100">

                <input type="hidden" name="direccion" value="<?php echo $direccionEnvio ?>">
                <input type="hidden" name="envio" value="<?php echo $fechaEnvio ?>">
                <input type="hidden" name="reserva" value="<?php echo $fechaReserva ?>">
                <input type="hidden" name="cliente_cedula" value="<?php echo $cliente_cedula ?>">
            <TABLE width="80%" cellspacing="0" cellpadding="0" border="0" bordercolor="#cccccc" >
        <tr>
            <td class="texto_items"> Nombre como aparece en la tarjeta  </td>
        <td><input type="text" required name="nombre" placeholder="nombre del titular" ></td> </tr>    
        <tr>
            <td class="texto_items"> Cedula de Identidad del titular </td>
        <td><input type="text" required name="cedula" placeholder="nombre del titular" ></td> </tr>   

        <tr>
            <td class="texto_items"> Numero de tarjeta </td>
        <td><input type="text" required pattern="[0-9]{12}" name="tarjeta" placeholder="**** **** ** **" ></td>   </tr>    
        <tr>
            <td class="texto_items"> Mes de Expiracion  </td>
        <td><input type="text" required pattern="[0-9]{2}" name="mes" placeholder="dos digitos del mes" ></td>   </tr>     
        <tr>
            <td class="texto_items"> Año de Expiracion  </td>
        <td><input type="text" required pattern="[0-9]{2}" name="ano" placeholder="dos ultimos digitos del año" ></td>   </tr>   
        </tr>
        <tr>
            <td class="texto_items " > Ultimos Tres Digitos en el reverso de su tarjeta </td> 
            <td><input type="text" id="codigo" name="codigo" placeholder="CVV2/CVC2" value="" class="text-input defaultText" required/></td>
        </tr>           
        <tr>
    </table><br>
    <input type="submit" name="Submit" value="  Pagar  " class="botones" >
    <br><br>
    </td></tr>
    </table>
</form>