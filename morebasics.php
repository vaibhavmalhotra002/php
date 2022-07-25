<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php project</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;

        }
        .container{
            max-width:80%;
            background-color :grey;
            margin:auto;
            padding:25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Age test</h1>
        
        <?php
          $age=14;
          if($age>18){
            echo "You can go to bar";
          }
          else{
            echo"You cannot go to bar";
          }
// arrays in php

          $languages= array("Java","Javascript","c++");
          echo $languages[1];
          echo count($languages);
          //loops in php

          $a=0;
          while ($a <= 10) {
            echo "<br>the vaule of a is: ";
            echo $a;
            $a++;
          }

        //iterating loops in php
          $a=0;
          while ($a < count($languages)) {
            echo "<br>the vaule of language is: ";
            echo $languages[$a];
            $a++;
          }
          //do-while loop
           $a=20;
           do{
            echo "The value of a is: ";
            echo $a;
            $a++;
          }while( $a<10);

          //for loop

          for ($a=0; $a < 10; $a++) { 
            echo "<br>The value of a  from for loop is: ";
            echo $a;
          }
          //for each loop
          foreach ($languages as $value) {
                echo "<br>the vaule of language using foreach loop is: "; 
                echo $value;
          }
        

          //functions in php
          function print5(){
            echo "FIVE";
          }
          print5();

          function print_number($number){
            echo "<br>Your number is: ";
            echo $number;
          }
          print_number(145);
        ?>
    </div>
</body>
</html>