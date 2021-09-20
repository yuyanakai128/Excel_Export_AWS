#!/bin/bash
# Run scheduler
while [ true ]
do
  php /var/www/artisan key:generate
  php /var/www/artisan schedule:run
  sleep 60*5
done
