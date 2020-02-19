# Mee

## 環境

- PHP7.3
- MySQL5.7
- Laravel5.8

---

## 環境構築

1. docker-compose.ymlの各ポートを環境に合わせる
2. `docker-compose build` を実行
3. `docker-compose up -d` を実行
4. `docker exec -it mee-api_app_ bash` でコンテナ内に入る
5. `composer -v` でcomposerがインストールされているか確認
6. larvelディレクトリに移動して`composer install`でパッケージをインストール
7. .env.exampleをコピーして新しく.envを作成
8. `php artisan key:generate`を実行
9. ブラウザ表示確認(http://localhost:9100/)


## フロントエンド環境

[mee-web](https://github.com/namizatork/mee-web)

---

## 説明
• エンジニアに特化したプロフィール共有サイト   
• フリー入力ではなく、ある程度絞った項目の登録を重視する。（言語、FW、実務経験年数、趣味程度に触っている年数etc）

---

## 機能

### ログイン
- SNSログイン
- Authログイン（未確定）

### プロフィール
- ユーザー名
- メールアドレス
- パスワード
- 経験年数
- 企業
- 都道府県
- 性別（任意）
- 年齢
- 言語
- フレームワーク
- ステータス
- アイコン
- フリー入力 
- TwitterURL
- facebookURL
- GithubURL
- QiitaURL
- connpassURL
- speakerdeckURL
- ポートフォリオURL

### 検索
- 言語やFWのスキルで検索
- 経験年数で検索
- ステータスで検索（未確定）
- 性別で検索

### 一覧
- 検索と一致するユーザー情報一覧表示

### 詳細
- ユーザー詳細表示

---