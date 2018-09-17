<?php

// DB Server
define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASS', '');
define ('DB', 'phpproject');

// DB Connect
try {
    $db = new PDO('mysql:host='.HOST.';dbname='.DB.';charset=utf8', USER, PASS);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// Controller Prefix & Postfix
define('PATHPREFIX', "../controllers/");
define('PATHPOSTFIX', "Controller.php");

// Path to Template Files Type (*.php)
define ('TEMPLATEPREFIX', "../views/");
define ('TEMPLATEPOSTFIX', ".php");

// Path to Template Files (Web Zone)
define ('TEMPLATEWEBPATH', "/assets/");

// Controller Prefix & Postfix Admin
define('PATHPREFIXADMIN', "../controllers/");
define('PATHPOSTFIXADMIN', "Controller.php");

// Path to Admin Template Files Type (*.php)
define ('TEMPLATEPREFIXADMIN', "../views/");
define ('TEMPLATEPOSTFIXADMIN', ".php");

// Path to Admin Template Files (Web Zone)
define ('TEMPLATEWEBPATHADMIN', "/admin/assets/");

?>
