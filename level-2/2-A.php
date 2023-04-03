<?php 

$max = 0;
for ($i = 0; $i <= 100; $i++) {
    if($i <= 100) {
        echo $i;
        echo "<br>";
        if ($i > $max) {
            $max = $i;
        }
    } else {
        echo $max;
    }
}

echo "nilai maksimum adalah: " . $max;

?>