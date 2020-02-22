# Login

ログイン

## エンドポイント

`/api/login`

## HTTPメソッド

`POST`

## リクエスト

```json
{
    "email" : "test@test.com",
    "password" : "12345678"
}
```

## レスポンス

ステータスコード `200`

```json
{
    "access_token": "eyJ0eXAiOiJKV2QiLC2hbGciOiJIUzI1NiJ...",
    "token_type": "bearer",
    "expires_in": 3600
}
```

## エラー

ステータスコード `401`

```json
{
    "message" : "Error message."
}
```

[戻る](index.md)