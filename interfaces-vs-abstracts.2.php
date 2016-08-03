<?php

interface Provider {
    public function getAuthorizationUrl();
}

abstract class AbstractProvider {
    protected function related() {

    }
}

// create sub class , leverage inheritance, php doesnt support multiple inheritance
class FacebookProvider implements Provider {
    protected function getAuthorizationUrl()
    {
        // TODO: Implement getAuthorizationUrl() method.
        return '';
    }
}
