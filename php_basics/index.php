<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
    <?php  
    
        //  Starting With Tradition
        echo "Hello World!" . "<br>";
        $studentName = "Rajesh Sharma";
        $studentAge = 32;
        $hasStudentCompletedMasters = false;
        $studentFriends = ['Mohit Singh','Rajesh Singh','Kavit Singh','Vikas Sharma'];
        // Single Line Comments
        /* 

            This is
            a Multi
            Line Comment

        */

        // Operations in PHP
        $base = 20;
        $height = 10;
        $area = $base * $height;
        var_dump($area);


        // Logical xor operator:- returns true only if one of them is true otherwise false.
        // The difference b/w double and single quotes is that with using double quotes we can expand variables in a string
        // we can also use escape characters using double quotes

        $msg = "Hello\n How are you ?\n Nice to meet you everyone.";
        echo $msg . "<br>";
        echo strlen($msg) . "<br>";
        echo substr($msg,0,6) . "<br>";
        $newMessage =  str_replace("Hello","Namastey",$msg) . "<br>";
        echo $newMessage;
        echo trim(" Hello, How do   you do? my friend . ")."<br>";
        echo strtoupper("virat")."<br>";
        echo strtolower("NOVAK DJOKOVIC")."<br>";
        var_dump(explode(" ","Namastey JavaScript"))."<br>";
        var_dump(implode(" ",$studentFriends));
        
    
    
    
    
    ?>
</body>
</html>