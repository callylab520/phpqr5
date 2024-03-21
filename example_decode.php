<?php
$qrCodeImage = 'output.png';
$decodedText = shell_exec("zbarimg --raw $qrCodeImage");
echo "Decoded text: $decodedText";
?>