<?php
require 'phpqrcode.php';

$text = 'Hello, World! 123';

$outputFile = 'output.png';

QRcode::png($text, $outputFile);

echo 'QR code generated successfully!';
?>