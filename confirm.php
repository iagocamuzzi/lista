<?php
// Receber os dados do formulário
$name = $_POST['name'];
$guest = $_POST['guest'];

// Validar e salvar as informações (exemplo usando arquivo de texto)
$file = fopen('guests.txt', 'a');
fwrite($file, "Nome: $name - Acompanhante: $guest\n");
fclose($file);

// Redirecionar para uma página de agradecimento
header('Location: thank-you.html');
exit();
?>
