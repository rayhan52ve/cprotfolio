# Install System apply step by step
composer i
#
npm i
#
cp .env.example .env
#
php artisan key:generate
#
php artisan migrate
