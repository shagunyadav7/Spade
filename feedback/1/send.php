<?php
$botToken = "894320771:AAHvJ5p6ZBX5OEgUWb4fcgfFOi_YyObKbsc";
$chat_id = "-253114488";
$A=$_POST['experience'];
$B=$_POST['comments'];
$C=$_POST['name'];
$D=$_POST['email'];

$message = nl2br($A."\n".$B."\n".$C."\n".$D);
$bot_url    = "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
echo("<script type='text/javascript'>
        alert('Message Sent Successfully');
         setTimeout(function(){
            window.location.href = 'https://spadeems.com/';
         }, 5000);
      </script>");
?>