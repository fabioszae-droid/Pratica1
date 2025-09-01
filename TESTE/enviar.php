<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    $to = "fabioszae@gmail.com";
    $subject = "Mensagem do site - $nome";
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Erro ao enviar email. Tente novamente.";
    }
}
?>