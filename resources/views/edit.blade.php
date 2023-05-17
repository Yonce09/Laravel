<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title>お問合せ内容編集</title>    
    </head>

    <body>
        <main>
            <article>
                <div>
                    <h1>お問合せ内容編集</h1>

                  
                    <form action="update" method="post">
                        @csrf
                        <div>
                            <label for="id">ID</label>
                            <input type="text" name="id" value="{{ $contact->id }}" readonly>
                        </div>
                        <div>
                            <label for="name">名前</label>
                            <input type="text" name="name" value="{{ $contact->name }}">
                        </div>
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="text" name="mail" value="{{ $contact->mail }}">
                        </div>
                        <div>
                            <label for="tel">電話番号</label>
                            <input type="text" name="tel" value="{{ $contact->tel }}">
                        </div>
                        <div>
                            <label for="message">お問合せ内容</label>
                            <textarea name="message">{{ $contact->message }}</textarea>
                        </div>
                        <div>
                            <label for="contact">ご希望の連絡先</label>
                            <input type="radio" value="{{ $contact->contact }}" name="contact"><label>お電話</label>
                            <input type="radio" value="{{ $contact->contact }}" name="contact"><label>メール</label>
                            <input type="radio" value="{{ $contact->contact }}" name="contact"><label>どちらでも</label>
                        </div>
                        <button type="submit">更新</button>
                    </form>
                </div>
            </article>
        </main>
    </body>
</html>