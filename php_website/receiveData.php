<?php
$file = 'temp_file';
$content = serialize($_GET);
file_put_contents($file, $content);
print("Write Successful");
?>