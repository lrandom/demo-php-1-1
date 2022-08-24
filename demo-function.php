<?php
function _format($money){
    return number_format($money,0,'.',',').' VND';
}

echo _format(150000000);

echo _format(200000);