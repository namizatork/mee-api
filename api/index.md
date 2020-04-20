# API

API一覧画面

# 一覧テーブル

| No. | End point                                      | Http method | page            | function             |
|-----|------------------------------------------------|-------------|-----------------|----------------------|
| 1   | [login](login.md)                              | POST        | ユーザーログイン   | JWT認証ログイン        |
| 2   | [logout](logout.md)                            | POST        | ログイン後        | JWT認証ログアト        |
| 3   | [register](register.md)                        | POST        | 新規登録ページ     | JWT認証新規登録        |
| 4   | [mypages/{account}/show](mypages/show.md)      | GET         | マイページ        | JWT認証ログイン        |
| 5   | [mypages/{account}/edit](mypages/edit.md)      | GET         | マイページ編集     | マイページ情報変更画面  |
| 6   | [mypages/{account}update](mypages/update.md)   | PUT         | マイページ編集処理  | マイページ情報変更処理  |
| 7   | [mypages/{account}destory](mypages/destory.md) | DELETE      | ユーザー退会処理    | ユーザー退会処理       |
| 8   | [user_lists/index](user_lists/index.md)        | GET         | ユーザー一覧ページ  | ユーザー一覧           |
| 9   | [user_lists/{account}show](user_lists/show.md) | GET         | ユーザー詳細ページ  | ユーザー詳細           |

