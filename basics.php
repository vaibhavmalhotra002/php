<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        First Php website
    </div>
    <?php
    echo "Hello ,this is written by using php";
    //single line comment
    /*
    This is
    a 
    multiline comment*/
    

    //Variables in php
    $var1=35;
    $var2=47;
    echo $var1;
    echo $var2;
    echo $var1+$var2;
    ?>
    <?php
    define('pi', 3.14);  //Constants

    echo "Hello again ,this is written by using php";

    //Operators in php
    // Arithmetic Operators
    echo "<br>";
    echo "The vaue of var1+var2 =";
    echo $var1+$var2;
    echo "<br>";
    echo "The vaue of var1-var2 =";
    echo $var1-$var2;
    echo "<br>";
    echo "The vaue of var1*var2 =";
    echo $var1*$var2;
    echo "<br>";
    echo "The vaue of var1/var2 =";
    echo $var1/$var2;
    // Assignment Operators

    $newvar = $var1;
    
    echo "<br>";
    // $newvar += 1;
    // $newvar -= 1;
    // $newvar *= 2;
    $newvar /= 2;
    echo "The vaule of new var is ";
    echo $newvar;
    echo "<br>";

    // Comparison Operators
    
    echo "The value of 1==4 =";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 =";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1>=4 =";
    echo var_dump(1>=4);
    echo "<br>";
    echo "The value of 1<=4 =";
    echo var_dump(1<=4);
    echo "<br>";
    // Increment/Decrement Operators

    // echo $var1++;
    // echo $var1--;
    // echo ++$var1;
    echo --$var1;
    echo "<br>";
    echo $var1;

    // Logical Operators
    // and (&&)
    // or (| |)
    // xor
    // ! 
    // $myVar =(true && true);
    // $myVar =(false and true);
    // $myVar =(false and false);
    $myVar =(true and false);

    echo "<br>";
    echo var_dump($myVar);
//datatypes in php
    // 1.String 
    // 2.Integer
    // 3.float
    // 4.Boolean
    // 5.array
    // 6.object
    echo "<br>Data Types<br>";
    $var="This is a String";
    echo var_dump($var);
    echo "<br>";
    $var= 67;
    echo var_dump($var);
    echo "<br>";
    $var= 67.90;
    echo var_dump($var);
    echo "<br>";
    $var= true;
    echo var_dump($var);
    echo "<br>";
    $var= "arrayy";
    echo var_dump($var);
    echo "<br>";
    
    echo pi;
    ?>
</body>
</html>