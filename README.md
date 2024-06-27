# お問い合わせフォーム
## 環境構築
Dockerビルド  
1. `git clone リンク`
2. docker-compose up -d --build
* MySQLはOSによって移動しない場合があるので、それぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。
  
laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envファイルを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan config:clear
6. pph artisan migrate
7. php artisan db:seed
## 使用技術
* PHP 8.0
* laravel 10.0
* MySQL 8.0
## ER図
ER図を作成して画像を添付してください。
## URL
* 開発環境：http://localhost/
* phpMyAdmin：http://localhost:8080/
