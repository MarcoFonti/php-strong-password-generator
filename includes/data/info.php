<?php

// GENERO LETTERE MAIUSCOLE
$characters_shift = range('A', 'Z');

// GENERO LETTERE MINUSCOLE
$characters_tiny = range('a', 'z');

// GENERO NUMERI RANDOM
$random_numbers = range(0, 9) ;

// GENERO CARATTERI SPECIALI
$special_characters = ['@', '#', '$', '£', '&'];

// METTO TUTTO CIO' CHE HO GENERATO IN UN UNICO ARRAY
$characters = array_merge($characters_shift, $characters_tiny, $random_numbers, $special_characters);

// CONTROLLO LUNGHEZZA ARRAY
$num_total_characters= count($characters);

?>