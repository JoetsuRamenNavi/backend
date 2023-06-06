# backend
[backend] PHP環境

### 環境構築

- PHP MYSQL Composerのインストール
  - PHPとMYSQLはざんぷでもいいよ Composerはしらべてね
- `git clone https://github.com/JoetsuRamenNavi/backend.git`　でインストール
- `cd` JRN_laravel ファイル内に移る
- `composer install`
- `.env`ファイルが無いと思うので`.env.example`をリネームで作る
- `php artisan key:generate`
- `.env`内のデーターベース周りを自分の環境に書き換え

### 実行

- `php artisan migrate`でDB作成
- `php artisan serve`でサイトの起動