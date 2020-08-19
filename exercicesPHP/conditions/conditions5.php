<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       <?php
            if (isset($_GET['age']) && isset($_GET['gender']) &&isset($_GET['language'])){
                $gender = $_GET['gender'];
                $english = $_GET['language'];
                if ($_GET['age'] < 12) {
                    if ($english == 'yes') {
                        if ($gender == 'man') {
                            echo 'Hello Mr kiddo!';
                        }else if ($gender == 'woman') {
                            echo 'Hello Miss kiddo!';
                        } 
                    }else if ($english == 'no') {
                        if ($gender == 'man') {
                            echo 'Aloha boy!';
                        }else if ($gender == 'woman') {
                            echo 'Aloha girl!';
                        } 
                    }
                }else if ($_GET['age'] >= 12 && $_GET['age'] < 18){
                    if ($english == 'yes') {
                        if ($gender == 'man') {
                            echo 'Hello Mr teenager!';
                        }else if ($gender == 'woman') {
                            echo 'Hello Miss teenager!';
                        }
                    }else if ($english == 'no') {
                        if ($gender == 'man') {
                            echo 'Aloha teenage boy!';
                        }else if ($gender == 'woman') {
                            echo 'Aloha teenage girl!';
                        } 
                    }
                }else if ($_GET['age'] >= 18 && $_GET['age'] < 115){
                    if ($english == 'yes') {
                        if ($gender == 'man') {
                            echo 'Hello Mr adult!';
                        }else if ($gender == 'woman') {
                            echo 'Hello Miss adult!';
                        }
                    }else if ($english == 'no') {
                        if ($gender == 'man') {
                            echo 'Aloha man!';
                        }else if ($gender == 'woman') {
                            echo 'Aloha woman!';
                        } 
                    }                
                }else if ($_GET['age'] >= 115){
                    if ($english == 'yes') {
                        if ($gender == 'man') {
                            echo 'Hello Mr robot!';
                        }else if ($gender == 'woman') {
                            echo 'Hello Miss robot!';
                        }
                    }else if($english == 'no') {
                        if ($gender == 'man') {
                            echo 'Aloha robot man!';
                        }else if ($gender == 'woman') {
                            echo 'Aloha robot woman!';
                        } 
                    }                
                }
            }           
        ?>
        <form method="get" action="conditions5.php">
            <label for="age">Your age:</label>
            <input type="text" name="age">
            <input type="radio" name="gender" value="man">
            <label for="man">man</label>
            <input type="radio" name="gender" value="woman">
            <label for="woman">woman</label></br>
            <label for="language">Do you speak English?</label>
            <input type="radio" name="language" value="yes">
            <label for="language">Yes</label>
            <input type="radio" name="language" value="no">
            <label for="language">No</label></br>
            <input type="submit" name="submit" value="Greet me now">
        </form>
    </body>
</html>