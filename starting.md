`Starting Project`

```
composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve

http://127.0.0.1:8000/tire-inventory
```
