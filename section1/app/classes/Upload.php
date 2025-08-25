<?php

namespace app\classes;

class Upload
{
    public $file;
    public $newName;

    public function __construct($file, $extensions)
    {
        $this->file = $file;
        if($this->verifyExtension($extensions)){
            $this->rename();
        }
    }

    protected function extension(){
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    protected function upload(){
        return $this->newName;
    }

    protected function rename(){
        $unique = uniqid(true);
        $this->newName = $unique . '.' . $this->extension();
    }
    
    public function file($file){
        $this->file = $file;
    }

    protected function verifyExtension($extensions){
        if (!in_array($this->extension(), $extensions)) {
            
            throw new \Exception("Extensão inválida. Use: " . implode(', ', $extensions) . "\nUtilizado agora: " . pathinfo($this->file, PATHINFO_EXTENSION));
        }

    }
}