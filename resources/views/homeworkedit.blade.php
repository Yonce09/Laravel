<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title>編集画面</title>    
    </head>

    <body>
        <main>
            <article>
                <div>

                  
                    <form action="update" method="post">
                        @csrf
                        <div>
                            <label for="id">ID</label>
                            <input type="text" name="id" value="{{ $user->id }}" readonly>
                        </div>
                        <div>
                            <label for="name">お名前</label>
                            <input type="text" name="name" value="{{ $user->name }}">
                        </div>
                        <div>
                            <label for="address">住所</label>
                            <input type="text" name="address" value="{{ $user->address }}">
                        </div>
                        <div>
                            <label for="tel">年齢</label>
                            <input type="text" name="age" value="{{ $user->age }}">
                        </div>
                        
                        <a href="{{ route('user.index') }}">戻る</a>
                        <button type="submit">更新</button>
                    </form>
                </div>
            </article>
        </main>
    </body>
</html>