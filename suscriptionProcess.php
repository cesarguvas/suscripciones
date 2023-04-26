<?php

// Incluimos las funciones 
require_once('functions.php');

// environment varible
$pkey = getenv('TEST_KEY');

// Datos recibidos del form y variables necesarias para la signature
$actionMode = "INTERACTIVE";
//$amount = $_POST['amount']*100;
$amount = 1000;
$currency = 604;
$cphone = $_POST['cphone'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mode = "TEST";
$pageAction = "REGISTER_PAY_SUBSCRIBE";
$paymentConfig = "SINGLE";
$siteId = getenv('vads_site_id'); //environment variable
$fechaForm = date('YmdHis');
$fechaSub = date('Ymd', strtotime($fechaForm. ' + 7 day'));
$transId = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 6);
$rrule = "RRULE:FREQ=WEEKLY;COUNT=2";
$version = "V2";

// Creo el array para la signature
$valores = getParams($actionMode, $amount, $mode, $currency, $cphone, $email, $fname, $lname, $pageAction, $paymentConfig, $siteId, $fechaForm, $transId, $version, $rrule, $fechaSub);

?>

<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Confirmación</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
</head>
  
<body class="w3-content" style="max-width:500px">
    <div class="w3-container w3-margin-top">
    
    <form class="w3-container w3-light-grey" method="POST" action="https://secure.micuentaweb.pe/vads-payment/">
        
        <div class="w3-container">
            <h3>Resumen de la Suscripción</h3>
            <p>Pago Semanal:  s/ 10.00</p>
            <p>Periodo: 3 semanas</p>
            <p>Nombre y Apellido: Armando Casas</p>
            <p>Correo a notificar: example@sample.com</p>
        </div>
        
        <input type="hidden" name="vads_action_mode" value="<?php echo $actionMode; ?>" />
        <input type="hidden" name="vads_amount" value="<?php echo $amount; ?>" />
        <input type="hidden" name="vads_ctx_mode" value="<?php echo $mode; ?>" />
        <input type="hidden" name="vads_currency" value="<?php echo $currency; ?>" />
        <input type="hidden" name="vads_cust_cell_phone" value="<?php echo $cphone; ?>" />   
        <input type="hidden" name="vads_cust_email" value="<?php echo $email; ?>" />
        <input type="hidden" name="vads_cust_first_name" value="<?php echo $fname; ?>" />
        <input type="hidden" name="vads_cust_last_name" value="<?php echo $lname; ?>" />
        <input type="hidden" name="vads_page_action" value="<?php echo $pageAction; ?>" />
        <input type="hidden" name="vads_payment_config" value="<?php echo $paymentConfig; ?>" />
        <input type="hidden" name="vads_site_id" value="<?php echo $siteId; ?>" />
        <input type="hidden" name="vads_trans_date" value="<?php echo $fechaForm; ?>" />
        <input type="hidden" name="vads_trans_id" value="<?php echo $transId;  ?>" />
        <input type="hidden" name="vads_version" value="<?php echo $version; ?>" />
        <input type="hidden" name="vads_sub_amount" value="<?php echo $amount; ?>" />
        <input type="hidden" name="vads_sub_currency" value="<?php echo $currency; ?>" />
        <input type="hidden" name="vads_sub_desc" value="<?php echo $rrule; ?>" />
        <input type="hidden" name="vads_sub_effect_date" value="<?php echo $fechaSub; ?>" />
        <input type="hidden" name="signature" value="<?php echo getSignature($valores, $pkey)?>"/>
        <div class="w3-container">
        <p><input class="w3-button w3-indigo w3-hover-red" type="submit" name="pagar" value="Confirmar Suscripción"/></p>
        </div>
    </form>
    </div>
</body>