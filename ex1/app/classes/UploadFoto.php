<?php
namespace app\classes;

class UploadFoto
{

    public $file;
    public $newName;
    public $extension = ['png', 'jpg'];

    public function file($file){
        $this->file = $file;
    }

    public function extension(){
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    public function upload(){
        return $this->newName;
    }

    public function rename(){
        $unique = uniqid(true);
        $this->newName = $unique . '.' . $this->extension();
    }

}