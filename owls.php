<?php 
$owlfacts = ["There are 220 species of owls in the world", "Owls can almost turn their heads all the way around, but it's not quite a 360 turn. They can turn their necks 135 degrees in either direction, which gives them 270 degrees total movement."]
$index = array_rand($owlfacts, 1);
$random_name = $owlfacts[$index]
echo $random_name;
?>