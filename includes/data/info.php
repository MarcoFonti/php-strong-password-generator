<?php

$characters_shift = range('A', 'Z');

$characters_tiny = range('a', 'z');

$random_numbers = range(0, 9) ;

$special_characters = ['@', '#', '$', '£', '&'];

$characters = array_merge($characters_shift, $characters_tiny, $random_numbers, $special_characters);

$num_total_characters= count($characters);

?>