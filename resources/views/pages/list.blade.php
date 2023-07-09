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
        
        <a href="{{ route('show') }}">3月追いコン打ち上げ</a><br>
        
        {{--@foreach($histories as $history)
            <div class= 'history'>
                <a href="/pages/{{ $history->id }}"><h2 class='name'>{{ $history->name }}</h2></a>
            </div>
        @endforeach--}}

        <button type="button">並び替え</button>
        
        <a href="{{ route('enter') }}" class="btn_back">戻る</a>
        
    </body>
</html>