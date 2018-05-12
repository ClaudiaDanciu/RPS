<?php

//get the parameter from the URL
$q = $_REQUEST["q"];
echo $q;
echo "<br />";

$randomNumber = array_rand(['rock', 'paper', 'scissors']);
if($randomNumber === 0) {
    echo "Computer chose rock";
} else if($randomNumber === 1) {
    echo "Computer chose paper";
} else {
    echo "Computer chose scissors";
}
echo "<br />";
//function calculate winner.
    if ($q === $randomNumber) {
        echo "Tie";
} else if ($q == 0 && $randomNumber == 1) {
        echo "Computer Wins!";
} else if ($q ==0 && $randomNumber == 0){
        echo "Tie";
} else if ($q == 1 && $randomNumber == 0) {
        echo "You Win!";
} else if ($q == 2 && $randomNumber == 0) {
        echo "Computer Wins!";
} else if ($q == 2 && $randomNumber == 1) {
        echo "Computer Wins!";
} else if ($q == 0 && $randomNumber == 2) {
        echo "You Win!";
} else if ($q == 1 && $randomNumber == 2) {
        echo "Computer Wins!";
}

