<?php

namespace app\classes;

class UploadFile extends Upload
{
    public $file;
    public $extensions = ['txt', 'doc', 'pdf'];

    public function __construct($file)
    {
        parent::__construct($file, $this->extensions);
        
    }
}