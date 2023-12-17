<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function submit(Request $request){
        // dd($request->all());
        // https://laravel.com/docs/10.x/mail
        $clientType = $request->clientType;
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $mail = $request->mail;
        $phoneNumber = $request->phoneNumber;
        $timeContactMorning = $request->timeContactMorning;
        $timeContactAfternoon = $request->timeContactAfternoon;
        $timeContactEvening = $request->timeContactEvening;
        $timeContactNight = $request->timeContactNight;
        $howContactTelephone = $request->howContactTelephone;
        $howContactMail = $request->howContactMail;
        $howContactFace = $request->howContactFace;
        // $content = $request->content;
        $content = "<h1>Un nouveau message du site SCP</h1> Voici le message : </br>" . $request->content;


        require base_path("vendor/autoload.php");
        // require "PHPMail/vendor/autoload.php";
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = env('MAIL_HOST');             //  smtp host
        $mail->SMTPAuth = true;
        $mail->Username = env('MAIL_USERNAME');   //  sender username
        $mail->Password = env('MAIL_PASSWORD');       // sender password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                  // encryption - ssl/tls
        $mail->Port = env('MAIL_PORT');                          // port - 587/465
        // $mail->setFrom($mail, $lastName);
        $mail->setFrom('coucou@gmail.com');
        $mail->addAddress(env('MAIL_USERNAME'));
        $mail->isHTML(true);
        $mail->Subject  = "Contact";
        $mail->Body     = $content;
        $dt = $mail->send();

        if ($dt) {
            echo 'Email has been sent successfully';
        }else{
            echo 'Something went wrong';
        }

    }
}
