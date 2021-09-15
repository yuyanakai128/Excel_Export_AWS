# DB上のデータをCSV形式で出力

### Dockerビルド
1. プロジェクトのルートフォルダで、`docker-compose up -d`を実行する。
2. `host : localhost`
   `user : xs800543_kuizy`
   `password : 12345678`
   でSqlyogを利用して、テータベース連結を進行する。
3. Create a `csv_export` database for the project
4. Run `docker exec -it app /bin/sh` in terminal
5. Run `cd /var/www/html`
6. From the projects root folder run `php artisan key:generate`
7. After docker build, from the projects root folder run `php artisan migrate`
8. プロジェクトのルート端末で `php artisan schedule:test`を実行します。
9. このようなコマンドが表示されます。
     ```
     Which command would you like to run?:
     [0] "C:\xampp\php\php.exe" "artisan" rent:data
     [1] "C:\xampp\php\php.exe" "artisan" sales:data
     ```
10. ここで`rent：data`は`賃貸`、`sales：data`は`売買`
11. 出力形式を確認して`0`または`1`を入力し、Enter件を押します。
12. 二つの項目を出力するには、次のコマンドを入力してください。
     ```
     php artisan schedule:work
     ```

### 出力ファイルパス
      public/backup/

### Laravel Auth License
