#!/bin/bash
set -e

# create the PID file(/run/php/php8.1-fpm.pid)
service php8-fpm start
service php8-fpm stop

echo "Starting Adminer Container"

exec php-fpm8 -F