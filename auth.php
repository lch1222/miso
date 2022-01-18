<?php

include("PHPMailerAutoload.php");

// 產生 Mailer 實體
$mail = new PHPMailer();

// 設定為 SMTP 方式寄信
$mail->IsSMTP();

// SMTP 伺服器的設定，以及驗證資訊
$mail->SMTPAuth = true;      
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 587;
$mail->SMTPAuth = false;
$mail->SMTPAuth = true; //設定SMTP需要驗證        
$mail->SMTPSecure = "tls"; // Gmail的SMTP主機需要使用SSL連線   

// 信件內容的編碼方式       
$mail->CharSet = "utf-8";

// 信件處理的編碼方式
$mail->Encoding = "base64";

// SMTP 驗證的使用者資訊
$mail->Username = "kt2021ta4"; 
$mail->Password = "TVtelevision";  

$mail->From = $_POST['contact_email'];
$mail->FromName =$_POST['contact_name']; //顯示寄件者名稱
$mail->Subject = "客戶回饋"; //信件主旨
$mail->Body =$_POST['contact_message'];   //信件內容 
$mail->IsHTML(true);


// 收件人
$mail->AddAddress("kt2021ta4@gmail.com", "覓所旅遊"); //此為收件者的電子信箱及顯示名稱


// 系統提示訊息
if(!$mail->Send()) {     
echo "Mail error: " . $mail->ErrorInfo;     
sleep(3);
header("Location:about.html");

}else{
    sleep(5);
    header("Location:index.html");


}






?>