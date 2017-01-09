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
$GLOBALS['DIRE']='http://bluebeachprova.ddns.net/blue';
function sendMail1()
{
    $transport = Swift_SmtpTransport::newInstance('ssl://authsmtp.securemail.pro', 465)
        ->setUsername('info@bluebeachmenorca.com')
        ->setPassword('Miercoles2015');
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
    $message .= '<form method="post" action="http://bluebeachprova.ddns.net/blue/form2.php">';
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
        <img src="http://bluebeachprova.ddns.net/blue/img/logo-grande-low.png" style="width: 50%;margin-left: 25%">
    </div>
    <div class="content" style="font-size: 150%;padding: 2%;text-align: center;">
        ' . $message . '
    </div>
</div>';
    $mail = Swift_Message::newInstance('Nova Reserva')
        ->setFrom('info@bluebeachmenorca.com')
        ->setTo('reservas@bluebeachmenorca.com')
        ->setBody($plantilla, 'text/html');
    if ($mailer->send($mail)) {
        echo '<script>window.location = "http://bluebeachprova.ddns.net/blue/enviat.php";</script>';
    } else {
        echo 'Fall de email';
    }
}

function sendMail2()
{
    if ($_POST['accio'] == 'Cancelar') {

        $transport = Swift_SmtpTransport::newInstance('ssl://authsmtp.securemail.pro', 465)
            ->setUsername('info@bluebeachmenorca.com')
            ->setPassword('Miercoles2015');
        $mailer = Swift_Mailer::newInstance($transport);
        $message = '<h4>Tu solicitud de reserva ha sido rechazada</h4>';
        $message.='<p>'.$_POST['mensaje'].'</p>';
        $plantilla = '
    <div class="background" style="width: 90%;margin: auto;">
    <div class="motiu" style="margin: auto;padding: 2%;font-weight: 700;font-size: 200%;text-align: center;">
    </div>
    <div class="logo" style="margin: auto;padding: 2%;">
        <img src="http://bluebeachprova.ddns.net/blue/img/logo-grande-low.png" style="width: 50%;margin-left: 25%">
    </div>
    <div class="content" style="font-size: 150%;padding: 2%;text-align: center;">
        ' . $message . '
    </div>
</div>';
        $mail = Swift_Message::newInstance('Nova Reserva')
            ->setFrom('reservas@bluebeachmenorca.com')
            ->setTo($_POST['email'])
            ->setBody($plantilla, 'text/html');
        if ($mailer->send($mail)) {
            echo '<script>window.location = "http://bluebeachprova.ddns.net/blue/enviat.php";</script>';
        } else {
            echo 'Fall de email';
        }

    }
    if ($_POST['accio'] == 'Aceptar') {

        $transport = Swift_SmtpTransport::newInstance('ssl://authsmtp.securemail.pro', 465)
            ->setUsername('info@bluebeachmenorca.com')
            ->setPassword('Miercoles2015');
        $mailer = Swift_Mailer::newInstance($transport);

        $message = '<h4>Tu solicitud de reserva ha sido aceptada</h4>';
        $message.='<p>'.$_POST['mensaje'].'</p>';
        $message .= '<form method="post" action="http://bluebeachprova.ddns.net/blue/form3.php">';
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
        <img src="http://bluebeachprova.ddns.net/blue/img/logo-grande-low.png" style="width: 50%;margin-left: 25%">
    </div>
    <div class="content" style="font-size: 150%;padding: 2%;text-align: center;">
        ' . $message . '
    </div>
</div>';
        $mail = Swift_Message::newInstance('Nova Reserva')
            ->setFrom('reservas@bluebeachmenorca.com')
            ->setTo($_POST['email'])
            ->setBody($plantilla, 'text/html');
        if ($mailer->send($mail)) {
            echo '<script>window.location = "http://bluebeachprova.ddns.net/blue/enviat.php";</script>';
        } else {
            echo 'Fall de email';
        }
    }


}
function sendMail3(){
    $transport = Swift_SmtpTransport::newInstance('ssl://authsmtp.securemail.pro', 465)
        ->setUsername('info@bluebeachmenorca.com')
        ->setPassword('Miercoles2015');
    $mailer = Swift_Mailer::newInstance($transport);

    $datos=[];
    $datos=json_decode(($_POST['datos']),true);
    $message = '<h4>Nom: ' . $datos["first_name"] . ' ' . $_POST["last_name"] . '</h4>';
    $message .= '<h4>Email: ' . $datos['email'] . '</h4>';
    $message .= '<h4>Telefon: ' . $datos['telf'] . '</h4>';
    $message .= '<h4>Data entrada: ' . $datos['entrada'] . '</h4>';
    $message .= '<h4>Data sortida: ' . $datos['salida'] . '</h4>';
    $message .= '<h4>Adults: ' . $datos['adultos'] . '</h4>';
    $message .= '<h4>Bebes: ' . $datos['inf'] . '</h4>';
    $message .= '<h4>Nombre de habitacions: ' . $datos['hab'] . '</h4>';
    $message .= '<p>Observacions: ' . $datos['observaciones'] . '</p>';
    $i=0;
    while (true){
        $nombre='first_name'.$i;
        $apellido='last_name'.$i;
        $DNI='idCard'.$i;
        if (!isset($_POST[$nombre])) break;
        else {$message.='<p>Huesped '.($i+1).':  Nombre: '.$_POST[$nombre].' '.$_POST[$apellido].'  DNI: '.$_POST[$DNI].'</p>';
        $i++;}
    }

    $plantilla = '
    <div class="background" style="width: 90%;margin: auto;">
    <div class="motiu" style="margin: auto;padding: 2%;font-weight: 700;font-size: 200%;text-align: center;">
        Reserva Confirmada
    </div>
    <div class="logo" style="margin: auto;padding: 2%;">
        <img src="http://bluebeachprova.ddns.net/blue/img/logo-grande-low.png" style="width: 50%;margin-left: 25%">
    </div>
    <div class="content" style="font-size: 150%;padding: 2%;text-align: center;">
        ' . $message . '
    </div>
</div>';
    $mail = Swift_Message::newInstance('Nova Reserva')
        ->setFrom('reservas@bluebeachmenorca.com')
        ->setTo('reservas@bluebeachmenorca.com')
        ->setBody($plantilla, 'text/html');
    if ($mailer->send($mail)) {
        echo '<script>window.location = "http://bluebeachprova.ddns.net/blue/enviat.php";</script>';
    } else {
        echo 'Fall de email';
    }

}