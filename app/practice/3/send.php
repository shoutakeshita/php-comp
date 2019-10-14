<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1></h1>
        <p>次のページへデータを渡してみよう。</p>
        <!-- この下のフォームに追加します -->
        <form action="./confirm.php" method="POST">
            <label>お名前</label>
            <input type="text" name="user_name">
            <label>趣味</label>
            <input type="text" name="hobby">
            <input type="submit" value="確認する">
        </form>
    </body>
</html>