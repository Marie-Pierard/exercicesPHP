<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Excuse form</title>
        <link rel="stylesheet" href="./style.css"></style>
    </head>
    <body>
       <?php
            if (isset($_GET['nameChild'], $_GET['nameTeacher'], $_GET['gender'], $_GET['reason'])){
                $gender = $_GET['gender'];
                $nameChild = $_GET['nameChild'];
                $nameTeacher = $_GET['nameTeacher'];
                $reason = $_GET['reason'];
                $pronoun = ($_GET['gender'] == 'girl') ? 'she' : 'he';
                $possessive = ($_GET['gender'] == 'girl') ? 'her' : 'his';
                if ($reason == 'illness') {
                    echo "Dear $nameTeacher, $nameChild is sick with Covid and won't be coming to school today.";
                }else if ($reason == 'death') {
                    echo "Dear $nameTeacher, $nameChild won't be coming to school today because $pronoun just lost $possessive dear pet.";
                }else if ($reason == 'extraCurricularActivity') {
                    echo "Dear $nameTeacher, $nameChild won't be coming to school today because $pronoun has to babysit $possessive little sister.";
                }else if($reason == 'whatever') {
                    echo "Dear $nameTeacher, $nameChild won't be coming to school today because $pronoun is stuck in a jumanji game.";
                }else {
                    echo "My kid just doesn't want to go to school";
                } 
            }
        ?>
        <form method="get" action="excuse.php">
            <label for="nameChild" id="nameChild">What is the name of your child?</label>
            <input type="text" name="nameChild"><br>
            <label for="nameTeacher" id="nameTeacher">What is the name of their teacher?</label>
            <input type="text" name="nameTeacher"><br>
            <label for="genderChild">Gender of the child :</label>
            <input type="radio" name="gender" value="boy">
            <label for="boy">Boy</label>
            <input type="radio" name="gender" value="girl">
            <label for="girl">Girl</label></br>
            <input type="radio" name="reason" value="illness">
            <label for="illness">Illness</label><br>
            <input type="radio" name="reason" value="death">
            <label for="death">Death of pet</label><br>
            <input type="radio" name="reason" value="extraCurricularActivity">
            <label for="extraCurricularActivity">extracurricular activity</label><br>
            <input type="radio" name="reason" value="whatever">
            <label for="whatever">Jumanji game</label><br>
            <div id="button">
                <input type="submit" name="submit" value="Generate excuse form">
            </div>
        </form>
    </body>
</html>