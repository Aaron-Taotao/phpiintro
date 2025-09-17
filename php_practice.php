<!-- Hello World!

<h1>Hello World!</h1>

<style>
    h1 {
        color:blue;
    }
</style>

<script>
    alert("Hello World!");
</script>
-->
<?php
    //echo "Hello World!";
    #echo "Hello World!";
?>

<!-- Hello -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<h1>This is my first PHP page</h1>-->

    <?php //eChO "<b>My name is Jeff!</b><br>";
    
    // aZ09_
    /*$a = 5;
    var_dump($a);

    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([1,2,3]);
    var_dump(null);
    */

    //global
    //$a = 5;

    //echo $a."<br>";

    //function test(){
       // $a = 10; //local
    //    static $a = 0; //static
     //   echo $a."<br>";
      //  $a++;
    //}
    
    //test();
    //test();

    //echo("Hello<br>"),("Hello<br>"),("Hello<br>");
    //echo "World!<br>","World!<br>","World!<br>";
    //print("Hello<br>");
    //print"World!<br>";
    //echo print("Hello<br>");

  //  $a = 5;
    //echo "$a Eggs";

    $a = "Jeff";
    $b = -5;
    $c = 3.14;
    $d = false;
    $e = [1,2,3];
    $f = new stdClass();
    $g = null;
    $h = fopen("php_practice.php", "r");

    var_dump($a);
    echo '<br>';
    var_dump($b);
    echo '<br>';
    var_dump($c);
    echo '<br>';
    var_dump($d);
    echo '<br>';
    var_dump($e);
    echo '<br>';
    var_dump($f);
    echo '<br>';
    var_dump($g);
    echo '<br>';
    var_dump($h);
    echo '<br>';


        // constants
    // $x = 10;
    // define("_GREETING", "Hello World!");

    // echo $x;
    // var_dump(_GREETING);

    //   const _GREETING2 = "Hello People!";

    //   echo _GREETING2;
    // function test(){
    //   echo _GREETING2;
    // }

    // test();

    // echo $x;
    // unset(_GREETING);
    // echo _GREETING;

    // PHP OPERATORS
    // ARITHMETIC
    // + ADDITION
    // echo 10 + 3 + 100, "<br>";
    // // - SUBTRACTION
    // echo 26 - 10 - 3, "<br>";

    // // ADD AND SUBTRACT
    // echo 26 - 10 + 100 -3, "<br>"; // LEFT TO RIGHT
    // // * MULTIPLICATION
    // echo 13 * 13 * 13, "<br>";
    // // / DIVISION
    // echo 169 / 13, "<br>";

    // // MULTIPLICATION AND DIVISION
    // echo 169 / 13 * 1, "<br>";
    // // ADD AND DIVISION
    // echo 169 + 1000 / 13, "<br>"; // multi/div first before add/min
    // // % MODULUS
    // echo 41 % 14, "<br>";
    // // ** EXPONENT
    // echo 13 ** 10, "<br>";

    // ASSIGNMENT

    // = EQUALS
    // $x = 10;
    // // +=
    // $x = $x + 10;
    // $x += 10;
    // // -=
    // $x = $x - 10;
    // $x -= 10;

    // // /=
    // $x = $x / 10;
    // $x /= 10;

    // // *=
    // $x = $x * 10;
    // $x *= 10;

    // echo $x;

    // COMPARISON
    // == is equals to if similar value
    // var_dump(10 == "10");
    // // === is identical to similar value and data types
    // var_dump(10 === "10");
    // // != not equals to is not similar value
    // var_dump(10 != "10");
    // var_dump(10 <> "10");
    // // !== not identical to not similar value and not similar data type
    // var_dump(10 !== "10");
    // // < less than to check if first value is less than second value
    // var_dump(10 < 11);
    // // > greater than to check if first value is more than second value
    // var_dump(10 > 11);
    // // <= checks if less than or equals to the next value
    // var_dump(10 <= 11);
    // // >= checks if greater than or equals to the next value
    // var_dump(10 >= 11);
    // // <=> spaceship checks if first value is less than or equals or greater than second value
    // var_dump(1 <=> 2);
    // var_dump(3 <=> 4);
    // var_dump(5 <=> 6);

    // INCRE/DECRE
    // PRE-INCREMENT
    // $x = 10;
    // echo ++$x, "<br>";
    // // POST INCREMENT
    // $y = 10;
    // echo $y++, "<br>";
    // echo $y, "<br>";
    // // DECRE
    // echo --$y, "<br>";
    // echo --$y, "<br>";
    $gender = "Male";
    $x = $gender == "Male" ? "Mr.": "Ms.";

    echo $gender == "Male" ? "Mr.": "Ms.";

    echo($x);

    $color = "R" ?? "Red"; 
    echo $color;

    $students = array(
        array("name"=> "Mary", "gender" => "Female"),
        array("name"=> "Ray", "gender" => "Male"),
        array("name"=> "Hardy", "gender" => "Male"),
    );

    foreach ($students as $student){
        echo $student["name"] . "<br>";
        echo "Gender: ".$student["gender"] . "<br>";
    }

    foreach ($students as $student){
        echo "<h1>Name: ".$student["name"] . "<h1>";
        echo "<ul>";
            echo "<li>Hello</li>"
        echo "</ul>";
    }

       foreach ($students as $student){
        echo "<h1>Name: ".$student["name"] . "<h1>";
        echo "<ul>";
            echo "<li>". $student["gender"] ."</li>";
            echo "<li>". $student["age"] ."</li>";
        echo "</ul>";
    }

    

    ?>

    <?php foreach ($students as $student){ ?>
        <h1><?php echo $student['name']; ?></h1>
        <ul>
            <li><?php echo $student['gender']; ?></li>
            <li><?php echo $student['age']; ?></li>
        </ul>
    <?php } ?>

    
        <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student){ ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['gender']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
        <?php } ?>
    </table>
        <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student){ ?>
            <?php foreach ($student as $value){ ?>
                <tr>
                    <td><?php echo $value; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
    
</body>

</html>

