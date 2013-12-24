[agent]
progname = 'RTUpdater-agent';                 // Default 
notificationEmail = 'rebecca.x.robinson@ericsson.com';
logFile = "$progname.log";                    // Default rtupdater-agent.log
logFilePath = '/var/log/';                    // Default /var/log/
dataFilePath = '/opt/rtupdater/exports/';     // Default /opt/rtupdater/exports
serverInfoFile = '/etc/naso-info';            // Default /etc/naso-info
cfg2html_Path = '/usr/bin/';                  // Default /usr/bin/
cfg2html_logPath = '/var/log/cfg2html/';      // Default /var/log/cfg2html/
portInfoLookup = 'yes';                       // Default is no  Available in Centos/Redhat 6 and later

[database]
$db_host = 'localhost';
$db_name = 'racktables';
$db_username = 'rackuser';
$db_password = 'rackpw';

[collector]
progname = 'RTUpdater-collector';             // Default 
notificationEmail = 'rebecca.x.robinson@ericsson.com';
logFile = "$progname.log";                    // Default rtupdater-agent.log
logFilePath = '/var/log/';                    // Default /var/log/

[importer]
progname = 'RTUpdater-importer';             // Default 
notificationEmail = 'rebecca.x.robinson@ericsson.com';
logFile = "$progname.log";                    // Default rtupdater-agent.log
logFilePath = '/var/log/';                    // Default /var/log/
export_items = '';                            // Items to be exported to server after collection