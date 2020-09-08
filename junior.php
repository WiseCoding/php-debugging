<?php

declare(strict_types=1);


// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================












///
///
///
new_exercise(8);
function login(string $email, string $password)
{
  if ($email == 'john@example.be' || $password == 'pocahontas') {
    return 'Welcome John';
    return ' Smith';
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

new_exercise(9);
function isLinkValid(string $link)
{
  $unacceptables = array('https:', '.doc', '.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

  foreach ($unacceptables as $unacceptable) {
    if (strpos($link, $unacceptable) == true) {
      return 'Unacceptable Found<br />';
    }
  }
  return 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');


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


// Bonus round
// Below are 5 characters (the space included)
// Find out why the substring with limit 10 still shortens the string, and what might be a solution (not easy)
$str = "안녕 세상";
echo substr($str, 0, 10);
