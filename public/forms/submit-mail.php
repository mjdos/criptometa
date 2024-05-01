<?php
include 'config.php';

require 'inc/vendor/autoload.php';

$emial_from = ( isset($config['standard']['email']) ) ? $config['standard']['email'] : false;
$name_from = ( isset($config['standard']['name']) ) ? $config['standard']['name'] : 'Website Admin';
$email_subject_from = ( isset($config['standard']['email_subject']) ) ? $config['standard']['email_subject'] : false;
$message_success = ( isset($config['standard']['message_success']) ) ? $config['standard']['message_success'] : 'Your message was successfully sent!';

$inputs_allowed = ( isset($config['standard']['inputs_allowed']) ) ? $config['standard']['inputs_allowed'] : array( 'name', 'email', 'email_subject', 'message' );
$inputs_required = ( isset($config['standard']['inputs_required']) ) ? $config['standard']['inputs_required'] : array( 'email', 'message' );

$message = '';
$errors = array();
$output = '';

if( !empty($inputs_allowed) ) {
    foreach( $inputs_allowed as $inputs_allowed_val ) {
        $inp_v = ( isset($_POST[$inputs_allowed_val]) ) ? $_POST[$inputs_allowed_val] : '';
        if( $inp_v == '' && in_array($inputs_allowed_val, $inputs_required) ) {
            $errors[] = ucfirst( $inputs_allowed_val ) . ' is required.';
        }

        $message .= '<p><b>' . ucfirst( $inputs_allowed_val ) . ':</b> ' . $inp_v . '</p>';
    }
}

if( !empty($errors) ) {
    $output = json_encode( array('status' => '0', 'errors' => $errors) );
} else {
    $php_mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Recipients
        $php_mail->addAddress( $emial_from, $name_from );
        $php_mail->setFrom( $emial_from, $name_from );
        $php_mail->addReplyTo( $emial_from, $name_from );

        //Content
        $php_mail->isHTML( true );
        $php_mail->Subject = $email_subject_from;
        $php_mail->Body    = $message;
        $php_mail->AltBody = strip_tags( $message );

        $php_mail->send();
        $output = json_encode( array('status' => '1', 'message' => $message_success) );
    } catch ( Exception $e ) {
        $output = json_encode( array('status' => '0', 'errors' => array('Message could not be sent. Mailer Error: '. $php_mail->ErrorInfo)) );
    }
}

$post_type = ( isset($_POST['ajax']) ) ? true : false;

if( !empty($output) ) {
    if( $post_type ) {
        echo $output;
    } else {
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
    }
}

exit;