<html>
    <head>
    <meta charset="utf-8">
    </head>

    <body>
            <h1>結果</h1>
        @if ($score >= 80) 
            <p> "大変良くできました"</p>
        @elseif ($score < 50) 
           <p>"頑張りましょう" </P>
        @elseif ($score < 80) 
            <p>よくできました</P>
        @else
            <p>0~100を入力してください</p>
        @endif
        
        </p>
        <a href="sample4">戻る</a>

    </body>