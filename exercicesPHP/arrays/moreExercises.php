<?php
     $web_development = array(
        'frontend' => [],
        'backend' => [],
     );

    $web_development['frontend'][] = 'xhtml';
    $web_development['backend'][] = 'Ruby on Rails';
    $web_development['frontend'][] = 'CSS';
    $web_development['frontend'][] = 'Flash';
    $web_development['frontend'][] = 'JavaScript';

    $replace = array(0 => 'HTML');
    print_r(array_replace($web_development['frontend'], $replace)); //https://www.w3schools.com/php/func_array_replace.asp
    array_splice($web_development['frontend'], 2, 1);//https://www.it-swarm.dev/fr/php/php-supprimer-un-element-dun-tableau/958055722/#:~:text=pour%20certaines%20t%C3%A2ches.-,Supprimer%20un%20%C3%A9l%C3%A9ment%20de%20tableau,()%20pour%20obtenir%20la%20cl%C3%A9.

    echo '<pre>';
    print_r($web_development);
    echo '</pre>';

?>