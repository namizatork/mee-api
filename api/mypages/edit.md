# Mypages/edit

ユーザー情報編集

## エンドポイント

`/api/mypages/{account}/edit`

## HTTPメソッド

`DELETE`


## レスポンス

ステータスコード `200`

```json
{
    "user": {
        "user_id": 1,
        "best_language_id": 1,
        "best_framework_id": 1,
        "user_name": "ユーザー名",
        "age": 1,
        "prefecture": 1,
        "gender": 1,
        "indsutry": 1,
        "experience_years": 1,
        "profile_image": "image/test.jpg",
        "company": "会社名",
        "twitter_url": "https://test.com",
        "facebook_url": "https://test.com",
        "github_url": "https://test.com",
        "qiita_url": "https://test.com",
        "connpass_url": "https://test.com",
        "speackerdeck_url": "https://test.com",
        "portfolio_url": "https://test.com",
        "misc_url": "https://test.com"
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

## エラー

ステータスコード `401`

```json
{
    "message" : "Error message."
}
```

[戻る](../index.md)