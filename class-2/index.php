<?php
function test($studentname,$math,$english,$bangla){
$result = $math+$english+$bangla;
echo "$studentname marks is $result";
echo "<br>";
}
test("Inur",80,60,90);                             //1st function
test("Razia",90,70,70);
test("Dipa",60,60,80);

echo "<br>";
function add($a, $b) {
    $result= $a + $b;
    echo "sum result is $result ";                //2nd function
    echo "<br>";             
}
add(5, 3); 
add(15, 3); 
echo "<br>";

function subtract($a, $b) {
    $result= $a - $b;
    echo "subtract result is $result ";           //3rd function
    echo "<br>";
}
subtract(10, 3); 
subtract(80, 3);

echo "<br>";

function multiply($a, $b) {
    $result=  $a * $b;
    echo "multiply result is $result ";             //4th function
    echo "<br>";
}
multiply(10,3);
multiply(108,3);
echo "<br>";
echo "<br>";
function divide($a, $b) {
    $result=  $a / $b;
    echo "divide result is $result ";                  //5th function
    echo "<br>";
}
divide(10, 5);
divide(60, 5);
echo "<br>";
function power($a, $b) {
    $result=  $a ** $b;
    echo "power result is $result ";                   //6th function
    echo "<br>";
}
power(2, 3);
power(3, 3);
echo "<br>";
function modulus($a, $b) {
    $result=  $a % $b;
    echo "modulus result is $result ";               //7th function
    echo "<br>";
}
modulus(100, 3);
echo "<br>";
function uppercase($name){
    echo("Uppercase text is"." ". strtoupper($name));
    echo "<br>";
}
uppercase("Inur nahar");                               //8th function
uppercase("Liya");
echo "<br>";
function lowercase($name){
    echo("lowercase text is"." ". strtolower($name));
    echo "<br>";
}
lowercase("Inur nahar");                              //9th function
lowercase("Liya");


echo "<br>";
function address($name,$address) {
   
    echo "Name is $name addres is $address ";             //10th function
    echo "<br>";
}
address("liya", "Lakshmipur");
address("Razia", "Noakhali");
address("Dipa", "Feni");

