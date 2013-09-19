<?php
require_once('./config.php');

function filterDefaultValue($string, $default) {
    if($string === $default) {
        return '';
    }else{
        return $string;
    }
}

function validateEmail ($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate ($string) {
    if(!empty($string)) {
        return true;
    }else{
        return false;
    }
}

if(
    validate($_POST['name']) &&
    validate($_POST['topic']) &&
    validateEmail($_POST['email'])
){
    // create a new instance of our Mailer class
    $mail = new Mailer();
    
    // setup some required variables for the class    
    $mail->client_name      = filterDefaultValue($_POST['name'], 'Name*');
    $mail->client_company   = filterDefaultValue($_POST['company'], 'Company');
    $mail->client_enquiry   = filterDefaultValue($_POST['topic'], 'Topic of enquiry*');
    $mail->client_email     = filterDefaultValue($_POST['email'], 'Email Address*');
    $mail->client_telephone = filterDefaultValue($_POST['number'], 'Contact Number');
    $mail->client_message   = filterDefaultValue($_POST['message'], 'Message');
    $mail->admin_email      = ADMIN_EMAIL;
    $mail->admin_name       = ADMIN_NAME;
    
    try {
        if($mail->logEmail()){
            try {
                if($mail->sendNotifyEmail()){
                    echo 'success';
                }
            } catch (Exception $ex) {
                die($ex->getMessage());
            }
        }
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
}else{
    die('Please fill in all the form fields correctly before submitting.');
}

?>
