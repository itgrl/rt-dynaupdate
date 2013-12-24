<?php

    function loadConfig()
    {
        if (!file_exists($ROOT_DIR . '/inc/config')
        {
            // Validate configuration file is present.  If not log error.
            error_log("RTUpdater config File missing.\n", 3, "/var/log/messages");
            error_log("RTUpdater config File missing.\n", 3, "/var/log/rtupdater.log");
            return die("RTUpdater config File missing.\n")
        }
        else
        {
            //Set default configuration parameters if they are not already set.
            $p_ini = parse_ini_file($ROOT_DIR . '/inc/config', true);

            foreach ($p_ini as $section => $section_values)
            {
                select ($install_type)
                {
                    case agent:
                        if ($section == 'agent')
                        {
                            if (is_array($section))
                            {
                                foreach ($section_values as $item => $value)
                                {
                                    echo "Setting item $item to value $value";
                                    $item = $value;
                                }
                            }
                            else
                            {
                                logme('Agent function not configured, using defaults.');
                            }
                        }
                        break;
                    case collector:
                        if ($section == 'collector')
                        {
                            if (is_array($section))
                            {
                                foreach ($section_values as $item => $value)
                                {
                                    echo "Setting item $item to value $value";
                                    $item = $value;
                                }
                            }
                            else
                            {
                                logme('Collector function not configured, using defaults.');
                            }
                        }
                        break;
                    case importer:
                        if ($section == 'importer')
                        {
                            if (is_array($section))
                            {
                                foreach ($section_values as $item => $value)
                                {
                                    echo "Setting item $item to value $value";
                                    $item = $value;
                                }
                            }
                            else
                            {
                                logme('Importer function not configured, using defaults.');
                            }
                        }
                        elseif ($section == 'database')
                        {
                            if (is_array($section))
                            {
                                foreach ($section_values as $item => $value)
                                {
                                    echo "Setting item $item to value $value";
                                    $item = $value;
                                }
                            }
                            else
                            {
                                logme('Database not configured, using defaults.');
                            }
                        }
                        break;
                }
            }
            
        }
    }

    function checkPath()
    {
            // Make sure the trailing / is present if path is set.
            if (isset($logFilePath))
            if (isset($dataFilePath))
            if (isset($cfg2html_Path))
            if (isset($cfg2html_logPath))
    }
    
    function pathClean($path)
    {
        $mypath = rtrim($path);
        
    }

    function setDefaults()
    {
            if (!isset($notificationEmail)) {$notificationEmail='PDLNASOHPL@ex1.eamcs.ericsson.se';}
            if (!isset($logFile)) {$logFile='rtupdater.log';}
            if (!isset($logFilePath)) {$logFilePath='/var/log/';}             
            if (!isset($dataFilePath)) {$dataFilePath='/opt/rtupdater/exports/';}
            if (!isset($serverInfoFile)) {$serverInfoFile='/etc/naso-info';}
            if (!isset($cfg2html_Path)) {$cfg2html_Path='/usr/bin/';}
            if (!isset($cfg2html_logPath)) {$cfg2html_logPath='/var/log/cfg2html/';}
            if (!isset($portInfoLookup)) {$portInfoLookup='no';}
    }
    
    function logme( $logentry = 'no data passed', $type = 'log' )
    {
        switch ($type)
        {
            case log:
                error_log("$progname config File missing.\n", 3, "logFilePath$logFile");
                break;
            case alert:
                
                break;
            default:
                
                break;
        }
    }
    
    function loadserverinfo()
    {
        
    }
?>