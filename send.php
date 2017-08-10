// 1.言語、文字コードを指定
mb_language("Ja");
mb_internal_encoding("UTF-8");
 
// 送信先、件名、本文を変数に格納
$mailto = "y-okuda@firstserver.co.jp";
$subject = "PHPでのメール送信";
$content = "送れましたか？";
 
// 2.差出人を日本語表示
$mailfrom="From:" .mb_encode_mimeheader("奥田 泰弘") ."<y-okuda@firstserver.co.jp>";
 
// 3.上記（送信先、件名、本文、差出人）を日本語でメール送信実行
mb_send_mail($mailto, $subject, $content, $mailfrom);
echo '送信完了！';
