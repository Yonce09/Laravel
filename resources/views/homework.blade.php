<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/homework.css">
       
        <title>新規登録</title>    
    </head>

    <body>
        <main>
            <article>
                <div>
                    <h1>新規登録</h1>

                  
                    <form action="store" method="post">
                        @csrf
                        <div>
                            <label for="name" class="register">お名前</label>
                            <input type="text" class="textarea" name="name">
                        </div>
                        <div>
                            <label for="address" class="register">住所</label>
                            <input type="text" class="textarea" name="address">
                        </div>
                        <div>
                            <label for="age" class="register">年齢</label>
                            <input type="text" class="textarea" name="age">
                        </div>
                        
                        <a href="{{ route('user.index') }}">戻る</a>
                        <button type="submit">新規登録</button>
                    </form>
                </div>
            </article>
        </main>
    </body>
</html>