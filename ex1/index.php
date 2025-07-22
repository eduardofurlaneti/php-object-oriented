<?php

require "vendor/autoload.php";

use app\classes\Pessoa;
use app\classes\UploadFoto;
use app\classes\AtividadePessoa;

$pessoa = new Pessoa("João", 20, "joao@example.com");
$atividade = new AtividadePessoa();

echo $pessoa->dados();
echo PHP_EOL; //EOL = End Of Line

echo $atividade->andar();
echo PHP_EOL;

$upload = new UploadFoto('foto.jpg');
