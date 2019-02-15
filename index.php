<?php
/**
 * Generic_Sniffs_Methods_OpeningMethodBraceBsdAllmanSniff.
 *
 * PHP version 7
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 *
 * @author Alexander Velichko <alvi@mail.ua>
 *
 * @license http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version CVS: $Id: OpeningFunctionBraceBsdAllmanSniff.php,v 1.8
 * @link    https://github.com/VelichkoAlexander/php1.git
 */

//task#1
$name = 'Alexander Velicko';
$age = '31';
echo "Меня зовут: $name <br>";
echo "Мне $age лет <br>";
echo "\"!|/\'\"" . "<br>";


//task#2
define("DRAWINGS", 80);
define("MARKERS", 23);
define("CRAYONS", 40);
define("PAINTS", constant('DRAWINGS') - constant('MARKERS') - constant('CRAYONS'));
echo "На школьной выставке " . constant('DRAWINGS') . " рисунков.
 " . constant('MARKERS') . " из них выполнены фломастерами,
  " . constant('CRAYONS') . " карандашами,
  а остальные — " . constant('PAINTS') . " красками<br>";

//task#3
$age = 80;
if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
}

//task#4
echo '<br>';
$day = 7;

switch ($day) {
case 1:
case 2:
case 3:
case 4:
case 5:
    echo "Это рабочий день";
    break;
case 6:
case 7:
    echo "Это выходной день";
    break;
default:
    echo "Неизвестный день<br>";
    break;
}

//task#5
echo '<br>';
$bmw = ['model'=>'X5','speed'=>120,'doors'=>5,'year'=>2015];
$toyota = ['model'=>'supra','speed'=>120,'doors'=>5,'year'=>2015];
$opel = ['model'=>'astra','speed'=>120,'doors'=>5,'year'=>2015];
$cars = ['bmw'=>$bmw,'toyota'=>$toyota,'opel'=>$opel];
foreach ($cars as $key => $car) {
    echo 'CAR '. $key.'<br>';
    echo $car['model'].' '.$car['speed'].' '.$car['doors'].' '.$car['year'].'<br>';

}

//task#6
echo "<table border =\"1\" style='border-collapse: collapse'>";
echo "<tr>";
echo "<td></td>";
for ($col=1; $col <= 10; $col++) {
    echo "<td>$col</td>";
}
echo "</tr>";
for ($row=1; $row <= 10; $row++) {
    echo "<tr>";
    echo "<td>$row</td>";
    for ($col=1; $col <= 10; $col++) {
        $p = $col * $row;
        if ($col % 2 === 0 && $row % 2 === 0) {
            echo "<td>($p)</td>";
        } elseif ($col % 2 !== 0 && $row % 2 !== 0) {
            echo "<td>[$p]</td>";
        } else {
            echo "<td>$p</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";