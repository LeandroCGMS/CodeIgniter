<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container text-center p-4">
    <a href="<?php echo site_url('geral') ?>"><button class="btn btn-primary">Voltar</button></a>
    <h3 class="text-center p-3"><?php echo $hotel['nome_hotel'] ?></h3>
    <p class="text-center"><?php echo $hotel['descricao'] ?></p>
    <img class="text-center" src="<?php echo base_url('assets/imagens/').$hotel['imagem'] ?>" alt="<?php echo 'Imagem do hotel '.$hotel['nome_hotel'] ?>">

</div>