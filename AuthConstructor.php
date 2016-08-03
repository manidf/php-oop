<?php namespace Acme;

class AuthController implements RespondsToUserRegistration {

    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
        //if you want to reference in multiple places use controller
    }

    // method injection
    public function register()
    {
        $this->registration->execute([], $this); // pass in reference to the current object
    }

    public function userRegisteredSuccesfully()
    {
        var_dump('created successfully. redirected');

    }
    public function userRegisteredFailed()
    {
        var_dump('ask user to try again');
    }
}
