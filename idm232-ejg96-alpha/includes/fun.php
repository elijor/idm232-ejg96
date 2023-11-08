<?php
consoleMsg("fun.php file LOADED;");

global $APP_CONFIG;

function consoleMsg($msg) {
    echo ' <script type="text/javascript">console.log("'. $msg .'");</script>';
};

?>