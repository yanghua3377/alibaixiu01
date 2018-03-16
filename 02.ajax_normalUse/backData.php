<?php 
    // 接收数据
    // 处理数据
    
    // 返回结果
    // var_dump($_POST);

    $habbit = $_POST['habbit'];
    echo '没想到呀,你也喜欢这个,我也是哦,交个朋友吧'.$habbit;

    // 休息一会 模拟 网络传输
    sleep(10);
?>