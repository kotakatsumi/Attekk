## 環境構築
### Dockerビルド
- `git clone <リンク>`
- `docker-compose up -d --build`
### Laravel環境構築
- `docker-compose exec php bash`
- `composer install`
- `cp .env.example .env` 、環境変数を変更
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
## 開発環境
- お問い合わせ画面 : [http://localhost/](http://localhost/)
- ユーザー登録 : [http://localhost/register](http://localhost/register)
- phpMyAdmin : [http://localhost:8080/](http://localhost:8080/)
## 使用技術(実行環境)
例）
- **PHP 8.X**　 
- **Laravel 8.X**
- **jquery 3.7.1.min.js**
- **MySQL 8.0.26**
- **nginx 1.21.1**
