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
// Debug: Brain🧠



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

echo "Here is the name: " . combineNames();

function combineNames($str1 = "", $str2 = "")
{
  $params = [$str1, $str2];
  foreach ($params as $i => $param) {
    if ($param == "") {
      $params[$i] = randomHeroName();
    }
  }
  return implode(" - ", $params);
}
function randomHeroName()
{
  $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
  $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
  $heroes = [$hero_firstnames, $hero_lastnames];
  $randname = $heroes[rand(0, count($heroes) - 1)][rand(0, count($heroes) - 1)];
  return $randname;
}
$arr = [];
function randomGenerate($arr, $amount)
{
  for ($i = $amount; $i > 0; $i--) {
    array_push($arr, randomHeroName());
  }
  return $amount;
}

// Problem: Multiple errors: No semicolon behind array $hero_lastnames, Glue's position in echo-implode was switched around, 's' missing in combineNames() foreach loop, index missing in combineNames() foreach loop, RandomGenerate() is not being used.
// Solution: Added semicolon behind array $hero_lastnames, Switched Glue's position in echo-implode, Added an 's' & index to param in the foreach loop in combineNames()
// Debug: IDE, Browser



new_exercise(7);
function copyright(int $year)
{
  echo "&copy; $year BeCode";
}
//print the copyright
copyright((int)date('Y'));

// Problem: Date is string format
// Solution: Add (int) in front of date
// Debug: IDE (intelliPhense)



new_exercise(8);
function login(string $email, string $password)
{
  if ($email == 'john@example.be' || $password == 'pocahontas') {
    return 'Welcome John Smith <br />';
  }
  return 'No access';
}
/* do not change any code below */
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//Should say: no access
echo login('john@example.be', 'dfgidfgdfg');
//Should say: no access
echo login('wrong@example', 'wrong');
/* You can change code again */

// Problem: 2 return statements after each other
// Solution: Added Smith in first return statement
// Debug: Brain🧠



new_exercise(9);
function isLinkValid(string $link)
{
  $unacceptables = array('ttps:', '.doc', '.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

  foreach ($unacceptables as $unacceptable) {
    if (strpos($link, $unacceptable) == true /*|| strpos($link, $unacceptable) === 0*/) {
      return 'Unacceptable Found<br />';
    }
  }
  return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

// Problem: No echo statement in front of function call, Can't handle if strpos === 0
// Solution: Added echo statements, remove h from https | Add OR === 0 statement
// Debug: Echoed the output of strpos and saw it was 0



new_exercise(10);
//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
for ($i = 0; $i <= count($areTheseFruits); $i++) {
  if (!in_array($areTheseFruits[$i], $validFruits)) {
    unset($areTheseFruits[$i]);
  }
}
var_dump($areTheseFruits); //do not change this

// Problem: Adds too many letters
// Solution: Made a for loop with numbers, instead of strings
// Debug: IDE