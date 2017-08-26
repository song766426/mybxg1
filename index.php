<?php 
// 默认目录名称
$dir = 'main';
// 默认文件名称
$filename = 'index';

//在当前页面嵌入一个子页面
// 这种没样式 路径不对
// include('./views/main/index.html');
    // 判断数组中是否包含指定的属性
    if(array_key_exists('PATH_INFO',$_SERVER)){
        // var_dump($_SERVER);
    // PATH_INFO 路径  获取URL中的路径
         $path = $_SERVER['PATH_INFO'];
        // 去掉路径中的第一个斜杠
        // 字符串截取的api
        $str = substr($path,1); //main/index
        //分割路径和文件名称
        $arr = explode('/',$str);
        if(count($arr)==2){
            $dir = $arr[0];//覆盖目录名称
            $filename= $arr[1];//覆盖文件名称
        }else{
            // 如果不是两层路径就跳转到登录页面
            $filename='login';
        }

    }

//路径的格式
//  /main/index
//  /main/login
//  /teacher/list
//  /teacher/add
include('./views/'.$dir.'/'.$filename.'.html');
 ?>