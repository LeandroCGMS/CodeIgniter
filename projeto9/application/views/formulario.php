<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=5, initial-scale=1.0">
    <title>Formulário em CodeIgniter</title>
</head>
<body>
    <form action="<?php echo site_url('geral/tratarFormulario'); ?>" method="post">
        <span>Nome:</span><br>
        <input type="text" name="text_nome"><br>

        <span>Telefone:</span><br>
        <input type="text" name="text_telefone"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>