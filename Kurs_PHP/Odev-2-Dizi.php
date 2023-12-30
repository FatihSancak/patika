<pre>
<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function getIndexedElement($index, $array) {
    return $array[$index];
}

function planetClear($arr, $count) {
    $claarArray = array_filter($arr);

    $randomItems = array_rand($claarArray, $count);

    $newArray = array_map('getIndexedElement', $randomItems, array_fill(0, count($randomItems), $claarArray));

    return $newArray;
}

print_r(planetClear($planets, 2));
print_r(planetClear($planets, 3));
print_r(planetClear($planets, 2));
print_r(planetClear($planets, 4));
print_r(planetClear($planets, 5));



?>
</pre>
