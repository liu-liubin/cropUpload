# cropUpload
图片上传以及裁切上传功能，基于angularjs以及js原生代码裁切功能
#如何使用
* html标签规则
```
<div  ajax-upload                     
    style="border:solid 5px #333"    
    action="upload.php" 
    preview="preview" 
    jcrop="zuobiao" >上传图片</div>
```    
* 预览-指定id
```
<div id="preview"></div>
```
#参数说明
* 
  * 使用css样式自定义
  * action 服务端上传地址 
  * preview   上传预览或裁切选区 指定ID 
  * jcrop="name"     使用裁切工具，并返回裁切坐标值到jcrop对应的表单名称里，4个值分别表示左上，右上，左下，右下
  * name = "file"    上传表单的名称
  * accept = "images/jepg"   允许的上传类型
  * thumb = "100,100"         预览选区大小，默认100,100
  * crop = "50,50"        初始化或默认裁切大小
  * auto = true           是否自动上传（true || false）  默认自动上传
  * btn            上传按钮 指定ID，如果设置此参数则auto失效
