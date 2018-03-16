<?php 
    // 接收数据
    // var_dump($_GET);

    // 处理数据
    $name = $_GET['name'];
    $skill =$_GET['skill'];


    // 返回结果
    echo "你竟然是:$name ,你擅长的原来是:$skill";

?>