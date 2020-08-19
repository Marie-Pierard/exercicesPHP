<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        <?php
        if (isset($_GET['note'])){
        $note = $_GET['note'];
            if ($note < 4) {
                echo('This work is really bad. What a dumb kid!');
            }else if ($note >= 5 && $note < 9) {
                echo('This is not sufficient. More studying is required.');
            }else if ($note == 10) {
                echo('Barely enough!');
            }else if ($note >= 11 && $note < 15) {
                echo('Not bad!');
            }else if ($note >= 15 && $note < 19) {
                echo('Bravo,bravissimo!');
            }else if ($note == 19 || $note == 20) {
                echo('Too good to be true : confront the cheater!');
            }
        }   
        ?>
        <form method="get" action="conditions8.php">
            <label for="note">What grade do you give this work?</label>
            <input type="text" name="note">
            <input type="submit" name="submit" value="Message to student">
        </form>
    </body>
</html>