<?php

    $sportsMans = ["Novak Djokovic","Cristiano Ronaldo","Virat Kohli"];
    $sportsMans[] = "Roger Federer";
    // var_dump($sportsMans);
    array_unshift($sportsMans,"Rafael Nadal");
    // var_dump($sportsMans);
    // var_dump(count($sportsMans));
    // var_dump(in_array("Novak Djokovic",$sportsMans));
    // var_dump(array_search("Cristiano Ronaldo",$sportsMans)); // gives index of item in array

    // Array Functions
    // var_dump(is_array($sportsMans));  // find if a variable is array or not.
    $numbers = [75,25,12,75,56,399,15,75];
    var_dump($numbers);
    $uniqueNumbers = array_unique($numbers);
    var_dump($uniqueNumbers);
    var_dump(array_search(75,$uniqueNumbers));
    var_dump(array_reverse($uniqueNumbers));

    $numbersMultipleBy2 = [];
    $newNumbers = [1,2,3,4,5,6,7,8,9,10];


    function myFunc($num){
        return $num*2;
    }
    $numbersMultipleBy2 = array_map("myFunc",$newNumbers);
    // var_dump($numbersMultipleBy2);

    // print_r($numbersMultipleBy2);
    // var_dump(is_array($numbersMultipleBy2));
    // print_r(count($numbersMultipleBy2));
    // foreach($numbersMultipleBy2 as $num){
    //     echo "New Number after manipulations are: {$num}". "<br>";
    // }

    function largerFunc($num){
        return $num >=5;
    }
    $numbersGreaterThan5 = array_filter($newNumbers,"largerFunc");
    // var_dump($numbersGreaterThan5);


    //  Using Associative Arrays 

    $studentArray = ["name" => "Arpit","age" => 24 ,"department"=>"Engineering","status"=>true];
    var_dump($studentArray);




?>