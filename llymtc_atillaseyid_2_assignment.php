<?php
$even_numbers = array(0 => 2, 1 => 4, 2 => 6, 3 => 8, 4 => 10);
//print_r($even_numbers);

$male_names = array(0 => "Atilla", 1 => "Zamin");
$female_names = array(0 => "Anne", 1 => "Alice", 2 => "Rose");
$names = array_merge($male_names, $female_names);

$some_names = ["Atilla", "Zamin" , "Ali", "Yashar", "Sardar"];
sort($some_names);
print_r($some_names);
?>