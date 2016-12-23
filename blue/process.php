<?php
require_once 'libs/vendor/swiftmailer/swiftmailer/lib/swift_required.php';
if (!isset($_POST['page'])) {
    header("Location: index.php");
    exit();
} else {

    $transport=Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com',465)
        ->setUsername('radiocontrolmenorca@gmail.com')
        ->setPassword('Jaumepons007');
    $mailer=Swift_Mailer::newInstance($transport);

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
    $mail=Swift_Message::newInstance('Nova Reserva')
        ->setFrom('bluebeach@prova.es')
        ->setTo('jponsmorillas@gmail.com')
        ->setBody($message,'text/html');
    if ($mailer->send($mail)){
        echo 'al fin';
    }else {
        echo 'me cago en la puta';
    }
}