<?php
$encode=1;
$text= file_get_contents('https://v1.hitokoto.cn?encode=text');
if($encode==1)
    echo "document.write('".$text."');n";
?>