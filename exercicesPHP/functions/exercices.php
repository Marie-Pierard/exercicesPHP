<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 1
        function capitalizeFirstLetter($string) {
            echo ucfirst($string);
        }
        $test = 'emile';
        capitalizeFirstLetter($test);
        echo "<br>";

        // 2
        function currentYear() {
            echo (date('Y'));
        }
        currentYear();
        echo('<br>');

        // 3
        date_default_timezone_set("Europe/Brussels"); //https://www.w3schools.com/php/func_date_default_timezone_set.asp
        function currentDate() {
            echo ('Today is the ' . date('d') . '/' . date('m') . '/' . date('y') . '. It\'s ' . date('H:i') . ' and ' . date('s') . ' seconds.');
        }
        currentDate();
        echo('<br>');

        // 4
        function sum($numberOne, $numberTwo) {
            echo($numberOne + $numberTwo);
        }
        sum(12, 10);
        echo('<br>');
    
        // 5
        function sumCheckIfNum($numberOne, $numberTwo) {
            if (is_int($numberOne) && is_int($numberTwo)) {//https://www.w3schools.com/php/func_var_is_int.asp
                echo($numberOne + $numberTwo);
                echo('<br>');
            } else {
                echo('Error: argument is not a number');
                echo('<br>');
            }
        }
        sumCheckIfNum('x', 10);
        sumCheckIfNum(5, 4);
        
        // 6 inspiré https://gist.github.com/duncanmudulo/624e1d5d976b4d4865c1c3a4dc3eff86
        function makeAcronym($string) {
            $string = ucwords($string);
            $words = explode(" ", $string);
            foreach($words as $word) {
                $acronym = $word[0];
                echo $acronym;
            }
        }
        makeAcronym("in code we trust");
        echo('<br>');

        //7
        function replaceAE($word) {
            $search = 'ae';
            $replace = 'æ';
            $result = str_replace($search , $replace , $word); //https://www.php.net/manual/fr/function.str-replace.php
            echo($result);
            echo('<br>');
        }
        replaceAE("caecotrophie");
        replaceAE("chaenichthys");
        replaceAE("microsphaera");
        replaceAE("sphaerotheca");
    
        // 8
        function replaceæ($word) {
            $search = 'æ';
            $replace = 'ae';
            $result = str_replace($search , $replace , $word);
            echo($result);
            echo('<br>');
        }
        replaceæ("cæcotrophie");
        replaceæ("chænichthys");
        replaceæ("microsphæra");
        replaceæ("sphærotheca");
        
        // 9
        function createDivError($cssClass, $errorMessage) {
            echo('<div class="' . $cssClass . '">Error: ' . $errorMessage . '.</div>');
            echo('<br>');
        }
        createDivError("Error:", "Incorrect email address");
    
        // 10 - Pas compris
    
        // 11 - encore à faire

        //12
        function decapitalize($word) {
            echo(strtolower($word));//https://www.w3schools.com/php/func_string_strtolower.asp
        }
        decapitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");
        echo('<br>');
         
        //13
        function calculate_cone_volume($radius, $height) {
            $coneVolume = $radius * $radius * 3.14 * $height * (1/3);
            echo('The volume of a cone which radius is ' . $radius . ' and height is ' . $height . ' = ' . $coneVolume . ' cm<sup>3</sup><br />');
        }
        calculate_Cone_Volume(5, 2);
        echo('<br>');
        calculate_Cone_Volume(3, 4);
        echo('<br>');


    ?>
</body>
</html>