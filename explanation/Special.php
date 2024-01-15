<?php

$specialChar = '<<< Start & End >>>';

echo 'withSpecialChar ' . htmlspecialchars($specialChar). '<br/>';
echo 'withOutSpecialChar ' . $specialChar;