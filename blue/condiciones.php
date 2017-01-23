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
    <?php $thispage="condiciones.php";?>
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
            <h4>- Cómo reservar</h4>
            <p>
                Envíe su solicitud mediante el formulario.
                <br/>
                <br/>
                Para efectuar cualquier reserva debe ser mayor de 18 años
                <br/>
                <br/>
                Comprobemos la disponibilidad y contactaremos con usted a la mayor brevedad, con un presupuesto detallado. Una vez nos comunique la aceptación del presupuesto, le enviaremos su número de reserva con todos los detalles de la misma y nuestros datos bancarios, para que pueda realizar el pago según la oferta aceptada mediante transferencia o tarjeta de crédito vía telefónica llamando al número <strong>34 685670969</strong>

            </p>
        </div>
        <div class="col">
            <h4>- Condiciones de pago de la reserva</h4>
            <p>
                <strong>Tarifa no reembolsable</strong>
                <br/>
                <br/>
                Para formalizar la reserva se abonará el 100% del importe total (tasas no incluidas)
                <strong>Esta tarifa no tiene derecho de devolución ni indemnización</strong> de ningún tipo ya que
                se habrán incluido descuentos o ofertas detallados en la confirmación de la misma.
                Las tasas sobre impuesto turístico se <strong>abonaran el mismo día del check-in</strong> en los apartamentos.
            </p>
            <p>

                <strong>Tarifa standard:</strong>
                <br/>
                <br/>
                Para formalizar la reserva se abonará el 25% del importe total (tasas no incluidas) en un plazo de 48 horas, desde la confirmación de disponibilidad y aceptación de la misma, y el 75% restante se abonará 30 días antes de la fecha de entrada al apartamento. También podrá efectuarse un pago del 100% del importe.
                <br/>
                <br/>
                <strong>Si no se efectúa el pago en este plazo se considerará nula la reserva.</strong>
                <br/>
                <br/>
                Una vez recibido el pago recibirá por email confirmación del mismo.

            </p>
        </div>


        <div class="col s12">
            <h3 class="center">POLITICA DE CANCELACIÓN</h3>
            <p><strong>Tarifa normal:</strong></p>
            <p>Los clientes que hayan realizado el pago parcial del 25% de la tarifa normal, se les reembolsará el importe aplicando una penalización del 20%, debiendo efectuarse dicha cancelación con un mínimo de 30 días antes del check-in.</p>
            <p>Esta condición será aplicada también a los pagos íntegros del 100% siendo penalizados
                con un 10% del importe siempre que se cumplan los 30 días de antelación</p>
            <p><strong>Todas las cancelaciones deben efectuarse con 30 días de antelación al check-in.</strong></p>
            <p><strong>Tarifa no reembolsable;</strong></p>
            <p><strong>No tiene ningún derecho de reembolso al contener ofertas o condiciones especiales.</strong></p>

            <p><strong>Las estancias comprendidas entre el 20 y 25 de junio 2017, estará vinculadas a normas especiales, pudiendo solicitarse fianza adicional que se devolverá  al comprobar que el apartamento se entrega en buenas condiciones y sin desperfectos.</strong></p>

        </div>
        <div class="col">
            <h3 class="center">NORMAS DEL APARTAMENTO</h3>
            <p>El  apartamento se entregará totalmente equipado y en perfectas condiciones.
                No se admiten animales.
                Debe respetarse la tranquilidad, descanso y bienestar de otros clientes.
                Están prohibidos los dispositivos musicales en piscinas y zonas comunes que puedan molestar a otros clientes.
                Deben respetarse los horarios de uso de las piscinas.
                Se solicitará a los clientes una tarjeta de crédito abierta como garantía, en caso de que se cause algún desperfecto en el apartamento.
                El apartamento debe dejarse en orden, libre de desperdicios y basuras que deben ser depositados en los contenedores municipales más cercanos dispuestos para ello.
                <br/>
                <br/>
                En caso de encontrar el apartamento en un estado <strong>anormal</strong> de limpieza, se cobrará un gasto extra de limpieza de 60 euros</p>
        </div>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>