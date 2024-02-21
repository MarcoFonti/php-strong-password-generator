<?php

function get_password ($password_lenght, $chars, $num_total) {
    
    $array_password = [];

    while(count($array_password) < $password_lenght) {
        $random_passowrd = $chars [ rand(0, $num_total - 1)];

        $array_password[] = $random_passowrd;
    }

    return implode($array_password);

};


?>