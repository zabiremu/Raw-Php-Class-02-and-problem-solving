<?php
function getResult($bangla,$eng,$math){
    $bangla = $bangla;
    $eng = $eng;
    $math = $math;
    $total =$bangla + $eng + $math;
    echo $total;
}
getResult(80,40,90);

echo "<br>";
echo "<br>";

function result($bangla = 0,$eng = 0,$math = 0){
    $bangla = $bangla;
    $eng = $eng;
    $math = $math;
    $total =$bangla + $eng + $math;
    if($total >= 120){
        echo "Very Good";
    }elseif($total >= 110 && $total < 120){
        echo "average";
    }else{
        echo "you failed the exam";
    }
}
result(110);
echo "<br>";
echo "<br>";

function Mood($day){
    $day = $day;
    if($day == 'Monday'){
        echo "Laugh on Monday, laugh for danger.";
    }elseif($day == 'Tuesday'){
        echo "Laugh on Tuesday, kiss a stranger.";
    }elseif($day == 'Wednesday'){
        echo "Laugh on Wednesday, laugh for a letter.";
    }elseif($day == 'Thursday'){
        echo "Laugh on Thursday, something better.";
    }elseif($day == 'Friday'){
        echo "Laugh on Friday, laugh for sorrow.";
    }else{
        echo "Laugh on Saturday, joy tomorrow.";
    }
}
Mood('Wednesday');

echo "<br>";
echo "<br>";

function day($friday){
    $friday = $friday;
    if($friday == "friday"){
        echo "Have a nice day";
    }else{
        echo "bad day";
    }
}
day("friday");

echo "<br>";
echo "<br>";

function Bill($cost = 0, $member = 1){
    $cost = $cost;
    $member = $member;
    if($cost <= 500 && $member == 1){
        echo "I will pay the bill";
    }elseif($cost >= 500 && $cost <= 1000 && $member >= 2){
        echo "We will pay the bill";
    }else{
        echo "Please enter correct information.";
    }
}
Bill( 750, 2);

echo "<br>";
echo "<br>";

function age($age){
    $age = $age;
    if($age >= 18){
        echo "You are eligible for vote";
    }else{
        echo "You are not eligible";
    }
}
age("21");

echo "<br>";
echo "<br>";

function numberCheak($num){
    $num = $num;
    if($num%2 == 0){
        echo "This is even number";
    }else{
        echo "This is odd number";
    }
}
numberCheak(121);

echo "<br>";
echo "<br>";

function largestNum($a,$b){
    $a = $a;
    $b = $b;
    if($a > $b){
        echo "$a is the largest number";
    }elseif($a < $b){
        echo "$b is the largest number";
    }elseif($a == $b){
        echo "$a and $b both are equal";
    }else{
        echo "please enter number";
    }
}
largestNum(20, 20);

echo "<br>";
echo "<br>";

function largNum($num1 = 0,$num2 = 0,$num3 = 0){
    $num1 = $num1;
    $num2 = $num2;
    $num3 = $num3;
    if($num1 > $num2 && $num1 > $num3){
        echo "$num1 is the largest number";
    }elseif($num2 < $num3){
        echo "$num2 is the lowest number";
    }else{
        echo "$num3 is the largest number";
    }
}
largNum(60, 40, 10);

echo "<br>";
echo "<br>";

function valueCheak($a,$b,$c){
    $a = $a;
    $b = $b;
    $c = $c;
    if($a == $b && $b == $c){
        echo "Equilateral triangle.";
    }elseif($a == $b || $b == $c){    
        echo "Isosceles triangle.";
    }else{
        echo "Scalene triangle.";
    }
}
valueCheak(30,50,40);

echo "<br>";
echo "<br>";

function range1($d){
    $d = $d;
    if($d >= 1 && $d <= 10){
        echo "Between the range.";
    }else{
        echo "Outside the range.";
    }
}
range1(5);