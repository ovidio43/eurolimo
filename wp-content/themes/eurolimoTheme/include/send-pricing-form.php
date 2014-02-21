<?php

$arrTitles = Array(
    'choose-vehicle' => 'Choose Vehicle',
    'trip-type' => 'Trip Type',
    'pickup-address' => 'Pickup Address',
    'pickup-city' => 'Pickup City',
    'pickup-state' => 'Pickup State',
    'destination-address' => 'Destination Address',
    'destination-city' => 'Destination City',
    'destination-state' => 'Destination State',
    'first-name' => 'First Name',
    'last-name' => 'Last Name',
    'email' => 'Email',
    'phone-number' => 'Phone number',
    'if-other-where' => 'How did you hear about us? If other, where',
    'if-other-where2' => 'How did you hear about us? ',
    'additional-comments' => 'Additional Comments',
    'Send-me-news' => ' Send me news and special offers.'
);
if (sendMail($_POST, $arrTitles)) {
    echo 'Thank you for your interest.  A representative will be in contact with you shortly.  If you need to call us our phone number is +1 703-664-0410.';
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
    $subject = 'Pricing - LIMO';
//    $from = 'altra@omnilogic.us';
    $from = 'jorge.quispe@altra.com.bo';
    $headers .= 'Content-type:text/html;charset=UTF-8 \rn'
            . 'From: Registration <noreply@niaf.net>\rn';
    if (mail($from, $subject, $body, $headers)) {
        return true;
    }
    return false;
}
