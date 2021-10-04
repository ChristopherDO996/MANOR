<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $asunto=$_POST['subject'];
    $mensaje=$_POST['message'];
    
    $from = "Manordistribuidora.com.mx";
    $to = "christo996@hotmail.com, ventas@manor.mx, almacen@manor.mx";
    $subject = "Mensaje de manordistribuidora.com.mx";
    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message = "
        <html>
            <head>
                <title>¡Nueva solicitud recibida!</title>
            </head>
            <body>
                <h1 align='center'>Asunto: $asunto</h1>
                <br>
                <h3>Nombre del cliente: $name</h3>
                <h3>E-mail de contacto: $email</h3>
                <br>
                <p align='center' style='font-size: 15px'>$mensaje</p>
            </body>
        </html>";
    mail($to,$subject,$message,$headers);
    echo "El correo ha sido enviado correctamente";
?>