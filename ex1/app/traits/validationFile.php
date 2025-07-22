<?php

namespace app\traits;

trait validationFile
{
    public function validateFile()
    {
        if(in_array($this->extension(), $this->extensions)) {
            return true;
        } else {
            throw new \Exception("Invalid file extension.");
        }
    }
}