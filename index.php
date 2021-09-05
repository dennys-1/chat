<?php
include "db.php";
?> 
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-Campus</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<!--<script type="text/javascript">
    function ajax(){
        var req=new XMLHttpRequest();
        req.onreadystatechange=function(){
            if(req.readyState == 4&& req.status ==200){
                document.getElementById('chat').innerHTML= req.responseText;
            }
        }
        req.open('GET','chat.html',true);
        req.send();
    }
    setInterval(function(){ajax();},100);
</script>-->
<h1>hola</h1>
<body onload="ajax();">
    <div id="contenedor">
        <div id="caja-chat">
            <div id="chat">
                <?php

                $consulta =" SELECT * from chat order by id desc";
                    $ejecutar= $conexion->query($consulta);
                    while($fila=$ejecutar->fetch_array())
                ?>
                <div id="datos-chat">
                    <span style="color:#1c62c4"><?php echo $fila['nombre']; ?></span>
                    <span style="color:#848484"><?php echo $fila['mensaje']; ?> </span>
                    <span style="float: right;"><?php echo $fila['fecha']; ?></span>

                </div>
                <?php endwhile;?>
            </div>
        </div>
        <form method="Post" action="index.html">
            <input type="text" name="nombre" placeholder="ingresa tu nombre">
            <textarea name="mensaje" placeholder="ingresa tu mensaje"></textarea>
            <input type="submit" name="Enviar" value="Enviar" >
        </form>
    </div>

    
</body>
</html>