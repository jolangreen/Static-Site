<?php
include_once('inc/_base.php');
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'phpmailer/PHPMailerAutoload.php';

if (isset($_POST['inputFirstName']) 
    && isset($_POST['inputLastName']) 
    && isset($_POST['inputEmail'])) {

    //check if any of the inputs are empty
    if (empty($_POST['inputFirstName']) || empty($_POST['inputLastName']) || empty($_POST['inputEmail'])) {
      header("Location: " . BASE_URL);
        $data = array('success' => false, 'message' => 'Please fill out the form completely.');
        echo json_encode($data['message']);

        exit;
    }

    //create an instance of PHPMailer
    $mail = new PHPMailer();

    $mail->From = $_POST['inputEmail'];
    $mail->FromName = $_POST['inputFirstName'] . " " . $_POST['inputLastName'];;
    $mail->AddAddress('jolangreen7@gmail.com'); //recipient 
    $mail->Subject = 'Contact Form Submission';
    $mail->Body = "Name: " . $_POST['inputFirstName'] . " " . $_POST['inputLastName'] . "\r\nEmail: " . $_POST['inputEmail'];

    if (isset($_POST['ref'])) {
        $mail->Body .= "\r\n\r\nRef: " . $_POST['ref'];
    }

    if(!$mail->send()) {
        $data = array('success' => false, 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
        json_encode($data);
        exit;
    }

    $data = array('success' => true, 'message' => 'Thanks! We have received your message.');
    json_encode($data);

} else {
    $data = array('success' => false, 'message' => 'Please fill out the form completely.');
    json_encode($data);


}

include_once('inc/header.php'); 
?>

<section class="text-center vertical-center">
    <div class="container">
        <div class="row contact-form">
            <h1>Thanks! You have been added to the mailing list.</h1>
        </div>
    </div><!-- /.container -->
</section>

<?php include_once('inc/footer.php'); ?>