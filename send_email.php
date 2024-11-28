<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone'])
    $mensagem = htmlspecialchars($_POST['mensagem']);

   
    $para = "alexandremadaleno22@gmail.com";
    $assunto = "Novo contato do site";

    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    
    $corpo = "Você recebeu uma nova mensagem:\n\n";
    $corpo .= "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Mensagem:\n$mensagem\n";

   
    if (mail($para, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem. Tente novamente mais tarde.";
    }
}
?>
