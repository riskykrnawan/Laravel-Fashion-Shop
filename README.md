## Development

```bash
git clone https://github.com/riskykrnawan/uas-laravel.git
cd uas-laravel
composer upgrade
npm install
```     

Don't forget to add .env ❗


```bash
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
npm run dev
```     