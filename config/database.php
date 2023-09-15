<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'postgres');
define('DB_PASS', 'postgresqlpass');
define('DB_NAME', 'feedback_project');
define('DB_PORT', 5432);

// Create connection
$conn = new PDO('pgsql:host=localhost;dbname=feedback_project', 'postgres', 'postgresqlpass');
?>