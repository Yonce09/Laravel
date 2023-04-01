<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home3.css">
    </head>

    <body>
        <header>
            <nav class="first-nav">
            <a href="http://127.0.0.1:8080/sample" class="first-href">Introduction</a>
            <a href="http://127.0.0.1:8080/sample2" class="first-href">portfolio</a>
            <a href="http://127.0.0.1:8080/sample3" class="first-href">contact</a>
            </nav>
        </header>

        <main>
            <p class="text1">contact</p>
        

            <form class="text2" action="store" method="post">
            @csrf
                <label class="bold">お名前</label> 
                <input type="text" class="hoge" name="name">
                <br>
        
                <label class="bold">メールアドレス</label>
                <input type="text" class="hoge" name="mail">
                <br>

                <label class="bold">電話番号</label>
                <input type="text" class="hoge" name="tell">
                <br>

                <label class="bold">問合内容</label>
                <textarea name="message"></textarea>
                <br>
            
                <label class="bold2">ご連絡方法</label>
                <input type="radio" name="contact" style="transform:scale(2.0);"><label class="bold3">お電話</label>
                <input type="radio" name="contact" style="transform:scale(2.0);"><label class="bold3">メール</label>
                <input type="radio" name="contact" style="transform:scale(2.0);"><label class="bold3">どちらでも</label>
                <br>
                <div class="submit1"><input type="submit" value="送信" class="bold4"></div>
            </form>
        </main> 
        
        <footer class="foot">
            <a href="http://127.0.0.1:8080/sample" class="second-href">Introduction</a>
            <a href="http://127.0.0.1:8080/sample2" class="second-href">portfolio</a>
            <a href="http://127.0.0.1:8080/sample3" class="second-href">contact</a>
            <p class="text3">20xx 〇〇 All Rights Reserved </p>
        </footer>

    </body>

</html>
