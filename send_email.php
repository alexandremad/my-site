<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do e-mail
    $to = "alexandremadaleno22@gmail.com";
    $subject = "Nova mensagem do formulário de contato";

    // Captura os dados enviados pelo formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Corpo do e-mail
    $message = "
        <html>
        <head>
            <title>Nova mensagem do formulário de contato</title>
        </head>
        <body>
            <p><strong>Nome:</strong> {$nome}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Telefone:</strong> {$telefone}</p>
            <p><strong>Mensagem:</strong></p>
            <p>{$mensagem}</p>
        </body>
        </html>
    ";

    // Cabeçalhos do e-mail
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: {$email}" . "\r\n";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método inválido. Use o formulário para enviar a mensagem.";
}
?>
