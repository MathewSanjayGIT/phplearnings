<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php include("variables.php"); ?>
<?php include("navbar.php"); ?>
<?php

//   // variables
//     echo "Hello<br/>";
//     $first_name = "sanjay";
//     $age = 22;
//     echo $first_name;


//   // Math op +,-,*,/,%,**,++,--
// $num_1 = 41;
// $num_2 = 5;

// echo $num_1*$num_2;
// echo $num_1--;
// echo $num_1;


//   //string concantenation

// $first_name = "matt";
// $last_name = "k";
// $age = 22;
// $age_1 = 22;

// echo $first_name ." ". $last_name . "<br/>". $age * $age_1;


//   // comparision operators ==, !=, >, <, >=, <=

// $num_3 = 22;
// $num_4 = 22;

// var_dump ($num_3==$num_4);


//   // Escape characters

// echo "this is \"hp notebook d'11153\"";


//   // if else statements

// $first_name = "mathew";

// if ($first_name == "mathew"){
//     echo "Hi" ." ". $first_name;
// }
// else {
//     echo "who r u <br/>";
// }

// $favnum = 7;

// if ($favnum > 1){
//     echo $favnum. " is greater than 1";
// }else {
//     echo $favnum. " is smaller than 1";
// }


//   // Elseif statements

// $num_5 = 7;
// $num_6 = 4;

// if ($num_5 == $num_6){
//     echo $num_5 . " is equal to " . $num_6;
// }
// elseif ($num_6 == 6) {
//     echo $num_6 . " is equal to 4";
// }
// else {
//     echo $num_5 . " is not equal to " . $num_6;
// }


//   // numeric arrays

// $arraylastnames = array ("k", "m", "a");
// $arrayfirstnames = array ("mathew" , "sanjay", $arraylastnames);

// echo $arrayfirstnames[2][0];


//   // associative array

// $favpizza = array(
//     "mathew"=>"marg",
//     "sanjay"=>"tikka",
//     "abhishikth"=>"pepperoni"
// );
//  // mathew - key & marg - value
// echo $favpizza["abhishikth"];

//   // array count

// echo count ($favpizza);

// $favpizza1 = array("k", "m", "a", "s");
// echo $favpizza1[count ($favpizza1) - 1];


//   // while loops

// $counter = 0;

// while ($counter <= 10) {
//     echo "The count is: $counter <br/>"; 
//     $counter++;
// }


//   // for loop

// for($count=0; $count<=10; $count++){
//   echo "the count is: $count <br/>";
// }


//   // foreach loop

// $names = array("k", "m", "a");

// foreach ($names as $value) {
//   echo "$value<br/>";
// }

// $count = 0;

// while ($count < count($names)) {
//   echo "$names[$count]";
//   $count++;
// }


//   // functions

// function hello($num_7, $num_8){
//   echo $num_7 + $num_8;
// } 
// hello(7, 9);

// function Hwru($num_7, $num_8){
//   return $num_7+$num_8;
// }
// echo Hwru(5, 34);
// $answer = Hwru(34 , 34);
// echo $answer*0


//   // Random functions

// $ovel = array("a", "e", "i", "o", "u");
// echo $ovel[mt_rand(0, 4)];
// $rando = mt_rand(0, 4);
// echo $ovel[$rando];

// echo "guess a num";

// $num = 5;
// $rando = mt_rand(0, 10);

// if ($num == $rando) {
//   echo "you win $rando = $num";
// } else {
//   echo "you loose $rando not = $num";
// }


//   // Date function

// $today = date("l");
// echo "today is $today";


//   // string manipilation

// $stuff = "Hi how r you mr smith";
// $smith = "mr smith";
// $watson = "mr watson";
// echo str_replace($smith, $watson, $stuff);

// echo strtoupper($stuff); //strtolower for lower
// echo ucwords ($watson); //lcwords
// echo ucfirst($smith); //lcfirst
// echo strlen($stuff);
// echo str_shuffle($stuff);


//   // include function
// echo $tagname;

?>
<div class = "container">
<ul class="list-group">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
</div>
<?php include("footer.php"); ?>
</body>
</html>