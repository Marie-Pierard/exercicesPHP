<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       <?php
          if (isset($_GET['age']) && isset($_GET['gender'])){
            $gender = $_GET['gender'];
            if ($_GET['age'] < 12) {
                if ($gender == 'man') {
                    echo 'Hello Mr kiddo!';
                }else if ($gender == 'woman') {
                    echo 'Hello Miss kiddo!';
                }  
            }else if ($_GET['age'] >= 12 && $_GET['age'] < 18){
                if ($gender == 'man') {
                    echo 'Hello Mr teenager!';
                }else if ($gender == 'woman') {
                    echo 'Hello Miss teenager!';
                }
            }else if ($_GET['age'] >= 18 && $_GET['age'] < 115){
                if ($gender == 'man') {
                    echo 'Hello Mr adult!';
                }else if ($gender == 'woman') {
                    echo 'Hello Miss adult!';
                }
            }else if ($_GET['age'] >= 115){
                if ($gender == 'man') {
                    echo 'Hello Mr robot!';
                }else if ($gender == 'woman') {
                    echo 'Hello Miss robot!';
                }
            }else {
            echo 'Gimme your age!';
            }
          }           
        ?>
        <form method="get" action="conditions4.php">
            <label for="age">Your age:</label>
            <input type="text" name="age">
            <input type="radio" name="gender" value="man">
            <label for="man">man</label>
            <input type="radio" name="gender" value="woman">
            <label for="woman">woman</label></br>
            <input type="submit" name="submit" value="Greet me now">
        </form>
    </body>
</html>