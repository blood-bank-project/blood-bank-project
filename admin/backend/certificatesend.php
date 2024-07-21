<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])){
    require '../fpdf/fpdf.php'; 

    require '../smtp/src/Exception.php';
    require '../smtp/src/PHPMailer.php';
    require '../smtp/src/SMTP.php';

    $font = '../assets/fonts/AlexBrush-Regular.ttf';
    $imagePath = '../assets/images/certificate.jpg';

    if (!file_exists($font)) {
        die('Font file not found.');
    }
    if (!file_exists($imagePath)) {
        die('Image file not found.');
    }

    $image = imagecreatefromjpeg($imagePath);
    if (!$image) {
        die('Failed to create image from JPEG.');
    }

    $color = imagecolorallocate($image, 19, 21, 22);
    $fname = $_POST['name'];
    $profix = $_POST['greet'];
    $name = $profix .''. $fname;
    imagettftext($image, 80, 0, 520, 730, $color, $font, $name);

    $tempImagePath = tempnam(sys_get_temp_dir(), 'certificate') . '.jpg';
    imagejpeg($image, $tempImagePath);
    imagedestroy($image);

    class PDF extends FPDF {
        function Header() {
            // Empty header to avoid default header
        }
        function Footer() {
            // Empty footer to avoid default footer
        }
    }

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->Image($tempImagePath, 0, 0, 180, 320); 
    $pdfContent = $pdf->Output('', 'S'); 

    unlink($tempImagePath);

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth = true;
        $mail->Username = "bloodvault11@gmail.com"; 
        $mail->Password = "lssxeqrpjdifvlji";        


        $mail->setFrom('bloodvault11@gmail.com');
        $mail->addAddress($_POST['email']);

        $mail->addStringAttachment($pdfContent, 'certificate.pdf');

        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];
        $mail->SMTPOptions=array('ssl'=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
            "allow_self_signed"=>true,
        ));
        $mail->send();
        header('Location:../certificate.php');
         exit(); 
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>.