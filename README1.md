# DB上のデータをCSV形式で出力

### 取り付けます指示
1. Run `docker-compose up -d` from the Excel_export folder
2. `host : localhost`
   `user : xs800543_kuizy`
   `password : 12345678`
   でSqlyogを利用して、テータベース連結を進行する。
3. Create a `csv_export` database for the project
4. Run `docker exec -it app /bin/sh` in terminal
5. Run `cd /var/www/html`
6. From the projects root run `cp .env.example .env`
7. Run `composer install` from the projects root folder(phpバージョン 7.4)
8. From the projects root folder run `php artisan key:generate`
9. After docker build, from the projects root folder run `php artisan migrate`
10. And then run `php artisan serve` from projects root terminal
11. Run `localhost` in your browser

### 出力ファイルパス
     public/backup/

### Laravel Auth License
