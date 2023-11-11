<?php 
include("header.html");

//include("database.php");
// 
// $sql2 = "SELECT * FROM users";
// $result2 = mysqli_query($conn, $sql2);
//
//if(mysqli_num_rows($result) > 0){
// while($row = mysqli_fetch_assoc($result)){
//      echo $row["id"] . "<br>";
//      echo $row["user"] . "<br>";
//      echo $row["reg_date"] . "<br>";
//      };
// }
//  else{
//          echo"No user found";
//  }
// $usname = "Joker";
// $psword = "Gotham1";
// $sql = "INSERT INTO users (user, password)
//        VALUES ('$usname', '$psword')";
//try{
//  mysqli query($conn, $sql);
//  echo"User is now registered";
//  } catch(mysqli_sql_exception) {
//    echo"User was NOT registered";
//  }
//mysqli_close($conn);


session_start();



/*

$hashpass = "fries123";

$hash = password_hash($hashpass, PASSWORD_DEFAULT);

if(password_verify("password",$hash)){ //fries123
    echo"logged in";
}
else{
    echo"Incorrect!";
}

setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");
// creates a cookie 
// remove time to delete cookie

//foreach($_COOKIE as $key => $value){
//    echo"{$key} = {$value} <br>";
//}

if(isset($_COOKIE["fav_food"])){
    echo"Buy some {$_COOKIE["fav_food"]}!!!";
}
else{
    echo"I don't know your favorite food";
}
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login <br>
    <a href="home.php">This goes to the home page</a>
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="login">
    <!--
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <h2>Welcome to Fakebook!</h2>
        username:<br>
        <input type="text" name="username3"><br>
        password:<br>
        <input type="password" name="password3"><br>
        <input type="submit" name="submit" value="register">
    </form>

    This is the home page<br>
    Stuff about your home page can go here<br>
   
    <form action="index.php" method="get">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
    -->
       <!--
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="submit" name="confirm" value="confirm">
        -->

<!--
    <form action ="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
-->
<!--
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
    -->
</body>
</html>

<?php

/*

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username3 = filter_input(INPUT_POST, "username3", FILTER_SANITIZE_SPECIAL_CHARS);
    $password3 = filter_input(INPUT_POST, "password3", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username3)){
        echo"Please enter a username";
    }
    elseif(empty($password3)){
        echo"Please enter a password";
    }
    else{
        $hash3 = password_hash($password3, PASSWORD_DEFAULT);
        $sql ="INSERT INTO users (user, password)
                VALUES ('$username3', '$hash3')";
        mysqli_query($conn, $sql);
        echo"You are now registered!";
    }
}

mysqli_close($conn);


include("footer.html");

if(isset($_POST["login"])){

    if(!empty($_POST["username"]) &&
       !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: home.php");
       }
       else{
        echo"Missing username/password <br>";
       }
}


//Validing data = determind if the data is in proper form
//Sanitizing data = remove any illegal characters from data





if(isset($_POST["login"])){ 
    $age = filter_input(INPUT_POST, "age",
                                FILTER_VALIDATE_INT);
    if(empty($age)){
        echo" That number is not valid";
    }else{
        echo"You are $age years old";
    }
}


        // santize input to get rid of illegal chars
    if(isset($_POST["login"])){ 
        $username = filter_input(INPUT_POST, "username",
                    FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age",
                                FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", 
                            FILTER_SANITIZE_EMAIL);
        echo "You are {$age} years old";
    }


if(isset($_POST["confirm"]))
{

    $credit_card = null;

    if(isset($_POST["credit_card"])){
    $credit_card = $_POST["credit_card"];
    //echo $credit_card;
    }
    if($credit_card == "Visa")
    {
        echo"You selected Visa";
    }
    elseif($credit_card == "Mastercard"){
        echo"You selected Mastercard";
    }
    else{
        echo"Please make a selection";
    }
}

//$username = array("Zakk", "The", "");
//$phone = "123-456-7890";..
//$username = strtolower($username);
//$username = strtoupper($username);
//$username = trim($username);
//$username = str_pad($username, 20, 0);
//$phone = str_replace("-","",$phone);
//$username = strrev($username);
//$username str_shuffle($username);
//$equals = strcmp($username, "Bro Code");
//$count = strlen($phone);
//$index = strpos($phone, "-");
//$firstname = substr($username, 0, 3);
//$lastname = substr($username, 4);
//$fullname = explode(" ", $username);
//$username = implode("-", $username);

foreach($fullname as $name){
    echo $name . "<br>";
};


function hypotenuse(float $a, float $b){
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
    echo hypotenuse(4, 5);

$item = "pizza";
$price = 5.99;
$quantity = $_GET["quantity"]; // use $_POST for secure 
$total = null;
$total = $quantity * $price;

echo"You have ordered {$quantity} x {$item}/s <br>";
echo"Your total is: \${$total}";





// isset = returns true if a vaariable is delcared and not null
// empty = returns true if a variable is not declared and null

$user = "false"; // isset is declared and not null

if(isset($user)){
    echo"This variable is set";
}
else
{
    echo"This variable is NOT set";
}

$user2 = NULL; // empty is null or not declared

if(empty($user2)){
    echo" This variable is empty";
}
else{
    echo" This variable is NOT empty";
}


$capitals = array("USA"=>"Washington D.C", "Japan"=>"Kyoto",
"South Korea"=>"Seoul", "India"=>"New Delhi");

//$capitals["USA"] = "Las Vegas";
//$capitals["China"] = "Beijing";
//array_pop($capitals); // remove last element
//array_shift($capitals); // remove first element
//$keys = array_keys($capitals); // return a new array
//$values = array_values($capitals); //returns values 
//$capitals = array_flip($capitals); // flips the keys n values
//$capitals = array_reverse($capitals); // reverse the array

//echo count($capitals);

foreach($capitals as $key => $value){
   echo"{$key} = {$value} <br>";
}

//foreach($key as $key){
//    echo"{$key} <br>";

//foreach($values as $value){
    echo"{$value} <br>";
}


$foods = array("apple","orange","banana","coconut");
echo $foods;

$seconds = 0;
$running = true;

while($running){   // while loop test
    if(isset($_POST["stop"])){
        $running = false; }
    else{
        $seconds++;
    echo $seconds . "<br>"; }
}

for($i = 1;$i <= 100;$i+=2){ // for loop test
    echo $i . "<br>";
}

$date = date("1");
$date = "Tuesday";

switch($date){ // switch test
    case "Monday":
        echo "I hate Mondays";
        break;
    case "Tuesday":
        echo "I hate Tuesday";
        break;
    case "Wednesday":
        echo "Hump Day!";
        break;
    case "Thursday":
        echo "Almost Friday!";
        break;
    case "Friday":
        echo "I love Friday";
        break;
    case "Saturday":
        echo "I love Saturday";
        break;
    case "Sunday":
        echo "Chill day!";
        break;
}

$age = 19;

if($age >= 21){
    echo"You are too young to enter";
}
elseif($age <= 21){
    echo"You can enter";
}
else{
    echo"You did not enter a age";
}

//$total = abs($x);
//$total = round($x);
//$total = floor($x);
//$total = ceil($x);
//$total = sqrt($x);
//$total = pow($x, $y);
//$total = max($x, $y, $z);
//$total = min($x, $y, $z);
//$total = pi();
//$total = rand(1, 100); // random number 1-100

echo $total;

//echo "{$_GET["username"]} <br>"; // puts inside URL address bar
//echo "{$_GET["password"]} <br>";
echo "{$_POST["username"]} <br>"; // more secure
echo "{$_POST["password"]} <br>";

// $_GET, $_POST = Specail veriables used to collect data from html
// $_GET Data not appended to the url, not secure , char limit, can be cached
// $_POST data packaged inside body of http, secure, no data limit, can not be cached

$test =  'test';
echo 'Big ', $test, ' right here';

$y = 10;
$x = 15;

$y--;
$x+=4;
echo '<br>';
echo $y + $x;
*/

?>