<?php
// While loop
$x = 10;
while ($x >= 5) {
    echo "Nomor: $x<br>";
    $x--;
}

// Do while loop
$x = 1; 
do {
    echo "Nomor: $x <br>";
    $x++;
} while ($x <= 5);

// Foreach loop
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}

// For loop
for ($x = 0; $x <= 10; $x++) {
    echo "Nomor: $x<br>";
}

// For loop with break
for ($x = 0; $x <= 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor : $x <br>";
}
?>
