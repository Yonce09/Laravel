<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="内容確認">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>一覧画面</title>
    </head>

    
    <body style="padding: 60px 0;">
        <header>
            <h1>一覧画面</h1>
        </header> 
        <main>
            <article>
                <div class="container">
                    <h1 class="fs-2 my-3">お問合せ一覧</h1>
                    <div class="card mb-3">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <div>
                                        <th>ID</th>
                                        <th>氏名</th>
                                        <th>メールアドレス</th>
                                        <th>電話番号</th>
                                        <th>お問合せ内容</th>
                                        <th>ご希望の連絡先</th>
                                    </div>
                                </tr>
                                
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->id}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->mail}}</td>
                                        <td>{{$contact->tel}}</td>
                                        <td>{{$contact->message}}</td>
                                        <td>{{$contact->contact}}</td>
                                        <td><a href="{{ route('contact.edit', ['id'=>$contact->id]) }}" class="btn btn-info">編集</a></td>
                                    </tr>  
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </article>
        </main>
   </body>
</html>