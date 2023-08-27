<?php
/**
 * A PHP Function feature is a piece of code that can be used over and over again and accepts argument lists as input, and returns a value.
 * !Bill sytem using function
 * fan 20w
 * AC 100w
 * Fridge 150w
 * fan 2, AC 5, fridge 2
 * 1w = 14tk
 */
echo "**Bill sytem<br>";
function billingSystem ($Tfan, $Tac, $Tfridge,$watttk){
    $totalwatt = ($Tfan * 2) + ($Tac * 5) + ($Tfridge * 2);
    echo "Total watt is $totalwatt<br>";
    $TotalBill = $totalwatt * $watttk;
    echo "Total Bill is $TotalBill<br><br>";
}
billingSystem(20,100,150,14);
// !Auth system using Function
echo "**Auth System Using Function<br>";
function authSystem($user_name, $password){
    if($user_name == "admin@gmail.com" && $password == "1234"){
        echo "You are loged in <br><br>";
    } else {
        echo "Your username or password are worng <br>";
    }
}
authSystem("admin@gmail.com","1234");
// !Dynamic Markshit using function
echo "**Marksheet<br>";
function markSheet($eng = 0, $bn = 0, $math = 0, $BGS = 0, $username){
      $result = $eng + $bn + $math + $BGS;
      echo "$username Total mark is $result<br><br>";
}
markSheet(30,20,80,95,"Rakib's");
markSheet(80,40,70,100, "Jannat's");
markSheet(0,0,30,0,"Nitu");


// !IF, else, else if
echo "**IF, else, else if<br/>";
$a = 7;
$b = 100;
if($a < $b){
    echo "A is smaller<br><br>";
}
  else{
    echo "B is smaller <br><br>";
  }
// !Dynamic voting rang using function
echo "**Check Voting age<br>";
function voting($votingage, $perfectvoting){
         if($votingage >= $perfectvoting){
            echo "Voting is eligable<br>";
         } else{
            echo "No voting<br><br>";
         }
}
voting(20, 18);
voting(18, 25);
// !Dynamic even odd using function
echo "**Even Odd number<br>";
function number($number){
    if($number % 2 == 0){
        echo "$number is even number<br>";
    } else{
        echo "$number is odd number<br><br>";
    }
}
number(40);
number(91);
// !Positve Negitive number using function
echo "**Positive and Negitive Number Identifier<br>";
function numberChecker($num){
    if($num > 0){
        echo "$num is Positive Number<br>";
    } else if($num < 0){
        echo "$num is Negitive Number<br>";
    } else{
         echo "$num is Nuteral<br><br>";
    }
}
numberChecker(20);
numberChecker(-47);
numberChecker(0);
/**
 * There are two basic ways to get output: echo and print.
 * !Print statement
 */
echo ("**use of print statement<br>");
print "Hello World <br><br>";

/**
 * !The var_dump() function is a built-in function of PHP that dumps the information about the variables.
 */
echo ("**Use of var_dump <br>");
var_dump("Front end developer");
var_dump(9874264);
var_dump(true);
echo("<br><br>");
/**
 * !The strtoupper() function is used to convert a string into uppercase.
 * !The strtolower() function is used to convert a string into lowercase.
 */
echo ("**strtolower and strtoupper <br>");
echo strtoupper("nitu <br>");
echo strtolower("JANnat<br><br>");

//printf function The arg1, arg2, ++ parameters will be inserted at percent (%) signs in the main string. 
// !For execute the function we can use the printf function without using echo.
echo ("**use of printf<br>");
printf("hello world %s",strtoupper("Nitu<br>"));
printf("I'm %d years old <br>",20);
printf("My height is %f<br><br>", 10.1);


echo ("**PHP operators<br>");
/**
 * !Arithmetical operations, such as addition, subtraction, multiplication etc.
 */
$x = 200;
$y = 50;
$sum = $x + $y;
echo ('The sum is : '.$sum.'<br>');

$num1 = 50;
$num2 = 4;
$result = $num1 % 7;
echo ('The modulus is : '.$result.'<br>');

/**
 *  !The assignment operator = assigns the value of its right-hand operand to a variable, a property, or an indexer element given by its left-hand operand.
 */
$result += $num2;
echo ('The Addition is : '.$result.'<br>');
$result *= $num2;
echo ('The Multiplication is : '.$result.'<br>');

/**
 * !Increment / Decrement Operators
 */
$x = 3;
$y = 5;
echo ++$x;
echo $y--;
echo $y;







