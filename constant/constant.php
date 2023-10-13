<?php

define('DB_HOST', 'localhost');  //later will change to your local ipAddress
define('DB_NAME', 'android'); //dbname
define('DB_USER', 'root'); //dbuser
define('DB_PASSWORD', ''); //dbpassword

echo  "The local ip is = " .DB_HOST. "<br>";
echo  "The database name is =  " .DB_NAME. "<br>";
echo  "The username is = " .DB_USER. ",<br>";
echo  "and the password is = " .DB_PASSWORD. "<br>";


//use uppercase in naming your constants.

define('PI', 3.145926);
echo "<br><br>".(PI + 2);
