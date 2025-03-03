<?php

require '.classes/Mangas.php';

$titulo = 'Gato Preto Mangas - Início';
include './includes/header.php'; 


$manga = new Mangas();
$dados = $manga->listarMangaBanco();

echo $dados;

include './includes/manga_lista.php';
include './includes/footer.php'; 
?>




