## Api debugger (forked from lexuses/api-debugger)

### Install
`composer install karim88/api-debugger`

### Usage
For laravel below 5.5: add ```Karim88\ApiDebugger\ApiDebuggerServiceProvider``` to your app.php

It's done!

Now you see in response:
```
{
    "data": {
        "id": 1,
        "name": "admin"
    },
    "debug": {
        "sql": {
            "total_queries": 673,
            "queries": [
                {
                    "query": "select * from `oauth_access_tokens` where `oauth_access_tokens`.`id` = '552ef1eb05742d41468ac07d0ad360ece53ac3c9e1a5151e7971b8e737033957677e447af58bfd03' limit 1;",
                    "time": 38.01
                },
                {
                    "query": "select * from `users` where `id` = '1' limit 1;",
                    "time": 13
                }
            ]
        }
    }
}
```

You can pass your variable for test:
```
$data = ["foo" => "bar"];
$debugger = app()->make(ApiDebugger::class);
$debugger->dump($data);
```

And in response you will see:
```
{
    "dump": {
        "foo": "bar"    
    }
}
```