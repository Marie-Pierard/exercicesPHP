<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        <?php
            $gender = "M";
            $hello = "Hi, how are you doing";

            $msg = ($gender == "F") ? "$hello Miss?" :"$hello Mister?";

            echo "$msg";

   
        ?>
    </body>
</html>