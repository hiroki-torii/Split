<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>入力画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/save" method="POST">
            @csrf
            <div style="display: flex; align-items: center;">
                <h1 style="margin-right: 10px;">飲み会名</h1>
                <input type="text" name="name" id="name"/>
            </div>
    
            <div style="display: flex; align-items: center;">
                <h1 style="margin-right: 10px;">合計額</h1>
                <input type="text" name="sum_cost">
                <h3>円</h3>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">3年生以上</h2>
                <input type="text" name="num_grade3">
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合：</h2>
                <input type="text" name="ratio_grade3">
                <h2>代金：</h2>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">2年生</h2>
                <input type="text" name="num_grade2">
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合：</h2>
                <input type="text" name="ratio_grade2">
                <h2>代金：</h2>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">1年生</h2>
                <input type="text" name="num_grade1">
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合：</h2>
                <input type="text" name="ratio_grade1">
                <h2>代金：</h2>
            </div>
            
            <h2>合計金額：</h2>
            
            <h2>集金：</h2>
            
            <h2>おつり：</h2>
            
            <h2>平均：</h2>
            
            <div>
                <button type="button" onclick="clearValues()">クリア</button>
                <button type="button" onclick="calculate()">計算</button>
                <button type="submit">保存</button>
                <a href="/pages/index" class="btn_history">履歴</a>
            </div>
        </form>
        <a href="/" class="btn_back">戻る</a>
    </body>
</html>