<?php
// $xyz = "Europe, France, Italy, Spain, UK, US,Nordic, West Europe, Belgium, Luxembourg, Netherlands, Sweden,US,Asia, Europe, Israel, North America, India,North America, , China, Hong Kong,West North Central, West South Central,UK,East South Central,Middle Atlantic, Greater China, Malaysia, Singapore, Taiwan, Middle Atlantic, Global, Australasia, Central and East Europe";
// $array = array_filter(array_map('trim', explode('', $xyz)));
// asort($array);
// $array = implode(', ', $array);
// print_r($array);

// $raining = FALSE;  
// $warm = TRUE;  
// $daytime = FALSE; 
// if ($warm==TRUE) {
//     print "Go outside";
// } else if ($daytime==TRUE) {
//     print "Go outside";
// } else if ($raining ==TRUE) {
//     print "It's raining!";
// } else {
//     print "no match";
// }
// $start = 1;
// $end = 4;
// for ($x = 0; $x <=100; $x++) {
//     for ($i = 0; $i <=4; $i++) {
//         $sum = $i;
//     }
//     echo "$sum, "."\n";
// }

$people = array( 'Mary' => 17, 'Bob' => 62, 'John' => 32, );
function list_people($people) {
    foreach( $people as $name => $age) {
        for ($i = 0; $i <=$name; $i++) {
            return "$name, "."\n";
        }
    }
    
}
// usort($people, 'a');
/* The next line is used for debugging, comment or delete it after testing */
print list_people($people);

