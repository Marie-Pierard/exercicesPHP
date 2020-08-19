<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        <?php
        if (isset($_GET['being'])){
            $gif = "https://media.giphy.com/media/l0HlSNOxJB956qwfK/giphy.gif";
            $gif = ($_GET['being'] == "cat") ? "https://media.giphy.com/media/C9x8gX02SnMIoAClXa/giphy.gif" : $gif;
            $gif = ($_GET['being'] == "unicorn") ? "https://media.giphy.com/media/l0LIYv9tJFIVHxF5u/giphy.gif" : $gif;
            echo "<img src='$gif'>";
        }   
        ?>
        <form method="get" action="unicorn.php">
            <label for="being">Are you a human, a cat or a unicorn?</label><br>
            <input type="radio" name="being" value="human">
            <label for="human">Human</label></br>
            <input type="radio" name="being" value="cat">
            <label for="cat">Cat</label></br>
            <input type="radio" name="being" value="unicorn">
            <label for="unicorn">Unicorn</label></br>
            <input type="submit" name="submit" value="Get your gif!">
        </form>
    </body>
</html>