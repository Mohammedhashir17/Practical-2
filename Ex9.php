<?php
// Bead Sort Function
function beadSort($array) {
    // Find the maximum element to determine the number of rows needed
    $max = max($array);
    $beads = [];

    // Initialize the bead structure with zeros
    foreach ($array as $num) {
        for ($i = 0; $i < $num; $i++) {
            $beads[$i] = isset($beads[$i]) ? $beads[$i] + 1 : 1;
        }
    }

    $sortedArray = [];

    // Collect sorted values by "falling" beads
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $count = 0;
        for ($j = 0; $j < $max; $j++) {
            if (isset($beads[$j]) && $beads[$j] > 0) {
                $count++;
                $beads[$j]--;
            }
        }
        $sortedArray[$i] = $count;
    }

    return $sortedArray;
}

// Example usage
$array = [5, 3, 1, 7, 4];
$sortedArray = beadSort($array);

echo "Original array: ";
print_r($array);

echo "Sorted array: ";
print_r($sortedArray);
?>
