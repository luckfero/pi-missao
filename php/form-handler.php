<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'luccaoliveira123@gmail.com';

$email_subject = 'Novo formulário submetido';

$email_body = "Nome: $name.\n".
                "Email: $visitor_email.\n".
                "Assunto: $subject.\n".
                "Mensagem: $message.\n";

$to = 'missaoambiental.org@gmail.com';

$headers = "From: $email_from\r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contato.html");
?>