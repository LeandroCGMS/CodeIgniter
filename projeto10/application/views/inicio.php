<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Base de Dados</title>
</head>
<body>
	<form action="<?php echo site_url('geral/gravar') ?>" method="post">
	<label >Nome:</label><br>
	<input type="text" name="text_nome"><br>

	<label >Telefone:</label><br>
	<input type="text" name="text_telefone"><br><br>

	<input type="submit" value="Gravar">
	</form>

	<hr>
	<?php if(count($dados) == 0) : ?>
		<p>Não existem contatos registrados.</p>
	<?php else : ?>
		<?php foreach($dados as $contato) : ?>
			<p><?php echo $contato['nome'] . ' - ' . $contato['telefone'] ?></p>
		<?php endforeach; ?>
	<?php endif; ?>
</body>
</html>