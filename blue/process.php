<?php
require_once 'libs/vendor/swiftmailer/swiftmailer/lib/swift_required.php';
if (!isset($_POST['page'])) {
    header("Location: index.php");
    exit();
} else {
    if ($_POST['page']=='form1') sendMail1();
    if ($_POST['page']=='form2') sendMail2();

}
function sendMail1(){
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
    $message.='<form method="get" action="localhost/~jaume/WebNando1/blue/form2.php">';
    $datos=$_POST;
    print_r($datos);
    $datos['page']='form2';
    $datosCod=json_encode($datos);
    print_r($datosCod);
    $message.='<input type="hidden" name="datos" value='.$datosCod.'>';
    $message.='<input type="submit" name="submit" value="Aceptar" style="background-color: green">';
    $message.='<input type="submit" name="submit" value="Cancelar" style="background-color: red">';
    $message.='</form>';
    $message.='</body>';
    $mail=Swift_Message::newInstance('Nova Reserva')
        ->setFrom('bluebeach@prova.es')
        ->setTo($_POST['email'])
        ->setBody($message,'text/html');
    if ($mailer->send($mail)){
        echo 'Mail enviat';
    }else {
        echo 'Fall de email';
    }
}
function openForm2(){

}