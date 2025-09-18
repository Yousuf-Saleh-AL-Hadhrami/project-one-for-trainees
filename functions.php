<?php

declare(strict_types=1);

// $x = 10;

// if($x == 10)

// {
//      echo "Equal \n";
// } else {

//     echo "Not Equal";
// }


// function check($x):void
// {

// if($x == 10)
// {
//      echo "Equal \n";
// } else {

//     echo "Not Equal";
// }


// }



function check2(int $x): mixed
{

    if ($x == 10) {

        return "Equal";
    }

    return  "Not Equal";
}






// check(10);

// echo "<br>";
// echo check2(12);
// echo "<br>";
// echo check2(10);


// echo min([1,5,0.5,9]);
// echo "<br>";
// echo max(["ali","said","Yousuf"]);
// echo "<br>";

// echo ord("A");
// echo "<br>";
// echo chr(91);


// function getMax(array $numbers):int|float|string
// {
//     $max = $numbers[0];
//     $min = $numbers[0];



//   for($i = 0; $i < count($numbers); $i++)
//   {
//        if($numbers[$i] > $max)
//        {
//         $max = $numbers[$i];
//        }

//         if($numbers[$i] < $max)
//        {
//         $min = $numbers[$i];
//        }
//   }
//   return "Max is ". $max . "And Min is ". $min;
// }

// echo getMax([5,6,9]);


function sum(int $x, int $y = 5): float
{
    return $x + $y;
}


//echo sum(x: 10, y: 20); // Named Parameters


function grade(...$marks): string // reset parameters
{
    $sum = 0;

    for ($i = 0; $i < count($marks); $i++) {

        $sum += $marks[$i];
    }

    if ($sum >= 50) {
        return 'Mark = ' . $sum . ' => Passed';
    }

    return 'Mark = ' . $sum . ' => Failed';
}

$z = 10; // variable in global scope

function getValue()
{
    // global $z;

    $z = $GLOBALS['z'];

    if ($z == 10) // variable in local scope 
    {
        return "Yes";
    }

    return "No";
}


$value = function () use ($z) // in anonymous function use key word use 
{

    if ($z == 10) // variable in local scope 
    {
        return "Yes";
    }

    return "No";
};

// echo grade(17,10,8,9);
//  echo "<br>";
// echo grade(17,3,8,9);
//  echo "<br>";
// echo grade(17,4,8,9);
//  echo "<br>";
// echo grade(17,102,9);

// echo getValue();

// Arrow functions


function analyzeScores()
{
    return [
        'average' => 62.2,
        'passed' => 3,
        'highest' => 90,
        'lowest' => 33
    ];
}


// echo analyzeScores()['average'];

$values_returned_from_function = analyzeScores();

// echo $values_returned_from_function['highest'];

var_dump($values_returned_from_function);

