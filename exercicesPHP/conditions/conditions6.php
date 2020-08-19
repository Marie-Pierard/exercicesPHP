<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       <?php
            if (isset($_GET['age']) && isset($_GET['gender']) &&isset($_GET['name'])){
                $age = $_GET['age'];
                $gender = $_GET['gender'];
                $name = $_GET['name'];
                if($gender == 'woman') {
                    if($age >= 21 && $age <= 40) {
                        echo "Welcome to the team!";
                    }else {
                        echo "Sorry, you don't match the critera :(";
                    }        
                }else {
                    echo "Sorry, you don't match the critera :(";
                }   
            }
        ?>
        <form method="get" action="conditions6.php">
            <label for="age">How old are you?</label>
            <input type="text" name="age">
            <label for="name">What's your name?</label>
            <input type="text" name="name">
            <input type="radio" name="gender" value="man">
            <label for="man">man</label>
            <input type="radio" name="gender" value="woman">
            <label for="woman">woman</label></br>
            <input type="submit" name="submit" value="Greet me now">
        </form>
    </body>
</html>