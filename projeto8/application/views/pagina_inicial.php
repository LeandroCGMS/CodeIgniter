<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <h3 class="text-center">Escolha o seu hotel</h3>
    <div class="row mb-4">
    <?php $contador = 0; ?>
    <?php foreach ($hoteis as $hotel) : ?>
        <div class="col-sm-6 col-12 text-center p-2">
            <a href="<?php echo base_url('index.php/geral/hotel/').$contador ?>">
                <img src="<?php echo base_url('assets/imagens/').$hotel ?>">
            </a>
        </div>
        <?php $contador++; ?>
    <?php endforeach; ?>
    </div>
</div>