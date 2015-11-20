<?php

shell_exec('php bin/composer.phar install');
echo "Installing the database..." . PHP_EOL;
shell_exec('php bin/install_db.php');
shell_exec('export DB=sqlite:../db/database.sq3');
echo "Running the Web Server on port 8000" . PHP_EOL;
echo "Open your browser at http://localhost:8000/frontend/" . PHP_EOL;
shell_exec('php -S localhost:8000 -t public -c php.ini');
