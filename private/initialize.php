<?php
ob_start();

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);

define("WWW_ROOT", $doc_root);

require_once('functions.php');
require_once('Database.php');
require_once('query_functions.php');

$pdo = new Database();
require_once('session.php');
require_once(PRIVATE_PATH. '/mail_activation/mail-send.php');

?>