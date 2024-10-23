<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function send($email, $message)
    {
        
            // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
            // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
            // SMTP configuration

        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test-smk@inovindoacademy.com';
        $mail->Password = '$Abc123456';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('test-smk@inovindoacademy.com', 'SMK');
            //    $mail->addReplyTo('info@example.com', 'CodexWorld');
        
            // Add a recipient
        $mail->addAddress($email);
        
            // Add cc or bcc 
                //$mail->addCC('cc@example.com');
              //  $mail->addBCC('bcc@example.com');
        
            // Email subject
        $mail->Subject = 'IMPORTANT DOCUMENT';
        
            // Set email format to HTML
        $mail->isHTML(true);
                // Email body content
        $mailContent = $message;
        $mail->Body = $mailContent;

    // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        else {
            echo 'Message has been sent';
        }
    }


}