<?php
class Email extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Email_model');
    }

    function send()
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
        $mail->addAddress('nadiasianipar01@gmail.com');

    // Add cc or bcc 
        //$mail->addCC('cc@example.com');
      //  $mail->addBCC('bcc@example.com');

    // Email subject
        $mail->Subject = 'Surat Diterima Magang';

    // Set email format to HTML
        $mail->isHTML(true);

    // Email body content
        $mailContent = "
        <p>Berikut adalah Lampiran surat anda diterima di perusahaan magang anda.</p>";
        $mail->Body = $mailContent;



        function send()
        {
    // ...

    // Send email
            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
            else {
                $this->session->set_flashdata('email_success', 'Email telah terkirim');
                redirect('Akademik/vw_akademik');
                redirect('Datakp/vw_datakp');
            }

        }

    }
}