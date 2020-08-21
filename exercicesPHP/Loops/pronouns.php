<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun) {
    echo $pronoun . "<br>";
}
foreach ($pronouns as $key => $value){
    if($value == 'He/She'){
        echo $value . ' codes <BR>';
    }else{
    echo $value . ' code <br>';
    }
}

?>