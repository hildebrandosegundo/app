<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Configuration for: Project URL
 * Put your URL here, for local development "127.0.0.1" or "localhost" (plus sub-folder) is fine
 */

$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';


define('URL', $protocol. $_SERVER['SERVER_NAME'].substr($_SERVER['PHP_SELF'], 0,-10));

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
define('DB_TYPE_mysql', 'mysql');
define('DB_HOST_mysql', '127.0.0.1');
define('DB_NAME_mysql', 'avaliacao');
define('DB_USER_mysql', 'root');
define('DB_PASS_mysql', 'sasuke5051');
//ged
define('DB_TYPE_oracle', 'oci');
define('DB_HOST_oracle', '//100.100.10.162/GEDTHE');
define('DB_NAME_oracle', 'THEGED');
define('DB_USER_oracle', 'selged');
define('DB_PASS_oracle', 'selged');
//ghuru
define('DB_TYPE_sqlsrv', 'sqlsrv');
define('DB_HOST_sqlsrv', '100.100.10.160,1433');
define('DB_NAME_sqlsrv', 'rh_prd');
define('DB_USER_sqlsrv', 'semec');
define('DB_PASS_sqlsrv', 'semecsemec');
