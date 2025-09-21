<?php 

// Constants  [ Built-in Constants , User-defined Constants , Magic Constants ]

// Constants
echo PHP_VERSION . '<br>';

echo PHP_INT_MAX . '<br>';

echo PHP_OS . '<br>';


// Mgic Constants
echo __DIR__ . '<br>';

echo __FILE__ . '<br>';

echo __line__ . '<br>';


// User Defined Constants 

define('NAME','Yousuf Saleh Issa AL Hadhrami');

//NAME = 'abc'; can't change the constant value 

echo NAME;

const PI = 3.14; // mostly used in oop [ object oriented programing ]



// $name = "Yousuf";

// $name = "Salim";

// echo $name;