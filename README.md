# saas-app

## 起動方法

docker-compose up -d --build  
docker-compose exec php bash  
composer install  
.env ファイルの作成  
cp .env.example .env  
php artisan key:generate  
php artisan migrate
