<?php
    //creating variables
    $test="I'm a variable!";
    $test2 = "Another Variable";
    //Concatinating is done by periods not + like in javascript

    $number = 56;
    echo $test.$test2;
    echo $number = 56/4;
    //can not have a number at the beginning of the variables
    echo "This is my first php".$number;

    echo "Having a variable inside a string $number";
    echo "<br/>";
    //using a variable variable
    $a ="name";
    $name = "Brady";
    //display just Brady
    echo "Should just see ".$$a;
    echo "<br/>";
    //Using Arrays
    $myArray = array("Blue","Green","Red");
    //how to print an array
    print_r($myArray);
    echo "<br/>";
    //accessing a particular index
    echo $myArray[2];
    echo "<br/>";
    //defiing keys in an Arrays
    $arrayLanguage=array(
      "France" => "French",//France is the key and French is the value
      "Spain" => "Spanish",
      "Germany" => "German"
    );

    print_r($arrayLanguage);
    echo "<br/>";
    //add another value to an array

     $myArray[] = "Orange";
     print_r($myArray);
    //deleting a value from an Array targeting the index Germany and deleting the value
    unset($arrayLanguage["Germany"]);//usnet can be used for variables as well
    echo "<br/>";
    print_r($arrayLanguage);
    echo "<br/>";
    //Conditional Statements Very similar to JavaScript
    $testNumber = 3;
    $anotherNumber = 4;
    $thirdNumber = 3;
    if($testNumber == 2){
      echo "testNumber is equal to two";
    }else{
      echo "testNumber is not equal to two";
    }
    echo "<br/>";
    if(!($testNumber == $anotherNumber)){//checks if the numbers are NOT equal to each other
      echo "Number are not equal";
    }
    echo "<br/>";
    //using AND operator and OR
    if($testNumber==$anotherNumber AND $anotherNumber==$thirdNumber){
      echo "Using the AND operator";
    }
    echo "<br/>";
    //using a for loop and for each
    for ($i=1; $i <= 10; $i+=2){
      echo $i." ";
    }
    echo "<br/>";
    foreach ($myArray as $key => $value){
      echo "Key: $key Value: $value <br/>";
    }
    foreach ($arrayLanguage as $key => $value){
      echo "Country: $key Language: $value <br/>";
    }
    echo "<br/>";
    //while loops
    $i =0;
    $array=array("apples", "bananas","watermelon");
    while ($array[$i]){
      echo $array[$i]." ";
      $i++;
    }
?>
