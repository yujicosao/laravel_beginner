<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $category }}一覧</title>
</head>
<body>
    <h1>{{ $category }}一覧</h1>
    @if ($category == 'news')
        <p>本日のニュースをお伝えします。</p>
    @endif
</body>
</html>