# DB上のデータをCSV形式で出力

### Dockerビルド
1. プロジェクトのルートフォルダで、`docker-compose up -d`を実行する。
2. `host : localhost`
   `user : xs800543_kuizy`
   `password : 12345678`
   でSqlyogを利用して、テータベース連結を進行する。
3. プロジェクト用の`csv_export`データベースを作成します。
4. ターミナルで `docker exec -it app /bin/sh` を実行する
5. `cd /var/www/html`を実行する
6. `php artisan key:generate` を実行する
7. `php artisan migrate`を実行します。
8. 賃貸データを出力するために `php artisan rent:data`を実行します。
9. 売買データを出力するために `php artisan sales:data`を実行します。


### 出力ファイルパス
      public/backup/

### Laravel Auth License
