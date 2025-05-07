<?php
header('Content-Type: application/json');

$to = "skkizefranco@gmail.com";

$name    = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
$from    = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$subject = isset($_POST['subject']) ? strip_tags(trim($_POST['subject'])) : 'Sem assunto';
$number  = isset($_POST['number']) ? strip_tags(trim($_POST['number'])) : 'Não fornecido';
$message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';
$token   = isset($_POST['recaptcha_token']) ? $_POST['recaptcha_token'] : '';

if (!$name || !$from || !$message || !$token) {
    echo json_encode(['success' => false, 'error' => 'Campos obrigatórios em falta.']);
    exit;
}

// Validação do reCAPTCHA Enterprise
$recaptchaSecret = '6LddGy8rAAAAAMBs0opMJvwxdjYDcWX3sliGlyL6'; // coloca aqui a tua secret key do reCAPTCHA Enterprise
$recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';

$response = file_get_contents($recaptchaUrl . '?secret=' . urlencode($recaptchaSecret) . '&response=' . urlencode($token));
$responseKeys = json_decode($response, true);

if (!$responseKeys['success'] || $responseKeys['score'] < 0.5) {
    echo json_encode(['success' => false, 'error' => 'Falha na verificação do reCAPTCHA.']);
    exit;
}

// Monta o email
$headers  = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$emailSubject = "Nova mensagem de $name";
$body  = "<html><body>";
$body .= "<h2>Nova mensagem recebida do site Bar-Wings</h2>";
$body .= "<p><strong>Nome:</strong> {$name}</p>";
$body .= "<p><strong>Email:</strong> {$from}</p>";
$body .= "<p><strong>Telefone:</strong> {$number}</p>";
$body .= "<p><strong>Assunto:</strong> {$subject}</p>";
$body .= "<p><strong>Mensagem:</strong><br>" . nl2br($message) . "</p>";
$body .= "</body></html>";

// Envia o email
$send = mail($to, $emailSubject, $body, $headers);

if ($send) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Erro ao enviar email.']);
}
exit;
