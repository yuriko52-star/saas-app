# saas-app

## 起動方法

docker-compose up -d --build  
docker-compose exec php bash  
composer install  
.env ファイルの作成  
cp .env.example .env  
php artisan key:generate  
php artisan migrate
composer require laravel/breeze --dev
php artisan breeze:install
npm install(src内で)  
npm run build
