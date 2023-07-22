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
                    <h2 class='name'>
                        <a href="/pages/{{ $history->id }}">{{ $history->name }}</a>
                    </h2>
                    <p class='created_at'>{{ $history->created_at }}</p>
                    <form action="/pages/{{ $history->id }}" id="form_{{ $history->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $history->id }})">削除</button>
                    </form>
                </div>
            @endforeach    
        </div>
        
        <a href="/pages/enter" class="btn_back">戻る</a>
        
        <script>
            function deletePost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        
    </body>
</html>