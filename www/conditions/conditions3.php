<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       <?php
          if (isset($_GET['age'])){
            if ($_GET['age'] < 12) {
            echo "Hello kiddo!";
            }else if ($_GET['age'] >= 12 && $_GET['age'] < 18){
            echo "Hello teenager!";
            }else if ($_GET['age'] >= 18 && $_GET['age'] < 115){
            echo "Hello adult!";
            }else if ($_GET['age'] >= 115){
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
            }else {
            echo 'Gimme your age!';
            }
          }           
        ?>
        <form method="get" action="conditions3.php">
            <label for="age">Your age:</label>
            <input type="text" name="age">
            <input type="submit" name="submit" value="Greet me now">
        </form>
    </body>
</html>