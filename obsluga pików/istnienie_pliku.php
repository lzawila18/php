<?php
$filename = '/path/to/foot.txt';

if(file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>