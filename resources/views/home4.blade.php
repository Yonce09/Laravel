<html>
    <head>
    <meta charset="utf-8">
    </head>

    <body>
            <h1>点数(1~100)を入力してください！！</h1>

    
            <form action="test" method="post">
                @csrf
            <input type="text" name="textbox1">
            <input type="submit" value="送信">
            </form>
    </body>
</html>