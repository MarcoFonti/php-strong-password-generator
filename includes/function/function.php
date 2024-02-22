<?php

// FUNZIONE PER GENERARE NUMERI
function get_password ($password_lenght, $chars, $num_total) {
    
    // ARRAY DOVE ANDRANNO I NUMERI GENERATI IN BASE AL NUMERO SCELTO DELL'UTENTE
    $array_password = [];

    // CICLO FINCHE' IL MIO ARRAY NON ARRIVA AL NUMERO RICHIESTO DALL'UTENTE
    while(count($array_password) < $password_lenght) {

        // GENERO PASSWORD RANDOM
        $random_passowrd = $chars [ rand(0, $num_total - 1)];
        
        // PUSH NEL ARRAY LA PASSWORD GENERATA
        $array_password[] = $random_passowrd;
    }

    // CONCATENO ELEMENTI DELL'ARRAY
    return implode($array_password);

};


?>