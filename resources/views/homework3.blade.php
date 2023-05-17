<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="内容確認">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>検索画面</title>
    </head>

    
    <body style="padding: 60px 0;">
        <header>
        <form action="{{ route('user.index2') }}" method="get">
            <label for="ID" class="register">ID:</label>
            <input type="text" name="keyword">
            <button type="submit">検索</button>
            <a href="{{ route('user.create') }}">新規登録</a>
        </form>
        </header> 
        <main>
            <article>
                    <div class="card mb-3">
                            <table>
                                <tr>
                                    <div class="card-body">
                                        <th>No</th>
                                        <th>名前</th>
                                        <th>住所</th>
                                        <th>年齢</th>
                                    </div>
                                </tr>
                                
                                @foreach ($user as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->age}}</td>
                                        <td><a href="{{ route('user.edit', ['id'=>$user->id]) }}" class="btn btn-info">編集</a></td>
                                        <td><a href="{{ route('user.destroy', ['id'=>$user->id]) }}" class="btn btn-info">削除</a></td>

                                    </tr>  
                                @endforeach
                            </table>
                    </div>
            </article>
        </main>
   </body>
</html>