<?php

// Load Page
function loadpage ($controllerName, $actionName = 'index'){
    
    if (!$actionName or $actionName != preg_match('/[^a-zA-Z-]/i', $actionName))
    { header('Location: /404.html'); exit(); }
    
    include_once PATHPREFIX . $controllerName . PATHPOSTFIX;

    $function = $actionName.'Action';
    $function();


}




?>