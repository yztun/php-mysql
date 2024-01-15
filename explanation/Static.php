<?php

function generateLineNo() {
    static $lineNo = 89;
    $lineNo ++;
    print $lineNo;
}

generateLineNo();echo '<br/>';
generateLineNo();echo '<br/>';
generateLineNo();echo '<br/>';
echo '<hr>';

function generateLineNoWithVariable() {
    $lineNo = 89;
    $lineNo ++;
    print $lineNo;
}

generateLineNoWithVariable();echo '<br/>';
generateLineNoWithVariable();echo '<br/>';
generateLineNoWithVariable();echo '<br/>';
echo '<hr>';