<?php
require_once 'libs/vendor/swiftmailer/swiftmailer/lib/swift_required.php';
if (!isset($_POST['page'])) {
    header("Location: index.php");
    exit();
} else {
    if ($_POST['page'] == 'form1') sendMail1();
    if ($_POST['page'] == 'form2') sendMail2();
    if ($_POST['page'] == 'form3') sendMail3();

}
function sendMail1()
{
    $transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
        ->setUsername('radiocontrolmenorca@gmail.com')
        ->setPassword('Jaumepons007');
    $mailer = Swift_Mailer::newInstance($transport);


    $message = '<h4>Nom: ' . $_POST["first_name"] . ' ' . $_POST["last_name"] . '</h4>';
    $message .= '<h4>Email: ' . $_POST['email'] . '</h4>';
    $message .= '<h4>Telefon: ' . $_POST['telf'] . '</h4>';
    $message .= '<h4>Data entrada: ' . $_POST['entrada'] . '</h4>';
    $message .= '<h4>Data sortida: ' . $_POST['salida'] . '</h4>';
    $message .= '<h4>Adults: ' . $_POST['adultos'] . '</h4>';
    $message .= '<h4>Bebes: ' . $_POST['inf'] . '</h4>';
    $message .= '<h4>Nombre de habitacions: ' . $_POST['hab'] . '</h4>';
    $message .= '<p>Observacions: ' . $_POST['observaciones'] . '</p>';
    $message .= '<form method="post" action="192.168.1.105/~jaume/WebNando1/blue/form2.php">';
    $datos = $_POST;
    $datos['page'] = 'form2';
    $datosCod = json_encode($datos);
    $message .= '<textarea name="datos" style="display: none">'. $datosCod .'</textarea>';
    $message .= '<input type="submit" name="accio" value="Aceptar" style="background-color: green">';
    $message .= '<input type="submit" name="accio" value="Cancelar" style="background-color: red">';
    $message .= '</form>';

    $plantilla = '
    <div class="background" style="width: 90%;margin: auto;">
    <div class="motiu" style="margin: auto;padding: 2%;font-weight: 700;font-size: 200%;text-align: center;">
        Nova Solicitud de Reserva
    </div>
    <div class="logo" style="margin: auto;padding: 2%;">
        <img src="http://83.52.177.177/web/WebNando/blue/img/logo-grande-low.png" style="width: 50%;margin-left: 25%">
    </div>
    <div class="content" style="font-size: 150%;padding: 2%;text-align: center;">
        ' . $message . '
    </div>
</div>';
    $mail = Swift_Message::newInstance('Nova Reserva')
        ->setFrom('reservas@bluebeach.com')
        ->setTo($_POST['email'])
        ->setBody($plantilla, 'text/html');
    if ($mailer->send($mail)) {
        echo 'Mail enviat';
    } else {
        echo 'Fall de email';
    }
}

function sendMail2()
{
    if ($_POST['accio'] == 'Cancelar') {

        $transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
            ->setUsername('radiocontrolmenorca@gmail.com')
            ->setPassword('Jaumepons007');
        $mailer = Swift_Mailer::newInstance($transport);
        $message = '<h4>Tu solicitud de reserva ha sido rechazada</h4>';
        $message.='<p>'.$_POST['mensaje'].'</p>';
        $plantilla = '
    <div class="background" style="width: 90%;margin: auto;">
    <div class="motiu" style="margin: auto;padding: 2%;font-weight: 700;font-size: 200%;text-align: center;">
    </div>
    <div class="logo" style="margin: auto;padding: 2%;">
        <img src="http://83.52.177.177/web/WebNando/blue/img/logo-grande-low.png" style="width: 50%;margin-left: 25%">
    </div>
    <div class="content" style="font-size: 150%;padding: 2%;text-align: center;">
        ' . $message . '
    </div>
</div>';
        $mail = Swift_Message::newInstance('Nova Reserva')
            ->setFrom('reservas@bluebeach.com')
            ->setTo($_POST['email'])
            ->setBody($plantilla, 'text/html');
        if ($mailer->send($mail)) {
            echo 'Mail enviat';
        } else {
            echo 'Fall de email';
        }

    }
    if ($_POST['accio'] == 'Aceptar') {

        $transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
            ->setUsername('radiocontrolmenorca@gmail.com')
            ->setPassword('Jaumepons007');
        $mailer = Swift_Mailer::newInstance($transport);
        $message = '<h4>Tu solicitud de reserva ha sido aceptada</h4>';
        $message.='<p>'.$_POST['mensaje'].'</p>';
        $message .= '<form method="post" action="192.168.1.105/~jaume/WebNando1/blue/form3.php">';
        $datos = $_POST;
        $datos['page'] = 'form3';
        $datosCod = json_encode($datos);
        $message .= '<textarea name="datos" style="display: none">'. $datosCod .'</textarea>';
        $message .= '<input type="submit" name="accio" value="Completar Reserva" style="background-color: green">';
        $message .= '</form>';
        $plantilla = '
    <div class="background" style="width: 90%;margin: auto;">
    <div class="motiu" style="margin: auto;padding: 2%;font-weight: 700;font-size: 200%;text-align: center;">
    </div>
    <div class="logo" style="margin: auto;padding: 2%;">
        <img src="http://83.52.177.177/web/WebNando/blue/img/logo-grande-low.png" style="width: 50%;margin-left: 25%">
    </div>
    <div class="content" style="font-size: 150%;padding: 2%;text-align: center;">
        ' . $message . '
    </div>
</div>';
        $mail = Swift_Message::newInstance('Nova Reserva')
            ->setFrom('reservas@bluebeach.com')
            ->setTo($_POST['email'])
            ->setBody($plantilla, 'text/html');
        if ($mailer->send($mail)) {
            echo 'Mail enviat';
        } else {
            echo 'Fall de email';
        }
    }


}
function sendMail3(){
    $transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
        ->setUsername('radiocontrolmenorca@gmail.com')
        ->setPassword('Jaumepons007');
    $mailer = Swift_Mailer::newInstance($transport);

    $datos=[];
    $datos=json_decode(($_POST['datos']),true);
    $message = '<h4>Nom: ' . $_POST["first_name"] . ' ' . $_POST["last_name"] . '</h4>';
    $message .= '<h4>Email: ' . $_POST['email'] . '</h4>';
    $message .= '<h4>Telefon: ' . $_POST['telf'] . '</h4>';
    $message .= '<h4>Data entrada: ' . $_POST['entrada'] . '</h4>';
    $message .= '<h4>Data sortida: ' . $_POST['salida'] . '</h4>';
    $message .= '<h4>Adults: ' . $_POST['adultos'] . '</h4>';
    $message .= '<h4>Bebes: ' . $_POST['inf'] . '</h4>';
    $message .= '<h4>Nombre de habitacions: ' . $_POST['hab'] . '</h4>';
    $message .= '<p>Observacions: ' . $_POST['observaciones'] . '</p>';
    $i=0;
    while (true){
        $nombre='first_name'.$i;
        $apellido='last_name'.$i;
        $DNI='idCard'.$i;
        if (!isset($_POST[$nombre])) break;
        else {$message.='<p>Huesped '.($i+1).':<ul><li>Nombre: '.$_POST[$nombre].' '.$_POST[$apellido].'</li>
        <li>DNI: '.$_POST[$DNI].'</li></ul>';
        $i++;}
    }

    $plantilla = '
    <div class="background" style="width: 90%;margin: auto;">
    <div class="motiu" style="margin: auto;padding: 2%;font-weight: 700;font-size: 200%;text-align: center;">
        Reserva Confirmada
    </div>
    <div class="logo" style="margin: auto;padding: 2%;">
        <img src="http://83.52.177.177/web/WebNando/blue/img/logo-grande-low.png" style="width: 50%;margin-left: 25%">
    </div>
    <div class="content" style="font-size: 150%;padding: 2%;text-align: center;">
        ' . $message . '
    </div>
</div>';
    $mail = Swift_Message::newInstance('Nova Reserva')
        ->setFrom('reservas@bluebeach.com')
        ->setTo($_POST['email'])
        ->setBody($plantilla, 'text/html');
    if ($mailer->send($mail)) {
        echo 'Mail enviat';
    } else {
        echo 'Fall de email';
    }

}