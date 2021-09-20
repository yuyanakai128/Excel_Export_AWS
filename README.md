# DB上のデータをCSV形式で出力
### Localで実行
php artisan key:generate
php artisan csv:export

### Local Dockerビルド
1. プロジェクトのルートフォルダで、`docker build -t excel_export_aws .`を実行する。
2. `Xampp Mysql`実行する
2. envファイルで
   `DB_HOST`(ローカルの場合は、hostは `host.docker.internal`です。)
   `DB_PORT`
   `DB_DATABASE`
   `DB_USERNAME`
   設定する。
3. プロジェクト用の`csv_export`データベースを作成します。
4. `docker run -t --env-file=rent.env.txt --name excel_export_aws -i excel_export_aws`を実行する
5. `docker run -t --env-file=sales.env.txt --name excel_export_aws -i excel_export_aws`を実行する

### ECS Dockerビルド
1. envファイルで
   `DB_HOST`
   `DB_PORT`
   `DB_DATABASE`
   `DB_USERNAME`
   設定する。
2. Elastic ContainerServiceリポジトリを作成する
3. Dockerイメージをリポジトリにアップロードする
`aws ecr get-login-password --region us-east-1 | docker login --username AWS --password-stdin ***********.dkr.ecr.us-east-1.amazonaws.com`
`docker build -t excel_export_aws .`
`docker tag excel_export_aws:latest ***********.dkr.ecr.us-east-1.amazonaws.com/excel_export_aws:latest`
`docker push ***********.dkr.ecr.us-east-1.amazonaws.com/excel_export_aws:latest`
4. ECSクラスターの作成
5. Elastic File Systemの作成
6. タスク定義の作成(EFS volumeの作成)
7. 作成したタスクをデプロイします.
8. aws ecs run-task \
   --cluster "<cluster>" \
   --launch-type FARGATE \
   --task-definition "<task definition>" で実行


### 出力ファイルパス
      public/backup/

### Laravel Auth License
