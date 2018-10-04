<?php
// Varios destinatarios

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'externos/PHPMailer/src/Exception.php';
require 'externos/PHPMailer/src/PHPMailer.php';
require 'externos/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.frm.utn.edu.ar';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('acatapano@frm.utn.edu.ar', 'Mailer');
    $mail->addAddress('acatapano@frm.utn.edu.ar', 'Anibal Catapano');     // Add a recipient
    $mail->addAddress('anibal.catapano@tic.frm.utn.edu.ar');               // Name is optional
    $mail->addReplyTo('acatapano@frm.utn.edu.ar', 'Information');
    $mail->addCC('acatapano@frm.utn.edu.ar');
    $mail->addBCC('acatapano@frm.utn.edu.ar');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

//$para  = 'acatapano@frm.utn.edu.ar' . ', '; // atención a la coma
//$para .= 'anibaldc77@gmail.com';
//
//// título
//$titulo = 'Recordatorio de cumpleaños para Agosto';
//
//// mensaje
//$mensaje = '
//<html>
//<head>
//  <title>Recordatorio de cumpleaños para Agosto</title>
//</head>
//<body>
//  <p>¡Estos son los cumpleaños para Agosto!</p>
//  <table>
//    <tr>
//      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
//    </tr>
//    <tr>
//      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
//    </tr>
//    <tr>
//      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
//    </tr>
//  </table>
//</body>
//</html>
//';
//
//// Para enviar un correo HTML, debe establecerse la cabecera Content-type
//$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
//$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//
//// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
//$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
//
//// Enviarlo
//$bool =mail($para, $titulo, $mensaje, $cabeceras);
//
//if($bool){
//    echo "Mensaje enviado";
//}else{
//    echo "Mensaje no enviado";
//}
?>
