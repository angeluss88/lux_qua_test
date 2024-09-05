#!/bin/bash

until nc -z -v -w30 lux_db 3306; do
  echo "Waiting for database connection..."
  sleep 5
done

# Выполняем миграции
php artisan migrate --force

# Передаём управление основной команде
exec "$@"
