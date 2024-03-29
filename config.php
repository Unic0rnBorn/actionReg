<?php
// ---- Main webapp configuration
$conf = new stdClass();
$conf->server_name = 'localhost:80'; // server address and port
$conf->protocol = 'http';              // http or https
$conf->app_root = '/Action';        // project folder - relative to server apps folder
//$conf->action_param = 'action';        // action parameter name
//$conf->action_script = '/app/ctrl.php'; // localisation of main action script

// ---- Helpful values generated automatically
$conf->root_path = dirname(__FILE__);
$conf->server_url = $conf->protocol.'://'.$conf->server_name;
$conf->app_url = $conf->server_url.$conf->app_root;



// ---- Database config - values required by Medoo
$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'Action';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';
$conf->db_host = 'localhost';



// ---- Database config - optional values
$conf->db_port = '3306';
//$conf->db_prefix = '';
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL ];



?>