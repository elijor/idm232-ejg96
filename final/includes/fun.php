<?php

global $APP_CONFIG;

function consoleMsg($msg) {
    echo ' <script type="text/javascript">console.log("'. $msg .'");</script>';
};

consoleMsg("fun.php file LOADED;");

function echoSearchValue() {
    if (isset($_POST['search'])) {
        echo $_POST['search'];
    }
};

// function keepFilterOn() {
        
//     if (isset($_POST['chicken']) && $_POST['chicken'] == 'true') {
//         $_POST['chicken'] = 'true'
//     }
// };
?>