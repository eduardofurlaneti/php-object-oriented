<?php
require "../vendor/autoload.php";
/* 
No curso, o professor ensina a montar seu autoload.
No meu ponto de vista, não faz sentido uma vez que estamos utilizando composer e por padrão compsoer carrega um autoload automaticamente.
De qualquer maneira, você pode ler e aprender mais sobre autoloading: https://www.php-fig.org/psr/psr-4
*/

use app\classes\Login; // Namespace, segundo o PSR, sempre vai levar em consideração sua estrutura de diretórios
use app\models\User;

$login = new Login;

echo str_replace("\n", "<br>", $login->login("3H2yT@example.com", "123456"));