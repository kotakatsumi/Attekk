# Attekk
ノートPCで見るとページネイションが被るのでデスクトップで見てほしいです。
AWSの実装ができてません。
メール認証ですが、環境構築とmailhogへのアクセスができますが、認証機能ができていません。
db:seedでランダムで時間を取得して六人分のデータがシーディングできるようにしたかったですが、普通にできませんでした。

#　作成した目的
模擬案件のため

#　アプリケーションurl
http://localhost          Atte
http://localhost:8080/    phpmyadmin
http://localhost:8025      mailhog

#　機能一覧
ユーザー登録
ログイン
勤怠管理機能
 勤務開始
 勤務終了
 休憩開始
 休憩終了
ユーザー別勤怠
日付別勤怠

# 使用技術
laravel8.83.27
php:7.4.9-fpm
image: nginx:1.21.1
mysql:8.0.26

# テーブル設計

# ER図

# 環境構築
.env.exampleファイルのmysqlの記述を下記のように変更

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

.env.exampleを.envに名前変更
docker-compose build
docker-compose up -d
docker-compose exec php bash
composer install
php artisan key:generate
php artisan migrate
php artisan cache:clear
