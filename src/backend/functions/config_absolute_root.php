<?php
#region HTTPS Redirection
$_ACTUAL_DOMAIN = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$_IS_PRODUCTION = (str_contains($_ACTUAL_DOMAIN, $_ENV['HTTP_PATH_PRODUCTION'])) ? true : false;
$_IS_HTTPS = (isset($_SERVER['HTTPS'])) ? 'true' : 'false';
if (!$_IS_PRODUCTION) $_ENV['HTTP_PATH'] = 'http://' . $_ENV['HTTP_PATH_LOCAL'];
else $_ENV['HTTP_PATH'] = (($_ENV['PROTOCOL_HTTPS_PRODUCTION'] == 'true') ? 'https' : 'http') . '://' . $_ENV['HTTP_PATH_PRODUCTION'];
$_ENV['STATIC_PATH'] = $_ENV['HTTP_PATH'] . $_ENV['STATIC_PATH'];
#endregion