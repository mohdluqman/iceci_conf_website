<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_NAME', 'FreeSSL12');
define('DB_USERNAME', 'FreeSSL12');
define('DB_PASSWORD', '12e4qw3rA!');
define('DB_HOST', 'localhost');
define('KEY', 'u!N@AYaxF2rtW51P*,y76&#d9el(=mRw0Ib8zso4fODcj+3E?q[hG%;^npJC)vik');
                
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
                
// Check connection
if($mysqli->connect_error){
    die('ERROR: Could not connect. ' . $mysqli->connect_error);
}
define('APP_SETTINGS_PATH', '/home/aa4bnqn1daxu/SSL_gen/settings/settings.json');