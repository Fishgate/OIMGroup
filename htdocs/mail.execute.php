<?php
require_once('./config.php');

print_r($_POST);

/*
// create a new instance of our Mailer class
$mail = new Mailer();

// setup some required variables for the class
$mail->template_path    = './templates/confirmation.html';
$mail->client_name      = $_POST['name'];
$mail->client_email     = $_POST['email'];
$mail->client_telephone = $_POST['phone'];
$mail->client_message   = $_POST['message'];
$mail->admin_email      = ADMIN_EMAIL;
$mail->admin_name       = ADMIN_NAME;

// decided to log the form request first, just so all attempts can be seeing even if the mail never happens
try {
    if($mail->sendConfirmEmail()){
        try {
            if($mail->sendNotifyEmail()){
                echo 'success';
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }   
} catch (Exception $ex) {
    return $ex->getMessage();
}
*/

?>
