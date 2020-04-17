<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

/**
* Drawing Editor
*/

// Adaptee
$textView = new TextView;

// Adapter
$textShape = new TextShape($textView);

var_dump($textShape->isEmpty());

list($bottomLeft, $topRight) = $textShape->boundingBox();

echo "Bottom Left: {$bottomLeft}\n";
echo "Top Right: {$topRight}\n";





