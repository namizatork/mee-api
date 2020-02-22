# Mypages/destory

ユーザー情報論理削除

## エンドポイント

`/api/mypages/{account}/destory`

## HTTPメソッド

`POST`


## リクエスト

ステータスコード `200`

```json
{
    "user": {
        "user_id": 1,
        "deleted_at": "2020-01-01 00:00:00",
    }
}
```

## エラー

ステータスコード `401`

```json
{
    "message" : "Error message."
}
```

[戻る](../index.md)