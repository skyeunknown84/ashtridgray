<?php

$people = array( 'Mary' => 17, 'Bob' => 62, 'John' => 32, ); 
function list_people($people) {
    //code here
    foreach( $people as $a => $b) {
        echo "$a, "."\n";
    }
    // sort($people);
} 
print list_people($people);
