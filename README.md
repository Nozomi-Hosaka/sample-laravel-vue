#　Laravel Vue 勉強用サンプル

## セットアップ方法

### 環境設定
```bash
cp .env.example .env
cp docker-compose.yml.example docker-compose
```

```bash
cp src/.env.example src/.env
```

### ビルド
```bash
docker-compose build
```

### サーバー起動
```bash
docker-compose up -d
```

### Laravelインストール
```bash
docker-compose run --rm composer composer install
```

```bash
docker-compose exec php php artisan key:generate
```

#### Laravel 6 からvueは後付インストールになります。
```bash
docker-compose run --rm composer composer require laravel/ui
```

Bootstrap4とかも入ってる

#### Vue有効化
```bash
docker-compose exec php php artisan ui vue
```

### Nodeインストール
```bash
docker-compose run --rm node npm i
```

### マイグレーション実行
```bash
docker-compose exec php php artisan migrate
```


## 開発中コマンド

### Node
```bash
docker-compose run --rm node npm run dev
```

```bash
docker-compose run --rm node npm run watch
```

```bash
docker-compose run --rm node npm run prod
```

### クラスが読み込めないときは
```bash
docker-compose run --rm composer composer dump-autoload 
```