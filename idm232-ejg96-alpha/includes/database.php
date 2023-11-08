<?php
    consoleMsg("database.php file has loaded yuh yuh");

    consoleMsg($APP_CONFIG);

    // Step 1: Create a database connection
    $db_host = $APP_CONFIG['database_host'];
    $db_user = $APP_CONFIG['database_user'];
    $db_pass = $APP_CONFIG['database_pass'];
    $db_name = $APP_CONFIG['database_name'];
    $db_connection = @new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if ($db_connection->connect_error) {
        echo 'Errno: '.$mysqli->connect_errno;
        echo '<br>';
        echo 'Error: '.$mysqli->connect_error;
        exit();
    }

    consoleMsg("Success: A proper connection to MySQL was made.");
    consoleMsg("Host Information: $db_connection->host_info");
    consoleMsg("Host Information: $db_connection->protocal_version");

    // $db_connection 
?>