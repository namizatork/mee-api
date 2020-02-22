# Logout

ログアウト

## エンドポイント

`/api/logout`

## HTTPメソッド

`POST`

## リクエスト

## レスポンス

ステータスコード `302`

```json
{
    "message": "Successfully logged out",
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