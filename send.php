<?php include("smtp/PHPMailerAutoload.php");
$mail = new PHPMailer;
    /// $mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'mailto:shubham18822@gmail.com'; // SMTP username
    $mail->Password = 'szeivapldlliexyj'; // SMTP password
    $mail->Port = '587'; // TCP port to connect to
    $mail->From = 'mailto:shubham18822@gmail.com';   
    $mail->FromName = 'Portfolio';
    // $mailto:email='anoopthenotion@outlook.com';
    $mail->addAddress($email); // Name is optional
    $mail->isHTML(true); // Set
    $mail->Subject = 'Sign in OTP ';
    $mail->Body = '<table border="0" cellpadding="0" cellspacing="0">
                             <tbody><tr>
        <td><span style="font-size:11pt">Hi Dear,</span><br><br>
    <span style="font-size:12pt">Here is OTP for Signing in :  ' . $otp . '<br>
    </span><br><br>
	<span>Best Regards,<br>
Team Webvire</span><br><br>
	</td>
                             </tr>
                           </tbody></table>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        //die("======");
    } else {

    } 