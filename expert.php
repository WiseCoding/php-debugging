<?php

declare(strict_types=1);

// === Exercise 1 ===
echo "Exercise 1 starts here:";
function new_exercise($x)
{
  $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
  echo $block;
}

// Problem: Variable $x was not defined as a function parameter
// Solution: Add $x as a function parameter
// Debug: IDE error message


// === Exercise 2 ===
new_exercise(2);
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;

// Problem: We get tuesday instead of monday
// Solution: Change index from 1 to 0
// Debug: Brain


// === Exercise 3 ===
new_exercise(3);
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed
$str = "Debugged !";
echo substr($str, 0, 10);

// Problem: Gremlins
// Solution: Added the correct quotes
// Debug: Gremlin extension vscode


// === Exercise 4 ===
new_exercise(4);
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!
foreach ($week as $day) {
  $day = substr($day, 0, -3);
  print_r($day . ' ');
}

// Problem: code is printing the fully array
// Solution: placed print_r inside foreach, changed print_r to $day with a space instead of $week
// Debug: IDE


// === Exercise 5 ===
new_exercise(5);
// The array should be printing every letter of the alphabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array
$arr = [];
$letter = 'a';
for ($i = 0; $i <= 25; $i++) {
  array_push($arr, $letter);
  $letter++;
}
print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array

// Problem: Adds too many letters
// Solution: Made a for loop with numbers, instead of strings
// Debug: IDE


// === Final exercise ===
new_exercise(6);
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are randomly combined as seen in the code, fix all the bugs whilst keeping the functionality!
// Examples: captain strange, ant widow, iron man, ...
$arr = [];

echo "Here is the name: " . combineNames();

function combineNames($str1 = "", $str2 = "")
{
  $params = [$str1, $str2];
  foreach ($params as $param) {
    if ($param == "") {
      $param = randomHeroName();
    }
  }
  return implode(" - ", $params);
}

function randomHeroName()
{
  $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
  $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
  //$heroes = [$hero_firstnames, $hero_lastnames];
  //$randname = $heroes[rand(0, count($heroes))][rand(0, 10)];
  $randname = $hero_firstnames[rand(0, count($hero_firstnames) - 1)] . $hero_lastnames[rand(0, count($hero_lastnames) - 1)];
  return $randname;
}


function randomGenerate($arr, $amount)
{
  for ($i = $amount; $i > 0; $i--) {
    array_push($arr, randomHeroName());
  }
  return $amount;
}



// Problem: Multiple errors, No semicolon behind array $hero_lastnames, Glue's position in echo-implode was switched around,
// Solution: Added semicolon behind array $hero_lastnames, Switched Glue's position in echo-implode,
// Debug: IDE, Browser