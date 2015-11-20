<?php
echo "Installing the dependencies..." . PHP_EOL;
shell_exec('php bin/composer.phar install');
shell_exec('cd public/frontend && bower install && cd -');

echo "Installing the database..." . PHP_EOL;
shell_exec('php bin/install_db.php');
putenv('DB=sqlite:../db/database.sq3');

echo "Running the Web Server on port 8000" . PHP_EOL;
echo "Open your browser at http://localhost:8000/frontend/" . PHP_EOL;
echo "Press Ctrl+C to stop.";
shell_exec('php -S localhost:8000 -t public -c php.ini');
