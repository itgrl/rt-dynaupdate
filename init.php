<?php
    $install_type = 'agent';
    define('ROOT_DIR', dirname(__FILE__));
    require($ROOT_DIR . '/lib/functions.php');    
    // Initialize application;
    loadconfig();
    loadserverinfo();
    loadinterfaces();
    
    
?>