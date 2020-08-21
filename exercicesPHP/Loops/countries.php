<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Countries</title>
    </head>
    <body>
        <form>
        <!-- Voir explications : https://www.tutorialrepublic.com/faq/how-to-populate-dropdown-list-with-array-values-in-php.php -->
            <select>
                <option selected = "selected"> Choose a country </option>
                <?php
                    $countries = array("BE" => "Belgium", "IT" => "Italy", "MX" => "Mexico", "BR" => "Brazil", "DE" => "Germany", "CL" => "Colombia", "PE" => "Peru", "PA" => "Panama", "FR" => "France", "UK" => "United Kingdom");
                    foreach ($countries as $key => $value) {
                ?>
                <option value = "<?php echo strtolower($value); ?>"><?php echo $value;
                ?></option>
                <?php
                }
                ?>
            </select>
            <input type = "submit" value = "Submit">
        </form>
    </body>
</html>