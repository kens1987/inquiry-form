##  お問い合わせフォーム

###  Docker
  git clone  
  docker-compose up -d --build
###  laravel環境構築
  docker-compose exec php bash  
  composer install  
  .envファイルは、.env.exampleをコピーし作成  
  php artisan make:key generate  
  php artisan migrate  
  （マイグレーション：user、categories、contacts）  
  php artisan db:seed  
  （シーダー：categories）（ファクトリ：contacts）  
  


### 使用技術

### ER図

### URL
  お問い合わせフォーム:http://localhost/  
  php MyAdmin:http://localhost:8080/
