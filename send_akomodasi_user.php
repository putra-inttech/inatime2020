<?php
    require_once "send_user_tour.php";

    $mail = new PHPMailer(true);
    try {
        //Server settings
        // $mail->SMTPDebug = 4;
        // $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = EMAIL;
        $mail->Password = PASS;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        //Recipients
        $mail->setFrom(EMAIL, 'Registrasi Penginapan');
        $mail->addAddress($email);     // Add a recipient

        $mail->addReplyTo(EMAIL);
    #DBDBDB
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //Content

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Detail Registrasi Penginapan ".$_POST['nama'];
        $mail->Body    = $isi_pesan;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
         echo "<script>alert('Thank You Our Team Will Contact You'); window.location.href='index.php';</script>";

    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

?>
