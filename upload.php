<?php

/*
  素材火
  http://www.sucaihuo.com
 */
header("Content-type: text/html; charset=utf-8");
$maxSize = 1024 * 1024; //1M 设置附件上传大小
$allowExts = array("gif", "jpg", "jpeg", "png"); // 设置附件上传类型
$file_save = "upload/";
include_once("UploadFile.class.php");
$upload = new UploadFile(); // 实例化上传类
$upload->maxSize = $maxSize;
$upload->allowExts = $allowExts;
$upload->savePath = $file_save; // 设置附件
$upload->saveRule = time() . sprintf('%04s', mt_rand(0, 1000));
if (!$upload->upload()) {// 上传错误提示错误信息
    $errormsg = $upload->getErrorMsg();
    $arr = array(
        'error' => $errormsg, //返回错误
    );
    echo json_encode($arr);
    exit;
} else {// 上传成功 获取上传文件信息
    $info = $upload->getUploadFileInfo();
	//var_dump($info);exit();
    $imgurl = $info[0]['savename'];

    $x = $_POST['x1'];
    $y = $_POST['y1'];
    $x2 = $_POST['x2'];
    $y2 = $_POST['y2'];
    $w = $_POST['w'];
    $h = $_POST['h'];
    include_once("jcrop_image.class.php");
    $file_save = "upload/";
    $pic_name = $file_save . $imgurl;
    $crop = new jcrop_image($file_save, $pic_name, $x, $y, $w, $h, $w, $h);
    $file = $crop->crop();

    echo "上传后的原图片：<p><img src='" . $pic_name . "'/></p>";
    echo "缩略图：<p><img src='" . $file . "'/></p>";
    echo "<p><input type='button' value='返回' onclick='history.go(-1)'/></p>";
}
?>