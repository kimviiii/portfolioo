<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            animation: color-change 10s linear infinite;
        }

        @keyframes color-change {
  0% { background-color: #ADD8E6; } /* Light blue */
  8.3% { background-color: #87CEEB; } /* Sky blue */
  16.6% { background-color: #00BFFF; } /* Deep sky blue */
  24.9% { background-color: #1E90FF; } /* Dodger blue */
  33.2% { background-color: #4169E1; } /* Royal blue */
  41.5% { background-color: #0000FF; } /* Blue */
  49.9% { background-color: #4B0082; } /* Indigo */
  59.2% { background-color: #0000FF; } /* Blue */
  67.5% { background-color: #4169E1; } /* Royal blue */
  75.9% { background-color: #1E90FF; } /* Dodger blue */
  84.2% { background-color: #00BFFF; } /* Deep sky blue */
  92% { background-color: #87CEEB; } /* Sky blue */
  100% { background-color: #ADD8E6; } /* Back to light blue */
}
    </style>
</head>
<body>
<?php
// require __DIR__ . '/../vendor/autoload.php';
// require __DIR__ . 'C:\xampp\htdocs\Portfolio\vendor\autoload.php'
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required";
    } else {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';          // Gmail SMTP server
            $mail->SMTPAuth   = true;                      // Enable SMTP authentication
            $mail->Username   = 'kalanakivindu22@gmail.com';    // Your Gmail address
            $mail->Password   = 'wszctjjujfzuxufd';       // Your Gmail app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom($email, 'Portfolio Contact');
            $mail->addAddress('kalanakivindu22@gmail.com'); // Your email where you receive messages

            // Content
            $mail->isHTML(false); // Plain text email
            $mail->Subject = 'Portfolio Contact';
            $mail->Body    = "Name: $name\nEmail: $email\n\n$message";

            // Send the email
            $mail->send();
            echo "<h1 class='message'> Thank you for your message :) </h1>";
        } catch (Exception $e) {
            // echo "Oops! Something went wrong. Mailer Error: {$mail->ErrorInfo}";
            echo "<h1 class='message'> Oops! Something went wrong :( </h1>";
        }
    }
}
?>
</body>
</html>