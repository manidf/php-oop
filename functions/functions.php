<?php

    // function accepts three parameters
    function dd($data) {
        die(var_dump($data));
    }

    // if you not older than 18
    // not allowed to enter the club
    function age($age) {
        if ( $age >= '21') {
            echo 'You are allowed to enter';
        } else {
            echo 'You are not old enough';
        }
    }


