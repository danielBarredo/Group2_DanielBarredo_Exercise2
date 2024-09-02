<?php
$file = 'votes.txt';
$votes = file_exists($file) ? unserialize(file_get_contents($file)) : array('Rosary Bea' => 0, 'Be-ann' => 0, 'Daniel' => 0, 'Ciara May' => 0, 'Jose Gabriel' => 0);

foreach ($votes as $name => $count) {
    echo "<p>$name: $count votes</p>";
}
?>

