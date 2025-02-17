<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>

<body>
    <h1>Leap Year</h1>
    <p>
        <?php
        $year = 2013;
        if ($year % 4 == 0) {
            if ($year % 100) {
                if ($year % 400) {
                    echo 'its a leap year';
                } else {
                    echo 'its not a leap year';
                }
            } else {
                echo 'its a leap year';
            }
        } else {
            echo 'it is not a leap year';
        }

        ?>
    </p>
    <hr>
    <h1>season check</h1>
    <p>
        <?php
        $temp = 25;
        if ($temp < 20) {
            echo 'its a winter';
        } else {
            echo 'its a summer';
        }

        ?>
    </p>
    <hr>
    <h1>sum calculator</h1>
    <p>
        <?php
        $num1 = 2;
        $num2 = 3;
        $sum = $num1 + $num2;
        if ($num1 == $num2)
            $sum = $sum * 3;

        echo $sum;

        ?>
    </p>
    <hr>
    <h1>sum check</h1>
    <p>
        <?php
        $num1 = 10;
        $num2 = 10;
        $sum = $num1 + $num2;
        if ($sum == 30)
            echo $sum;
        else
            echo "false";

        ?>
    </p>
    <hr>
    <h1>multiplucation of 3</h1>
    <p>
        <?php
        $num1 = 20;

        if ($num1 % 3 == 0)
            echo "its a multiple of 3";
        else
            echo "its not a multiple of 3";
        ?>
    </p>
    <hr>
    <h1>multiplucation of 3</h1>
    <p>
        <?php
        $num1 = 20;

        if ($num1 >= 20 && $num1 <= 50)
            echo "within the range";
        else
            echo "out of range";
        ?>
    </p>
    <hr>
    <h1>multiplucation of 3</h1>
    <p>
        <?php
        $nums = [1, 19, 9, 4];
        // $maxNumber = max($nums);
        // echo $maxNumber;
        $maxNumber = $nums[0];
        for ($i = 1; $i < 4; $i++) {
            if ($nums[$i] > $maxNumber) {
                $maxNumber = $nums[$i];
            }
        }
        echo $maxNumber;
        ?>
    </p>
    <hr>
    <h1>Electricity Bill</h1>
    <p>
        <?php
        $units  = 140;
        $price = 0;
        if ($units <= 50) {
            $price = 2.5 * $units;
        } elseif ($units > 50 && $units <= 150) {
            $price = 5 * $units;
        } elseif ($units > 150 && $units <= 250) {
            $price = 6.2 * $units;
        } else {
            $price = 7.5 * $units;
        }
        echo $price;
        ?>
    </p>
    <hr>
    <h1>Calculator</h1>
    <p>
        <?php
        $num1 = 4;
        $num2 = 5;
        $result = 0;
        $operation = '-';
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;

            case '-':
                $result = $num1 - $num2;
                break;

            case '*':
                $result = $num1 * $num2;
                break;

            case '/':
                $result = $num1 / $num2;
                break;

            default:
                $result = "not valid operator";
        }
        echo $result;
        ?>
    </p>
    <hr>
    <h1>voting</h1>
    <p>
        <?php
        $age = 16;
        if ($age >= 18) {
            echo 'eligible to vote';
        } else {
            echo 'not eligible to vote';
        }
        ?>
    </p>
    <hr>
    <h1>check number</h1>
    <p>
        <?php
        $number = 0;
        if ($number < 0) {
            echo 'negative';
        } elseif ($number > 0) {
            echo 'positive';
        } else {
            echo "zero";
        }
        ?>
    </p>
    <hr>
    <h1>check number</h1>
    <p>
        <?php
        $marks = [90, 86, 95, 63, 80, 74, 79, 82, 70];
        $sum = 0;
        $avg = 0;
        $count = count($marks);
        for ($i = 0; $i < $count; $i++) {
            $sum += $marks[$i];
        }
        $avg = $sum / $count;
        if ($avg < 60) {
            echo 'F';
        } elseif ($avg < 70) {
            echo 'D';
        } elseif ($avg < 80) {
            echo 'C';
        } elseif ($avg < 90) {
            echo 'B';
        } elseif ($avg < 100) {
            echo 'A';
        }
        ?>
    </p>
</body>

</html>