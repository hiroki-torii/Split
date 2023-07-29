<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>履歴</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            <h1 class="name">
                {{ $history->name }}
            </h1>
            <p>{{ $history->created_at }}</p>    
    
            <div style="display: flex; align-items: center;">
                <h1 style="margin-right: 10px;">合計額</h1>
                    {{ $history->sum_cost }}
                <h3>円</h3>
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">3年生以上</h2>
                    {{ $history->num_grade3 }}
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合</h2>
                    {{ $history->ratio_grade3 }} &emsp;
                <h2>代金</h2>
                    {{ $history->cost_grade3 }}
                <h3>円</h3>    
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">2年生</h2>
                    {{ $history->num_grade2 }}
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合</h2>
                    {{ $history->ratio_grade2 }} &emsp;
                <h2>代金</h2>
                    {{ $history->cost_grade2 }}
                <h3>円</h3>    
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">1年生</h2>
                    {{ $history->num_grade1 }}
                <h3>人</h3>
            </div>
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">割合</h2>
                    {{ $history->ratio_grade1 }} &emsp;
                <h2>代金</h2>
                    {{ $history->cost_grade1 }}
                <h3>円</h3>    
            </div>
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">合計人数</h2>
                    {{ $history->sum_people }}
                <h3>人</h3>
            </div>    
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">集金</h2>
                    {{ $history->collect_money }}
                <h3>円</h3>
            </div>  
            
            <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">おつり</h2>
                    {{ $history->change }}
                <h3>円</h3>  
            </div>    
            
             <div style="display: flex; align-items: center;">
                <h2 style="margin-right: 10px;">平均</h2>
                    {{ $history->average }}
                <h3>円</h3>
            </div>    
        </div>
        
        <a href="/pages/index" class="btn_back">戻る</a>
        
    </body>
</html>