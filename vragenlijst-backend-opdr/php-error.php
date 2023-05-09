<?php

if (getenv('APP_ENV') !== 'development') {
  ini_set('display_errors', 0);
}

ini_set('log_errors', 1);
ini_set('error_log', '/path/to/application_errors.log');

error_log('Er is een fout opgetreden!');

?>
