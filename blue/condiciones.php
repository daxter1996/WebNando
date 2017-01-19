<?php
    include_once "init.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include_once "head.php";?>
    <title>Condiciones de reserva - Blue Beach</title>
</head>
<header>
    <?php $thispage="index.php";?>
    <?php include_once "header.php"; ?>
</header>
<body>

<div class="container" style="min-height: 600px" >
    <div class="fixed-action-btn ">
        <a class="btn-floating btn-large blue" href="index.php">
            <i class="large material-icons">home</i>
        </a>
    </div>
    <div class="row">
        <div class="col s12 center">
            <h3>INFORMACIÓN DE RESERVAS</h3>
        </div>
        <div class="col">
            <h5>- Cómo reservar</h5>
            <p>
                Envíe su solicitud mediante el  formulario. Una vez comprobemos la disponibilidad, contactaremos con usted a la mayor brevedad, con un presupuesto detallado. Una vez nos comunique la aceptación del presupuesto, le enviaremos su número de reserva con todos los detalles de la misma y nuestros datos bancarios, para que pueda realizar un pago a cuenta del 25%, mediante transferencia.
            </p>
        </div>
        <div class="col">
            <h4>- Condiciones de pago de la reserva</h4>
            <p>
                Forma de pago:<br/>
                Para formalizar la reserva se abonará el 25% del importe total  (tasas no incluidas ) en un plazo de tres días, y el resto 75% se abonará un mes antes de llegar al destino. Si no se efectúa el pago en este plazo se considerará nula la reserva. El mismo día que recibamos la transferencia, le mandaremos un correo de confirmación de la misma.
            </p>
        </div>
        <div class="col s12 center">
            <h3>POLITICA DE CANCELACIÓN</h3>
        </div>
        <div class="col">
            <h4>- Pago íntegro</h4>
            <p>
                A los huéspedes  que hayan realizado el pago íntegro de la estancia, se les reembolsará un 50% del coste total (menos los gastos de gestión), si efectúan la cancelación al menos cuatro semanas antes del inicio de las vacaciones.
            </p>
        </div>
        <div class="col">
            <h4>- Pagos a plazos</h4>
            <p>
                Si el huésped cancela la reserva o no abona el saldo restante  de la estancia a tiempo, no se reembolsará el depósito de reserva el 25% del total.<br/>
                Si el pago del saldo restante no se recibe al menos cuatro semanas antes del inicio de la estancia, la reserva quedará cancelada automáticamente
            </p>
        </div>
        <div class="col s12 center">
            <h3>NORMAS DEL APARTAMENTO</h3>
        </div>
        <div class="col">
            <p>
                El  apartamento se entregará totalmente equipado y en perfectas condiciones.
                En caso de encontrar el apartamento en mal estado de limpieza, se cobrará un gasto extra de limpieza de 60 euros.
                No se admiten animales.
                Se solicitará a los clientes una tarjeta de crédito abierta. Es una garantía para nosotros, en caso de que cause algún desperfecto en el apartamento.

                <strong>La semana de Sant Joan del 20  al 25 de junio, se solicitará una fianza de 400 euros que se devolverá  al comprobar que la casa se devuelve en las mismas condiciones que la hemos entregado.</strong>
            </p>
        </div>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>