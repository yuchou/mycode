<?php
    $fruits =array('red'=>array('strawberry','apple'),'yellow'=>array('yellow'=>array('banana')));
    foreach($fruits as $color=>$color_fruit){
        foreach($color_fruit as $fruit){
            print "$fruit is colored $color";
        }
    }
?>
