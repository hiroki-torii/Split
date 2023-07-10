<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>履歴</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="name">
            {{ $history->name }}
        </h1>
        <div class="content">
            <div class="content__history">
                <p>{{ $history->created_at }}</p>    
                <p>{{ $history->sum_cost }}</p>    
            </div>
        </div>
        
        <!--<h2>日付：</h2>-->

        <!--<div style="display: flex; align-items: center;">-->
        <!--    <h1 style="margin-right: 10px;">合計額</h1>-->
        <!--    <h3>円</h3>-->
        <!--</div>-->
        
        <!--<div style="display: flex; align-items: center;">-->
        <!--    <h2 style="margin-right: 10px;">3年生以上</h2>-->
        <!--    <h3>人</h3>-->
        <!--</div>-->
        <!--<div style="display: flex; align-items: center;">-->
        <!--    <h2 style="margin-right: 10px;">割合：</h2>-->
        <!--    <h2>代金：</h2>-->
        <!--</div>-->
        
        <!--<div style="display: flex; align-items: center;">-->
        <!--    <h2 style="margin-right: 10px;">2年生</h2>-->
        <!--    <h3>人</h3>-->
        <!--</div>-->
        <!--<div style="display: flex; align-items: center;">-->
        <!--    <h2 style="margin-right: 10px;">割合：</h2>-->
        <!--    <h2>代金：</h2>-->
        <!--</div>-->
        
        <!--<div style="display: flex; align-items: center;">-->
        <!--    <h2 style="margin-right: 10px;">1年生</h2>-->
        <!--    <h3>人</h3>-->
        <!--</div>-->
        <!--<div style="display: flex; align-items: center;">-->
        <!--    <h2 style="margin-right: 10px;">割合：</h2>-->
        <!--    <h2>代金：</h2>-->
        <!--</div>-->
        
        <!--<h2>合計金額：</h2>-->
        
        <!--<h2>集金：</h2>-->
        
        <!--<h2>おつり：</h2>-->
        
        <!--<h2>平均：</h2>-->
        
        <a href="/pages/index" class="btn_back">戻る</a>
        
    </body>
</html>