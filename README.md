# saas-app

## 起動方法

docker-compose up -d --build  
docker-compose exec php bash  
composer install  
.env ファイルの作成  
cp .env.example .env  
テキストを参照
データベースが存在しているかを確認　　
php artisan key:generate  
php artisan migrate
