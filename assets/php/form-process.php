<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/Exception.php";
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";


$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nombre es requerido ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Correo es requerido ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Cuidad es requerido ";
} else {
    $msg_subject = $_POST["msg_subject"];
}

// Phone Number
if (empty($_POST["phone_number"])) {
    $errorMSG .= "Telefono es requerido ";
} else {
    $phone_number = $_POST["phone_number"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Mensaje es requerido ";
} else {
    $message = $_POST["message"];
}

$mail = new PHPMailer();

$your_email = "victor.adame@mip.com.mx";  //Replace with recipient email address
$cc = "carlos.aguila@vmasideas.com";
$to_Email   	= $your_email;




//Server settings
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'mip.com.mx';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'no_reply@mip.com.mx';//     'contact@hotelquintaeden.com';                // SMTP username
$mail->Password   = 'j@jxOtu,ik,t'; //    '##,FPy74a3VU';                     // SMTP password
$mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port       = 465;                                    // TCP port to connect to
//    $mail->SMTPDebug  = 4;
//$mail->protocol = 'protocol';
//$mail->smtp_port = 587;

//Recipients
$mail->setFrom($email,$name);
$mail->addAddress($your_email, 'MIP');     // Add a recipient
$mail->addCC($cc);
$mail->addReplyTo($your_email, 'Contacto');

// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Contacto de Usuario";
$mail->Body  = "<h4 style='text-align: center;padding: 25px 15px;background-color: #0c6c9e;color: #FFFFFF;font-size:16px;width:90%;border-radius: 10px;'>Existe un nuevo mensaje de contacto en el sitio.</h4><br><br>";



$mail->Body .= utf8_decode("<strong>Nombre: </strong>". $name ."<br>");
$mail->Body .= utf8_decode("<strong>Correo: </strong>". $email ."<br>");
$mail->Body .= utf8_decode("<strong>Cuidad: </strong>". $msg_subject ."<br>");    
$mail->Body .= utf8_decode("<strong>Teléfono: </strong>". $phone_number ."<br>");
$mail->Body .= utf8_decode("<strong>Mensaje: </strong>". $message ."<br>");


$mail->AltBody = utf8_decode('Existe un nuevo mensaje del sitio MIP; nombre: '.$name.'correo: '.$email. 'Cuidad: '.$msg_subject. 'Teléfono: '.$phone_number.'Mensaje: '.$message);

if(!$mail->send())
{
    echo "Algo salió mal :(";
}else{
    echo "Exitoso";
}




?>