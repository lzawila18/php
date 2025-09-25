<?php
function add_some_extra(&$string) {
    $string .= 'and something extra.';
}
$str = 'To jest string, ';
add_some_extra($str);
echo $str; // Outputs: 'To jest string, and something extra.'
?>