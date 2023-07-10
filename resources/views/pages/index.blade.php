<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>履歴一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>履歴一覧</h1>
        
        <div class='histories'>
            @foreach ($histories as $history)
                <div class='history'>
                    <h2 class='name'>{{ $history->name }}</h2>
                    <p class='created_at'>{{ $history->created_at }}</p>
                </div>
            @endforeach

        <button type="button">並び替え</button>
        
        <a href="/pages/enter" class="btn_back">戻る</a>
        
    </body>
</html>