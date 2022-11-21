<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia{
    public function Login(string $username, string $password) : bool{
        return true;
    }
}

class Fakefacebook extends Facebook{
    public function Login(string $username, string $password) : bool{
        return true;
    }
}