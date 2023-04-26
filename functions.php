<?php

function getSignature ($params,$key)
{
    /**
     *Function that computes the signature.
     * $params : table containing the fields to send in the payment form.
     * $key : TEST or PRODUCTION key
     */
  
    //Initialization of the variable that will contain the string to encrypt
    $signature_content = "";
  
    //sorting fields alphabetically
    ksort($params);
    foreach($params as $name=>$value){
      //Recovery of vads_ fields
      if(substr($name,0,5)=='vads_'){
        //Concatenation with "+"
        $signature_content .= $value."+";
      }
    }
    //Adding the key at the end
    $signature_content .= $key;
    //Encoding base64 encoded chain with SHA-256 algorithm
    $signature = base64_encode(hash_hmac('sha256',$signature_content, $key, true));
    return$signature;
 }


function getParams ($actionMode, $amount, $mode, $currency, $cphone, $email, $fname, $lname, $pageAction, $paymentConfig, $siteId, $fechaForm, $transId, $version, $rrule, $fechaSub)
{
    /** 
    * Funcion que crea el array con los valores del form
    **/
    $valores = array(
        "vads_action_mode" => $actionMode,
        "vads_amount" => $amount,
        "vads_ctx_mode" => $mode,
        "vads_currency" => $currency,
        "vads_cust_cell_phone" => $cphone, 
        "vads_cust_email" => $email,
        "vads_cust_first_name" => $fname,
        "vads_cust_last_name" => $lname,
        "vads_page_action" => $pageAction,
        "vads_payment_config" => $paymentConfig,
        "vads_site_id" => $siteId,
        "vads_trans_date "=> $fechaForm,
        "vads_trans_id" => $transId,
        "vads_version" => $version,
        "vads_sub_amount" => $amount,
        "vads_sub_currency" => $currency,
        "vads_sub_desc" => $rrule,
        "vads_sub_effect_date" => $fechaSub
    );
    return $valores;
}

?>