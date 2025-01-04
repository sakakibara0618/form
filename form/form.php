<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>

    <body>
        <h2>お問い合わせ</h2>
        <form action="confirm.php" method="post">
            <table>
                <tr>
                    <td>お名前</td>
                    <td>
                        <input type="text" name="user_name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td>
                        <input type="text" name="user_email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td>
                        <input type="radio" name="user_gender" value="男性" checked>男性
                        <input type="radio" name="user_gender" value="女性">女性
                        <input type="radio" name="user_gender" value="その他">その他
                    </td>
                </tr>
                <tr>
                    <td>お問い合わせ種別</td>
                    <td>
                        <select name="category">
                            <option value="ご意見やご感想">ご意見やご感想</option>
                            <option value="不具合について">不具合について</option>
                            <option value="その他">その他</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>お問い合わせ内容</td>
                    <td>
                        <!-- cols属性＝入力欄の幅（文字数）、rows属性＝入力欄の高さ（行数） -->
                        <textarea name="message" cols="30" rows="10"></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" value="送信">
        </form>
    </body>
</html>