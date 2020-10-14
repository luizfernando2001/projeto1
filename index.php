<?php

//topo
include_once "paginas/includes/header.php";



//conteudo inicial

$paginas = isset($_GET['pg']);

if ($paginas) {

        switch($_GET['pg']) {
                case 'inicial':
include_once "paginas/inicial.php";
                break;
   }
} else { include_once "paginas/inicial.php";}

//rodape
include_once "paginas/includes/footer.php";
