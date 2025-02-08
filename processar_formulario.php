<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["message"]);

    $para = "jairrocha518@gmail.com"; // Seu e-mail
    $assunto = "Nova mensagem do site!";
    $corpo = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";

    $cabecalhos = "From: $email";

    if (mail($para, $assunto, $corpo, $cabecalhos)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
} else {
    echo "Acesso inválido.";
}
?>
