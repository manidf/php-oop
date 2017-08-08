<?php

namespace  Acme;

interface RespondsToUserRegistration
{
    public function userRegisteredSuccesfully();

    public function userRegisteredFailed();
}
