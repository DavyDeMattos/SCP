<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class PHPMailerController extends Controller
{
    // =============== [ Email ] ===================
    public function email() {
        return view("email");
    }


    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        // dd($request->all());
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        // Form content
        $clientType = $request->clientType;
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $mailClient = $request->mail;
        $phoneNumber = $request->phoneNumber;
        $timeContactMorning = $request->timeContactMorning;
        $timeContactAfternoon = $request->timeContactAfternoon;
        $timeContactEvening = $request->timeContactEvening;
        $timeContactNight = $request->timeContactNight;
        $howContactTelephone = $request->howContactTelephone;
        $howContactMail = $request->howContactMail;
        $howContactFace = $request->howContactFace;
        $content = $request->content;


        // Email server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = env('MAIL_HOST');            //  smtp host
        $mail->SMTPAuth = true;
        $mail->Username = env('MAIL_USERNAME');   //  sender username
        $mail->Password = env('MAIL_PASSWORD');       // sender password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                  // encryption - ssl/tls
        $mail->Port = env('MAIL_PORT');                          // port - 587/465

        $mail->setFrom($mailClient, $lastName);
        $mail->addAddress(env('MAIL_USERNAME'));
        // $mail->addCC($request->emailCc);
        // $mail->addBCC($request->emailBcc);

        $mail->addReplyTo($mailClient, $lastName);

        /*if(isset($_FILES['emailAttachments'])) {
            for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
            }
        }*/


        $mail->isHTML(true);                // Set email content format to HTML

        $mail->Subject = 'Contact via PHPMailer';
        $mail->Body    = $request->content;

        // $mail->AltBody = plain text version of email body;

        if( !$mail->send() ) {
            return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
        }

        else {
            return back()->with("success", "Email has been sent.");
        }
    }
}
