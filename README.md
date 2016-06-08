# cropUpload
图片上传以及裁切上传功能，基于angularjs以及js原生代码裁切功能
##安装或引用
angularjs+  
image.crop.js
##如何使用
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
##参数说明   
####使用css样式自定义
>
1）action  
——服务端上传地址  
2）preview    
——上传预览或裁切选区，指定ID   
3）jcrop="name"  
——返回裁切结果数据，包含有x1:左边距，x2:右边距，y1:上边距，y2:上边距，height:裁切高，width:裁切宽  
4）name = "file"  
——上传表单的名称，返回结果于该表单名称可用于表单传输值  
5）accept = "images/jepg"  
——允许的上传类型  
6）thumb = "100,100"  
——预览选区大小，默认100,100  
7）crop = "50,50"  
——初始化或默认裁切大小  
8）auto = true  
——是否自动上传（true || false）  默认自动上传  
9）btn  
——上传按钮 指定ID，如果设置此参数则auto失效  

##特别说明
