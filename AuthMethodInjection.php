<?php namespace Acme;

class AuthController {

    //method injection
    public function register(RegisterUser $registration)
    {
        $registration->execute();
    }
}

