<!--==================================== Task 1 =================================-->
<?php
echo '<br>======================================== Task 1 =====================================<br>';

//-----------// Assignment 1 //-----------------------
$hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
//==================== First Solution ==========
$string = hex2bin($hexMessage);
echo "First Solution: " . $string;
//===============================================
echo '<br>';
//==================== Second Solution ==========
function hexToStr($hex){
    $hex = str_replace(' ', '', $hex);
    return hex2bin($hex);
}
echo "Second Solution: " . hexToStr($hexMessage);
echo '<br>-------------------------------------------------------------------------<br>';

//-----------// Assignment 2 //-----------------------
echo strip_tags ("PHP track, PHP is an interpreted language");
echo '<br>-------------------------------------------------------------------------<br>';

//-----------// Assignment 3 //-----------------------
$username = "  Kareem   Fouad ";
$str = str_replace(' ','',$username);
echo $str;
echo '<br>-------------------------------------------------------------------------<br>';

//-----------// Assignment 4 //-----------------------
$number = 15023198.91 ;
$format_number = number_format($number, 2, '.');
echo $format_number;
echo '<br>-------------------------------------------------------------------------<br>';
//-----------// Assignment 5 //-----------------------
$employeePositions = [
    'kareem fouad' => 'backend',
    'ahmed bahnasy' => 'frontend',
    'mohammed nabeel' => 'android',
];
foreach ($employeePositions as $key => $value)
{
    echo "$key is a $value. <br/>";
}
echo '<br>-------------------------------------------------------------------------<br>';
//-----------// Assignment 6 //-----------------------
$array = ['X' => 1, 'Y' => 2, 'Z' => 3];
print_r($array);
echo '<br>-------------------------------------------------------------------------<br>';
//-----------// Assignment 7 //-----------------------
$userData = [
    'name' => 'kareem',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
];
foreach ($userData as $key => $value)
{
    echo "$key is a $value. <br/>";
}
?>


<!--===================================== Task 2 ================================-->
<?php
echo '<br>======================================== Task 2 =====================================<br>';
//-----------// Assignment 1 //-----------------------
function getMaxString($array)
{
    $maxlen = "";
    $maxStrLen = strlen($array[0]);
    for($i = 1; $i < count($array); $i++) {
        if ($maxStrLen <= strlen($array[$i])) {
            $maxStrLen = strlen($array[$i]);
            $maxlen = $array[$i];
        }
    }
    return $maxlen;
}
$names = ['Islam', 'Ahmed', 'Mohamed', 'Abdelbasset'];
echo getMaxString($names);
echo '<br>--------------------------------------<br>';

//---------------------// Assignment 2 //-----------------------------
 $names = ['Islam', 'Ahmed', 'Mohamed', 'Abdelbasset'];

function delete_item($array, $item) {

    foreach ($array as $index => $name) {
        echo $index . " => " . $name . '<br>';
        if ($name == $item) {
            echo  "$name ===> will remove from array <br>";
            unset($array[$index]);
        }
    }
    $array = array_values($array);
    echo 'New array<br>';
    print_r($array);
}
delete_item($names, $names[2]);
echo '<br>-------------------------------------------------------------------------<br>';

//-------------------- // Assignment 3 // -------------------
$salaries = [25.7, 300.22, 5000.65, 99.5, 50, 86, 54.843, 4550.22];

function getRound($array) {
    $newArray = [];
    foreach ($array as $salary) {
        $newArray[] += round($salary);
    }
    $array = $newArray;
    return $array;
}
$salaries = getRound($salaries);
print_r($salaries);
echo '<br>-------------------------------------------------------------------------<br>';

// ------------------- // Assignment 4 // ----------------------
function getRandomPassword($length) {

    $password = '';
    for($i = 0; $i < $length; $i++) {
        $char = chr(rand(33, 126));
        $password .=  $char ;
    }
    return $password;
}
$new_password = getRandomPassword(16);
echo "New Password: $new_password";
echo '<br>-------------------------------------------------------------------------<br>';

//---------------------------// Assignment 6 //----------------------
$number = 0002020;
$num_length = mb_strlen($number);
echo  $num_length;
echo '<br>-------------------------------------------------------------------------<br>';
?>
<!--================================================================================-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problem 1,2,3,4,6,7,8</title>
</head>
<?php

$names = ['ahmed', 'mohammed', 'hasan'];

$instructors = [
       'kareem fouad' => [
       'job' => 'backend developer',
       'track' => 'php',
       ],
       'ahmed bahnasy' => [
       'job' => 'frontend developer',
       'track' => 'angular',
       ],
       'ahmed nasr' => [
       'job' => 'backend developer',
       'track' => '.net',
       ],
   ];

?>
    <body>
    <!-----------------------------// Assignment 7 //------------------------>
        <ul>
            <?php foreach($names as $name){  ?>

                <li><?php echo $name?></li>

            <?php }?>
        </ul>
    <!-----------------------------// Assignment 8 //------------------------>
        <ul>
            <?php foreach($instructors as $key => $instructor) {?>
            <li><?php echo $key?></li>
            <ul>
                <?php foreach($instructor as $info => $value){ ?>
                <li><?php echo $info . ' : ' . $value?></li>

                <?php }?>
            </ul>

            <?php } ?>
        </ul>

    </body>
</html>

