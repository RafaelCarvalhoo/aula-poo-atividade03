<?php

require_once 'produto.php';
require_once 'fabricante.php';

$produto = new Produto ("Hiphone" , "5" , "1000");
$fabricante = new Fabricante('Aipow','China', "12312312353");

$produto->setFabricante($fabricante);

echo "A descrição do produto é {$produto->getDescricao()} e seu fabricante é o {$fabricante->getNome()}.";

?>