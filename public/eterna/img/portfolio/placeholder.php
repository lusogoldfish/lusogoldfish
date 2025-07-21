<?php

// Script simples para criar imagens placeholder
$projetos = [
    'aquario1.jpg' => 'Aquário Tropical',
    'aquario2.jpg' => 'Aquário Marinho',
    'manutencao1.jpg' => 'Manutenção',
    'plantado1.jpg' => 'Aquário Plantado',
    'filtro1.jpg' => 'Sistema Filtração',
    'comercial1.jpg' => 'Aquário Comercial',
];

foreach ($projetos as $filename => $title) {
    $image = imagecreate(800, 600);
    $bg_color = imagecolorallocate($image, 52, 152, 219);
    $text_color = imagecolorallocate($image, 255, 255, 255);

    imagestring($image, 5, 300, 280, $title, $text_color);
    imagestring($image, 3, 320, 320, 'LusoGoldFish', $text_color);

    imagejpeg($image, $filename, 80);
    imagedestroy($image);
}

echo 'Imagens placeholder criadas!';
