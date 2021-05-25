<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>PHP Class 1</h1>

<p>
    <?php

    // FIRST TASK
    echo "<p>Hello from PHP</p>";

    // SECOND TASK
    $word1 = 'twinkle';
    $word2 = 'star';

    echo "<p>$word1, $word1 little $word2</p>";

    // THIRD TASK
    $x = 10;
    $y = 7;

    echo "<span>$x + $y = </span>" . ($x + $y);

    echo "<span> $x - $y = </span>" . ($x - $y);

    echo "<span> $x * $y = </span>" . $x * $y;

    echo "<span> $x / $y = </span>" . $x / $y;

    echo "<span> $x % $y = </span>" . $x % $y;

    // FOURTH TASK
    $value = 8;

    echo "<span>Value is now $value. Add 2. Value is now </span>" . ($value = $value + 2);
    echo "<span>. Subtract 4. Value is now </span>" . ($value = $value - 4);
    echo "<span>. Multiply by 5. Value is now </span>" . ($value = $value * 5);
    echo "<span>. Divide by 3. Value is now </span>" . ($value = $value / 3);
    echo "<span>. Increment value by one. Value is now </span>" . ($value = $value + 1);
    echo "<span>. Decrement value by one. Value is now </span>" . ($value = $value - 1);
    echo "<span>.</span>";
    echo "<br><br>";

    // FIFTH TASK
    // string(5) "Harry" Harry int(28) NULL

    $name = "Harry";
    $name2 = "Harry";
    $num = 28;

    var_dump($name);
    var_dump($num);

    // SIXTH TASK
    $around="around";

    echo '<p>What goes $around, comes $around</p>';

    //SEVENTH TASK


    ?>
</p>



</body>
</html>
