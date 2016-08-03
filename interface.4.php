<?php

interface CanBeFiltered {
    // concretion offers a filter method
    public function filter();
}

class Favorited implements CanBeFiltered {
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}

class Unwatched implements CanBeFiltered {
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}

class Difficulty implements CanBeFiltered {
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}
