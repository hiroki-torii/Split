<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>入力画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/pages/save" method="POST">
            @csrf
            <div style="display: flex; align-items: center;">
                <h1 style="margin-right: 10px;">飲み会名</h1>
                <input type="text" name="history[name]"/>
            </div>
    
            <div style="display: flex; align-items: center;">
                <h1 style="margin-right: 10px;">合計額</h1>
                <input type="text" name="history[sum_cost]"/>
                <h3>円</h3>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">3年生以上</h2>
                <input type="text" name="history[num_grade3]"/>
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合：</h2>
                <input type="text" name="history[ratio_grade3]">
                <h2>代金：</h2>
                <input type="text" name="history[cost_grade3]">
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">2年生</h2>
                <input type="text" name="history[num_grade2]">
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合：</h2>
                <input type="text" name="history[ratio_grade2]">
                <h2>代金：</h2>
                <input type="text" name="history[cost_grade2]">
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">1年生</h2>
                <input type="text" name="history[num_grade1]">
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合：</h2>
                <input type="text" name="history[ratio_grade1]">
                <h2>代金：</h2>
                <input type="text" name="history[cost_grade1]">
            </div>
            
            <h2>合計人数：</h2>
            <input type="text" name="history[sum_people]">
            
            <h2>集金：</h2>
            <input type="text" name="history[collect_money]">
            
            <h2>おつり：</h2>
            <input type="text" name="history[change]">
            
            <h2>平均：</h2>
            <input type="text" name="history[average]">
            
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