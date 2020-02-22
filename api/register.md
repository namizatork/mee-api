# Register

新規登録

## エンドポイント

`/api/register`

## HTTPメソッド

`POST`

## リクエスト

```json
{
    "user": {
        "best_language_id": 1,
        "best_framework_id": 1,
        "user_name": "ユーザー名",
        "age": 1,
        "prefecture": 1,
        "gender": 1
    },
    "user_status": {
        "1": "フリーランス",
        "2": "お仕事募集中",
        "3": "婚活中"
    },
    "programming_language": {
        "1": "PHP",
        "2": "JavaScript"  
    },
    "frame_work": {
        "1": "Laravel",
        "2": "Vue"  
    }
}
```

## レスポンス

ステータスコード `200`

```json
{
    "message": "Successfully Registted",
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