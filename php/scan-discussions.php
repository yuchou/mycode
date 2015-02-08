<?php

function verbose(){
    echo "php :-v verbose;-c filename;-q quit.\n";
}

function fileinfo($file){
    $owner = fileowner($file);
    echo $owner;
}

for ($i = 1; $i < $argc; $i++){
    switch($argv[$i]){
    case '-v':
        verbose();
        break;
    case '-c':
        $i++;
        if(isset($argv[$i])){
            $config_file = $argv[$i];
            fileinfo($config_file);
        } else {
            die("Must specify a filename after -c");
        }
        break;
    case '-q':
        $quiet = true;
        break;
    default:
        die('Unknown argument:'.$argv[$i]);
        break;
    }
}

?>
