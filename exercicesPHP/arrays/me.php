<?php
$mother = array (
    'firstname' => 'Chantal',
    'lastname' => 'Collard',
    'age' => '60 years old',
    'favorite season' => 'summer',
    'soccer' => false,
    'hobbies' => array("gardening", "learning", "reading", "biking")
);
$me = array (
    'firstname' => 'Marie',
    'lastname' => 'Pierard',
    'age' => '31 years old',
    'favorite season' => 'spring',
    'soccer' => false,
    'hobbies' => array("fitness", "learning", "reading", "movies"),
    'mother' => $mother
);


echo '<pre>';
print_r($me);
echo '</pre>';

echo count($mother['hobbies']);
echo '<br>';
echo count ($me ['hobbies']);
echo '<br>';
echo (count($mother['hobbies']) + count($me['hobbies']));

$me['hobbies'][] = 'taxidermy';
$me['lastname'] = 'Durand';
echo '<pre>';
print_r($me);
echo '</pre>';

$soulmate = array (
    'firstname' => 'Who',
    'lastname' => 'Knows',
    'age' => '34 years old',
    'favorite season' => 'spring',
    'soccer' => false,
    'hobbies' => array("fitness", "learning", "sports","travel", "movies"),
);

$possible_hobbies_via_intersection = array_intersect($soulmate['hobbies'], $me['hobbies']);;
$possible_hobbies_via_merge = array_merge($soulmate['hobbies'], $me['hobbies']);;

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

?>