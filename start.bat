@echo off
echo Pokretanje laravel projekta

:: instaliranje paketa
call composer install
call npm install
call copy .env.example .env

:: podesavanje baze
call php artisan migrate
call php artisan db:seed

:: podesavanje skladista i generisanje kljuca
call php artisan storage:link
call php artisan key:generate

:: pokretanje projekta
call npm run build
php artisan serve

pause