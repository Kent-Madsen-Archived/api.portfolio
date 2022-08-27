#!/usr/bin/env bash
echo 'setup - process'

bash ./setup.os.sh
bash ./setup.mysql.sh
bash ./setup.php.sh

bash ./setup.webserver.sh
