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
                <input type="text" name="history[name]"/> &emsp;
                <p class='name__error' style="color:red">{{ $errors->first('history.name') }}</p>
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
                <h2 style="margin-right: 10px;">割合</h2>
                <input type="text" name="history[ratio_grade3]"> &emsp;
                <h2>代金</h2>
                <input type="text" name="history[cost_grade3]">
                <h3>円</h3>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">2年生</h2>
                <input type="text" name="history[num_grade2]">
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合</h2>
                <input type="text" name="history[ratio_grade2]"> &emsp;
                <h2>代金</h2>
                <input type="text" name="history[cost_grade2]">
                <h3>円</h3>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">1年生</h2>
                <input type="text" name="history[num_grade1]">
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合</h2>
                <input type="text" name="history[ratio_grade1]"> &emsp;
                <h2>代金</h2>
                <input type="text" name="history[cost_grade1]">
                <h3>円</h3>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">合計人数</h2>
                <input type="text" name="history[sum_people]">
                <h3>人</h3>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">集金</h2>
                <input type="text" name="history[collect_money]">
                <h3>円</h3>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">おつり</h2>
                <input type="text" name="history[change]">
                <h3>円</h3>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">平均</h2>
                <input type="text" name="history[average]">
                <h3>円</h3>
            </div>
            
            <div>
                <button type="submit">保存</button>
                <!--<button onclick="location.href='/pages/clear'">クリア</button>-->
                <!--<button type="button" id="cal">計算</button>-->
                <!--<button onclick="location.href='/pages/index'">履歴</button>-->
            </div>
        </form>
        
        
        <button onclick="location.href='/pages/clear'">クリア</button>
        <button type="button" id="cal">計算</button>
        <button onclick="location.href='/pages/index'">履歴</button>
        <br><br>
        
        <a href="/" class="btn_back">戻る</a>
        
        <script src="{{ asset('/js/cal.js') }}">
            
        </script>
    </body>
</html>