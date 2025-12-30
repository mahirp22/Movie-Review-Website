<?php
# defines database host
define ("DBHOST", "localhost");

# defines database name
define ("DBNAME", "reviewdatabase");

# defines database username
define ("DBUSER", "root");

# defines database password
define ("DBPASS", "");

# builds full pdo connection string with host, db name, and utf8mb4 charset
define ("DBCONNSTRING", "mysql:host=".DBHOST.";dbname=".DBNAME.";charset=utf8mb4");
?>
