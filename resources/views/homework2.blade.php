<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title>登録完了</title>    
    </head>

    <body>
        <main>
                <div>
                    <h1>{!! $user->name !!}さん新規登録完了</h1>
                    <p>住所:{!! $user->address !!}</P>
                    <p>年齢:{!! $user->age !!}</P>
                </div>
                <a href="{{ route('user.index') }}">一覧へ</a>

        </main>
    </body>
</html>
