<?php

/*
 * Echo back http information for debugging
 * 
 * @author Mike Duncan (mduncan@soliantconsulting.com)
 * @copyright 2018-03-30
 * 
 */

echo "Request Method: ";
echo $_SERVER['REQUEST_METHOD'] . "\n";

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
    if ($name == "Content-Type") {
        $content_type = $value;
    }
}

$body_dsp = file_get_contents("php://input");

if ($body_dsp != '' && $body_dsp != NULL) {

    echo "\nBody:";
    echo "\n----------------------------------------------------\n";

    if ($content_type == "application/json") {
        echo nl2br(str_replace(' ', '&nbsp;', (json_encode(json_decode($body_dsp, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)))));
    } else {
        echo $body_dsp;
    }
    echo "\n----------------------------------------------------\n";
} else {

    if (count($_REQUEST) > 0) {
        echo "\nREQUEST\n";
        print_r($_REQUEST);
    }

}

if (count($_FILES) > 0) {
    echo "\nFILES\n";
    print_r($_FILES);
}

#eof
