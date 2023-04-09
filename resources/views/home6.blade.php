<html>
    <head>
    <meta charset="utf-8">
    </head>

    <body>
            <h1>数字を入力してください</h1>

    
            <form action="test2" method="post">
                @csrf
            <input type="text" name="textbox2">
            <input type="submit" value="送信">
            </form>
    </body>
</html>