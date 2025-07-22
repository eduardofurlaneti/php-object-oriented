<?php

namespace app\classes;

use \app\traits\validationFile;

class UploadFile extends Upload
{
    public $file;
    public $extensions = ['txt', 'doc', 'pdf'];

    public function __construct($file)
    {
        parent::__construct($file, $this->extensions);
    }

    use validationFile;

}