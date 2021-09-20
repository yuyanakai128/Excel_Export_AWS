#!/bin/bash
# Run scheduler
while [ true ]
do
  php /var/www/artisan key:generate
  php /var/www/artisan csv:export
  sleep 60*5
done
