<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>

<body>
    <h2>Question 1</h2>
    <p>
        <?php
        $colors = ["red", "green", "white"];
        echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. -Richard M. Nixon";

        ?>
    </p>
    <hr>
    <h2>Question 2</h2>
    <ul>
        <?php
        $colors = ["red", "green", "white"];
        foreach ($colors as $color) {
            echo "<li> $color </li>";
        }
        ?>
    </ul>
    <hr>
    <h2>Question 3</h2>
    <ul>
        <?php
        $cities = array(
            "Italy" => "Rome",
            "Luxembourg" => "Luxembourg",
            "Belgium" => "Brussels",
            "Denmark" => "Copenhagen",
            "Finland" => "Helsinki",
            "France" => "Paris",
            "Slovakia" => "Bratislava",
            "Slovenia" => "Ljubljana",
            "Germany" => "Berlin",
            "Greece" => "Athens",
            "Ireland" => "Dublin",
            "Netherlands" => "Amsterdam",
            "Portugal" => "Lisbon",
            "Spain" => "Madrid"
        );
        foreach ($cities as $city => $capital) {
            echo "The capital of $city is $capital <br>";
        }
        ?>
    </ul>
    <hr>
    <h2>Question 4</h2>
    <p>
        <?php
        $color = array(4 => 'white', 6 => 'green', 11 => 'red');
        echo $color[4];
        ?>
    </p>
    <hr>
    <h2>Question 5</h2>
    <p>
        <?php
        $color = array(1, 2, 3, 4, 5);
        echo print_r($color) . "<br>";
        echo var_dump($color) . "<br>";
        echo implode("-", $color) . "<br>";
        array_push($color, 6);
        echo implode("-", $color) . "<br>";
        array_unshift($color, 0);
        echo implode("-", $color) . "<br>";
        $color[] = 7;
        //$color[3] = 7;
        echo implode("-", $color) . "<br>";
        array_splice($color, 4, 0, "$");
        echo implode("-", $color) . "<br>";

        ?>
    </p>
    <hr>
    <h2>Question 6</h2>
    <p>
        <?php
        $fruits = array(
            "d" => "lemonn",
            "a" => "orangeeee",
            "b" => "bananaa",
            "c" => "appl"
        );
        //echo implode(" , ", $fruits) . "<br>";
        //sort($fruits);
        //echo implode(" , ", $fruits) . "<br>";
        //rsort($fruits);
        //echo implode(" , ", $fruits) . "<br>";
        //ksort($fruits);
        //echo implode(" , ", $fruits) . "<br>";
        usort($fruits, function ($a, $b) {
            return strlen($b) - strlen($a); //strlen to count number of characters in string
        });
        echo implode(" , ", $fruits) . "<br>";

        ?>
    </p>
    <hr>
    <h2>Question 11</h2>
    <p>
        <?php
        $words = array(
            "hjjj",
            "abcd",
            "abc",
            "de",
            "g",
            "wer"
        );
        usort($words, function ($a, $b) {
            return strlen($a) - strlen($b); //strlen to count number of characters in string
        });
        echo implode(" , ", $words) . "<br>";
        echo "shortest string is : " . $words[0] . " Lenght : " . strlen($words[0]) . "<br>";
        echo "longest string is : " . $words[count($words) - 1] . " Lenght : " . strlen($words[count($words) - 1]) . "<br>";



        ?>
    </p>
    <hr>
    <h2>Question 7</h2>
    <p>
        <?php
        $temp = [
            78,
            60,
            62,
            68,
            71,
            68,
            73,
            85,
            66,
            64,
            76,
            63,
            75,
            76,
            73,
            68,
            62,
            73,
            72,
            65,
            74,
            62,
            62,
            65,
            64,
            68,
            73,
            75,
            79,
            73
        ];
        $avg = array_sum($temp) / count($temp);
        echo $avg . "<br>";
        sort($temp);
        $lowest = array_slice($temp, 0, 5);
        echo implode(" , ", $lowest) . "<br>";
        $highest = array_slice($temp, -5, 5);
        echo implode(" , ", $highest);
        ?>
    </p>
    <hr>
    <h2>Question 8</h2>
    <p>
        <?php
        // $array1 = array("color" => "red", 2, 4);
        // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
        // $result = array_merge($array1, $array2);
        // echo print_r($result);
        $arr1 = ["a" => "apple", "b" => "banana"];
        $arr2 = ["b" => "blueberry", "p" => "pineapple"];
        $result = array_merge($arr1, $arr2);
        echo print_r($result) . "<br>";
        $result = $arr1 + $arr2;
        echo print_r($result)  . "<br>";
        $result = array_merge_recursive($arr1, $arr2);
        echo print_r($result) . "<br>";
        ?>
    </p>
    <h2>Question 9</h2>
    <p>
        <?php
        $colors = ["red", "green", "blue", "white"];
        $result = array_map('strtoupper', $colors);
        echo implode(" ", $result);
        ?>
    </p>
    <hr>
    <h2>Question 10</h2>
    <p>
        <?php
        $colors = ["RED", "GReen", "blue", "white"];
        $result = array_map('strtolower', $colors);
        echo implode(" ", $result);
        ?>
    </p>
    <hr>
    <h2>Question 12</h2>
    <p>
        <?php
        $array1 = array(2, 0, 10, 12, 6);
        echo implode(" ", $array1) . "<br>";
        $array1 = array_filter($array1, function ($num) {
            return $num != 0;
        });
        echo implode(" ", $array1) . "<br>";
        echo min($array1);

        ?>
    </p>
    <hr>
</body>

</html>