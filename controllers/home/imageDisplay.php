<?php  // Replace with the actual path

// Get folder items and exclude "." and ".."
$items = scandir($folderPath);
$numItems = count($items) - 2;

// Divide by 3 and handle remainder
$itemsPerDiv = floor($numItems / 3);
$remainder = $numItems % 3;

// Distribute items based on remainder
if ($remainder === 1) {
    $a = $itemsPerDiv + 1;
    $b = $itemsPerDiv;
    $c = $itemsPerDiv;
} else if ($remainder === 2) {
    $a = $itemsPerDiv + 1;
    $b = $itemsPerDiv + 1;
    $c = $itemsPerDiv;
} else {
    // No remainder, equal distribution
    $a = $itemsPerDiv;
    $b = $itemsPerDiv;
    $c = $itemsPerDiv;
}

$limitArray = array($a, $b, $c);
?> 