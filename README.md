# Simulador UAM

### v2.0

### Comandos importantes

-   composer install
-   npm install
-   cp .env.example .env
-   php artisan key:generate
-   php artisan jwt:secret

### Configuracion base de datos

-   CREATE DATABASE simulador;
-   Open directory cp .env.example .env
-   Open .env file in laravel directory "simuladorbiomedicabackend"
-   Set DB_CONNECTION, DB_DATABASE, DB_USERNAME, DB_PASSWORD

### Configuracion laravel passport

-   php artisan cache:clear
-   php artisan config:cache

### Actualizar base de datos

-   php artisan migrate:fresh --seed
