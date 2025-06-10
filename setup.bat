@echo off
echo Instalando dependencias de PHP...
composer install

echo Instalando dependencias de Node...
npm install

echo Generando archivo .env...
copy .env.example .env

echo Generando clave de la app...
php artisan key:generate

echo Listo! Puedes ejecutar ahora: php artisan serve
pause
