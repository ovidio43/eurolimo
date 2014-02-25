<?php

$arrTitles = Array(

    'first-name' => 'First Name',
    'email' => 'Email',
    'phone-number' => 'Phone number',
    'additional-comments' => 'Additional Comments',

);
if (sendMail($_POST, $arrTitles)) {
    echo '<div class="wpcf7-mail-sent-ok wpcf7-response-output" id="send-ok">Thank you for your interest.  A representative will be in contact with you shortly.  If you need to call us our phone number is +1 703-664-0410.</div>';
} else {
    echo 'An unknown error occurred.';
}

function formatArray($array) {
    $content = '';
    foreach ($array as $value) {
        $content.=$value . '<br>';
    }
    return $content;
}

function sendMail($data, $titleData) {
    $body = '';
    foreach ($data as $key => $value) {
        $body.='<b>' . $titleData[$key] . ' : </b>';
        if (is_array($value)) {
            $body.= formatArray($value);
        } else {
            $body.=$value . '<br>';
        }
    }
    $subject = 'Euro Limo – Pricing';
//    $from = 'altra@omnilogic.us';
    $from = 'info@eurolimodc.com, altra@omnilogic.us';
    $headers .= 'Content-type:text/html;charset=UTF-8 \rn'
            . 'From: Euro Limo – Pricing <info@eurolimodc.com>\rn';
    if (mail($from, $subject, $body, $headers)) {
        return true;
    }
    return false;
}
