<?php
$strTask1 = ["string1", "string2", "string3"];
$numbers = [5, 2];

function task1($arrStr, $bool = false)
{
    foreach ($arrStr as $words) {
        if (!$bool) {
            echo "<p>" . $words . "</p>" . "<br>";
        } else {
            return $arrStr = implode(', ', $arrStr);
        }
    }
}

;
function task2($arrOfNumbers, $sign)
{
    $sum = $arrOfNumbers[0];
    $counter = 1;
    if ($sign === '+') {
        for ($counter; $counter < count($arrOfNumbers); $counter++) {
            $sum += $arrOfNumbers[$counter];
        }
    } elseif ($sign === '-') {
        for ($counter; $counter < count($arrOfNumbers); $counter++) {
            $sum -= $arrOfNumbers[$counter];
        }
    } elseif ($sign === '*') {
        for ($counter; $counter < count($arrOfNumbers); $counter++) {
            $sum *= $arrOfNumbers[$counter];
        }
    } elseif ($sign === '/') {
        for ($counter; $counter < count($arrOfNumbers); $counter++) {
            $sum /= $arrOfNumbers[$counter];
        }
    } else {
        return "Error";
    }
    return $sum;
}

;
function task3($sign, ...$args)
{
    $argList = func_get_args();
    $numArgs = func_num_args();
    $sum = $argList[1];
    if ($sign == '+') {
        for ($i = 2; $i < $numArgs; $i++) {
            $sum += $argList[$i];
        }
    } elseif ($sign == '-') {
        for ($i = 2; $i < $numArgs; $i++) {
            $sum -= $argList[$i];
        }
    } elseif ($sign == '*') {
        for ($i = 2; $i < $numArgs; $i++) {
            $sum *= $argList[$i];
        }
    } elseif ($sign == '/') {
        for ($i = 2; $i < $numArgs; $i++) {
            $sum /= $argList[$i];
        }
    }
    return $sum;
}

;
function task4(int $numColumns, int $numRows)
{
    echo "<table>";
    echo "<tbody>";
    for ($rows = 1; $rows <= $numColumns; $rows++) {
        echo "<tr style='text-align: center;'>";
        for ($cols = 1; $cols <= $numRows; $cols++) {
            if ($rows % 2 == 0 && $cols % 2 == 0) {
                echo "<td>" . $rows * $cols . "</td>";
            } elseif ($rows % 2 == 1 && $cols % 2 == 1) {
                echo "<td>" . $rows * $cols . "</td>";
            } else {
                echo "<td>" . $rows * $cols . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

;
function task5($func)
{
    return $func;
}

;
function task5_1($checkPalindrome)
{
    $palindrome = str_replace(" ", "", mb_strtolower($checkPalindrome));
    $palindromeArray = preg_split("//u", $palindrome, -1, PREG_SPLIT_NO_EMPTY);
    $palindromeReverse = array_reverse($palindromeArray);
    return ($palindromeArray === $palindromeReverse) ? "true" : "false";
}

;
function task6()
{
    echo date('d.m.Y h:m');
    echo "<br>";
    echo strtotime('24 February 2016');
}

;
function task7($string, $search = null, $replace = null)
{
    $string = str_replace('К', '', $string);
    $string = str_replace($search, $replace, $string);
    return $string;
}

;
function task8($checkNetwork)
{
    $patternPackets = '/packets:\d{4,}/';
    $patternSmile = '/:\)/';

    if (preg_match($patternSmile, $checkNetwork)) {
        function drawSmile()
        {
            echo "<pre>";
//            TODO - понять почему вместе с смайликом выводится в конце единица.
            echo("
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░▄▄▀▀▀▀▀▀█▄░░░░░░░░░░▄▀▀▀▀▀▀▀▄▄░░
░░█▀░░░░░░▄▄░▀▄░░░░░░▄▀░░░░░░░░░▀█░
░█░░░░░░██▀▀█░▀▄░░░░▄▀░░░░░░░░░░░░█
░█░░░░░░▀█▄▄█░░█░░░░█░░▄█▀▀█░░░░░░█
░█░░░░░░░░░░░░░█░░░░█░░██▄▄█░░░░░░█
░█▄░░░░░░░░░░░██░░░░██░░▀▀▀░░░░░░▄█
░░██▄░░░░░░▄▄██▀░░░░▀██▄▄░░░░░░▄██░
░░░▀██████████▀░░░░░░▀██████████▀░░
░░░░░▀▀▀▀▀▀▀░░░░░░░░░░░░▀▀▀▀▀▀▀░░░░
░░░█████▀▀▀█▀▀▀▀▀▀█▀▀▀▀█▀▀▀▀▀█████░
░░░█▀▀███▄▄█░░░░░░█░░░░█▄▄███▀▀██▀░
░░░▀▄▄▀▀▀▀████▄▄▄██▄▄▄██████░░░█▀░░
░░░░█░░░▄▀░░░░░▀▀█████████▀░░▄▄▀░░░
░░░█░░░▄▀░░░░▄▀▀█████▀▀░░░▄▄▀░░░░░░
░░█░░░▄▀░░░░█▀▄▄▄▄▄▄▄▄▄▄▀▀░░░░░░░░░
░░█░░░▀░░░░█░░░░░░░░░░░░░░░░░░░░░░░
░░█░░░░░░░▄▀░░░░░░░░░░░░░░░░░░░░░░░
░░░▀▀▀▀▀▀▀░░░░░░░░░░░░░░░░░░░░░░░░░");
            echo "</pre>";
        }
        return drawSmile();
    } elseif (preg_match($patternPackets, $checkNetwork)) {
        return "Сеть есть";
    }
}

;
function task9($readFile)
{
    return $file = file_get_contents($readFile);
}

;
function task10($createFile)
{
    $create = fopen($createFile, 'c');
    fwrite($create, '“Hello again!”');
}