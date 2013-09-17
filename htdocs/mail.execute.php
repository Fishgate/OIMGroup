<?php
require_once('./config.php');

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
    validate($_POST['number']) &&
    validate($_POST['message']) &&
    validateEmail($_POST['email'])
){
    // create a new instance of our Mailer class
    $mail = new Mailer();
    
    // setup some required variables for the class
    $mail->template_path    = './templates/confirmation.html';
    $mail->client_name      = $_POST['name'];
    $mail->client_email     = $_POST['email'];
    $mail->client_telephone = $_POST['number'];
    $mail->client_message   = $_POST['message'];
    $mail->admin_email      = ADMIN_EMAIL;
    $mail->admin_name       = ADMIN_NAME;
    
    try {
        if($mail->logEmail()){
            try {
                if($mail->sendConfirmEmail()){
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
        }
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
}else{
    die('Please fill in all the form fields correctly before submitting.');
}

?>
