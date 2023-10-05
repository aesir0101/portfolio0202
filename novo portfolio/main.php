<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Configurar informações do servidor SMTP e enviar o email
    $para = "jpximenesdq@gmail.com"; // Substitua pelo seu endereço de email
    $assunto = "Formulário de Contato";
    $corpo_mensagem = "Nome: $nome\n";
    $corpo_mensagem .= "Email: $email\n";
    $corpo_mensagem .= "Mensagem:\n$mensagem\n";

    // Enviar o email
    mail($para, $assunto, $corpo_mensagem);

    // Redirecionar de volta para a página do formulário com uma mensagem de sucesso
    header("Location: index.html?envio=success");
} else {
    // Redirecionar de volta para a página do formulário com uma mensagem de erro
    header("Location: index.html?envio=error");
}
?>
