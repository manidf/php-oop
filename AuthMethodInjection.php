<?php

namespace Acme;

class AuthMethodInjection
{
    //method injection
    public function register(RegisterUser $registration)
    {
        $registration->execute();
    }
}
