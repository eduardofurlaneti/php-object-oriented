<?php

namespace app\classes;

class Login
{
    public string $email;
    public string $password;

    public function login(string $email, string $password) : string
    {
        $this->email = $email;
        $this->password = $password;
        return "Your email is {$this->email}\n\nYour password is {$this->password}\n\n\nYou are logged successfully";
    }
}