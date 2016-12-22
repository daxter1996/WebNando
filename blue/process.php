<?php
$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);
if (!isset($_POST['page'])) {
    header("Location: index.php");
    exit();
} else {
    $to="jponsmorillas@gmail.com";
    $subject="Nova Reserva";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $message='<body>';
    $message.= '<h1>Nova solicitud de reserva</h1>';
    $message.='<h4>Nom: '.$_POST["first_name"].' '.$_POST["last_name"].'</h4>';
    $message.='<h4>Email: '.$_POST['email'].'</h4>';
    $message.='<h4>Telefon: '.$_POST['telf'].'</h4>';
    $message.='<h4>Data entrada: '.$_POST['entrada'].'</h4>';
    $message.='<h4>Data sortida: '.$_POST['salida'].'</h4>';
    $message.='<h4>Adults: '.$_POST['adultos'].'</h4>';
    $message.='<h4>Bebes: '.$_POST['inf'].'</h4>';
    $message.='<h4>Nombre de habitacions: '.$_POST['hab'].'</h4>';
    $message.='<p>Observacions: '.$_POST['observaciones'].'</p>';
    $message.='</body>';
    mail($to,$subject,$message,$headers);


 echo $_POST['page'];
}