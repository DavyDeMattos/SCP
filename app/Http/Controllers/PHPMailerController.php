<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use App\Mail\ContactMail;
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

        $timeContact = [
            'timeContactMorning' =>$timeContactMorning,
            'timeContactAfternoon' =>$timeContactAfternoon,
            'timeContactEvening' =>$timeContactEvening,
            'timeContactNight' =>$timeContactNight,
        ];
        $howContact = [
            'howContactTelephone' =>$howContactTelephone,
            'howContactMail' =>$howContactMail,
            'howContactFace' =>$howContactFace,
        ];

        $data = [
            'clientType' =>$clientType,
            'lastName' =>$lastName,
            'firstName' =>$firstName,
            'mailClient' =>$mailClient,
            'phoneNumber' =>$phoneNumber,
            'timeContact' =>$timeContact,
            'howContact' =>$howContact,
            'content' =>$content,
        ];

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
        $mail->Body    = '
            <h1>Contact Details:</h1>
            <ul>
                <li><p><strong>Type de client:</strong> ' . $clientType . '</p></li>
                <li><p><strong>Nom:</strong> ' . $lastName . '</p></li>
                <li><p><strong>Prénom:</strong> ' . $firstName . '</p></li>
                <li><p><strong>Adresse mail:</strong> <a href="mailto:' . $mailClient . '">' . $mailClient . '</a></p></li>
                <li><p><strong>Numéro de téléphone:</strong> <a href="tel:' . $phoneNumber . '">' . $phoneNumber . '</a></p></li>
                <li><p><strong>Je préfère être contacté :</strong>' . $timeContactMorning .','. $timeContactAfternoon .','. $timeContactEvening .','. $timeContactNight. '</li>
                <li><p><strong>Je préfère être contacté par :</strong>'. $howContactTelephone .','.  $howContactMail .','. $howContactFace . '</li>
            </ul>
            <h2>Message:</h2>
            <p>' . $content . '</p>
        ';

        // $mail->AltBody = plain text version of email body;

        if( !$mail->send() ) {
        // if( !$mail->send(new ContactMail($data)) ) {
            return back()->with("failed", "Email not sent.")->withInput()->withErrors($mail->ErrorInfo)->$this->showMessage("Votre mail n'a pas été correctement envoyé");
        } else {
            // return redirect()->route('mail-confirmation', ['message' => 'Votre mail a bien été envoyé']);
            // echo "Youpi mail envoyé";
            return $this->showMessage('Votre mail a bien été envoyé');
            // return back()->with("success", "Email has been sent.");
        }
    }
    // =============== [ Message ] ===================
    /**
     * Fonction pour afficher un message de confirmation
     *
     * @param string $message
     * @return view
     */
    public function showMessage(string $message): View {
        return view("mail.confirmation", [
            'message' => $message,
        ]);
    }

}
