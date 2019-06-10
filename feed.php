<?php

    $start_time = microtime(TRUE);

    include('head.php');
    include('nav.php');


?>

<div class = "container">
    <h1>Galeria 01</h1>
    <p>Catálogo de imagens gerado por PHP 7.</p>

    <div class = "row">
        <div class = "col-md-12">
            <div class = "row">
            <?php
                $dirname = "images/";
                $images = glob($dirname."*.jpg");

                foreach($images as $image)
                {
                    ?>
                    <?php list($width, $height, $type) = getimagesize($image);?>
                    <div class = "col-md-6"><img src="<?=$image?>" width="350px"></div>
                    <div class = "col-md-6"><p>A largura da imagem é: <?=$width?>px</p>
                    <p>A altura da imagem é: <?=$height?>px</p>
                    <p>O tipo da imagem é: <?=$type?></p>
                    <p>Seu tamanho em disco é: <?=filesize($image)?>bytes</p>
                    </div>
                <?php }
            ?>
            </div>
        </div>
    </div>
</div>

<?php
    $end = microtime(TRUE);
    $time = ($end - $start_time)*1000;
    $time = round($time, 4);

    echo 'O tempo de carregamento desta página foi: '.$time.'segundo';
?>
