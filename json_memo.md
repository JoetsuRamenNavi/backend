# URLとJSON

## http://127.0.0.1:8000/api/users

- users全件取得

```bash
[
    {
        "id": 1,
        "name": "aaa",
        "password": "password",
        "age": 10,
        "favorite_store": 1
    },
    {
        "id": 2,
        "name": "bbb",
        "password": "password2",
        "age": 20,
        "favorite_store": 2
    },
    {
        "id": 3,
        "name": "ccc",
        "password": "password3",
        "age": 30,
        "favorite_store": 3
    }
]
```

## http://127.0.0.1:8000/api/stores

- stores全件取得

```bash
[
    {
        "store_id": 1,
        "store_name": "ラーメン1",
        "description": "おいしいよ",
        "soup": "koi",
        "men": "huto",
        "comment": "本日営業してます",
        "star_up": 3,
        "ranking": 10,
        "id": 5
    },
    {
        "store_id": 2,
        "store_name": "ラーメン2",
        "description": "おいしいよ",
        "soup": "usui",
        "men": "hoso",
        "comment": "本日営業してます",
        "star_up": 3,
        "ranking": 10,
        "id": 6
    }
]
```

## http://127.0.0.1:8000/api/articles

- articles全件取得

```bash
[
    {
        "id": 1,
        "title": "食べてきました",
        "date": "2023/06/01",
        "post": "美味しかったです",
        "store_id": 1
    },
    {
        "id": 2,
        "title": "食べてきました",
        "date": "2023/06/01",
        "post": "美味しかったです",
        "store_id": 2
    }
]
```

## http://127.0.0.1:8000/api/articles/2/

- articlesの指定したストアidのみ全件取得

```bash
[
    {
        "id": 7,
        "title": "また食べてきました",
        "date": "2023/06/05",
        "post": "また美味しかったです",
        "store_id": 2
    },
    {
        "id": 2,
        "title": "食べてきました",
        "date": "2023/06/01",
        "post": "美味しかったです",
        "store_id": 2
    }
]
```

## http://localhost:8000/api/stores/1

- storesの指定したストアidのみ全件取得

```bash
[
    {
        "store_id": 1,
        "store_name": "ラーメン1",
        "description": "おいしいよ",
        "soup": "koi",
        "men": "huto",
        "comment": "本日営業してます",
        "star_up": 3,
        "ranking": 10,
        "id": 5
    }
]
```

## POST http://127.0.0.1:8000/api/articles

- articlesに１件インサート

```bash
POST

{
            "title":"てすと",
            "date":"2023/06/05",
            "post":"てすとてすと",
            "store_id":"1"
}
```

## POST http://127.0.0.1:8000/api/users

- usersに１件インサート

```bash
POST

{
    "name":"てすとゆーざー",
    "password":"passwordtest",
    "age":"20",
    "favorite_store":"1"
}
```