<?php 
        // 接收数据
        // 某个名字
        $starName = $_POST['starName'];
        // echo $starName;
        /*
            // 关系型数组
            // 名字=>array(
            //     icon=>,
            //     info=>
            // )
        */
        $starList = array(
            '周林林'=>array(
                'icon'=>'./img/zll.png',
                'info'=>'一样一样的哦'
            ),
            '林利群'=>array(
                'icon'=>'./img/llq.jpg',
                'info'=>'这是一个寂寞的天,下着有些伤心的雨'
            ),
            '西兰花'=>array(
                'icon'=>'./img/xlh.png',
                'info'=>'我媳妇,以下省略1w值'
            )
        );
    
        // 返回的是 名字 对应的 详细信息
        // echo  $starList[$starName]['icon']; 

        // 额外的返回一些 特殊的符号
        // echo '囧_^_^_QG_^_^_囧';


        // 返回 个性签名即可
        // echo $starList[$starName]['info'];

        // 直接返回 数组
        var_dump($starList[$starName]);


?>