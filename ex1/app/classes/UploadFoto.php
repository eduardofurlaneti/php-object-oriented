<?php
namespace app\classes;

class UploadFoto extends Upload
{

    public $file;
    public $newName;
    public $extensions = ['png', 'jpg'];
    
    const PROPRIEDADE_TESTE = 'Oi';
    public static $PROPRIEDED_TESTE = 'Oi';

    public static function TESTE($nome)
    {
        echo "Oi $nome" . PHP_EOL;
    }

    public function __construct($file)
    {
        parent::__construct($file, $this->extensions);
    }
}