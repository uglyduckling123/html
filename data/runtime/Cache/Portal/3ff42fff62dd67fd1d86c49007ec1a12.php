<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>定州市政府信息公开平台</title>
    <meta name="keywords" content="定州市">
    <meta name="description" content="定州市">
    <script language="javascript" src="/statics/js/jquery-2.1.3.min.js"></script>
    <link href="/statics/css/dingzhou.css" rel="stylesheet" type="text/css">
  </head>
<body>
  <div class="content">
    <div class="article_top"><img border="0" alt="" src="/statics/images/banner.png" width="980"></div>
    <div class="main">
      <div class="main_top">
        <p class="main_nav"><a href="/index.php"style=" ">首页</a>>>定州市公众信息网  >> 部门 >> 内容阅读</p>
      </div>
      <div class="main_bottom">
        <div class="list_content" style="height: 300px">
          <table border="0" cellspacing="0" cellspacing="0" >
             <tr><th width="800" height="500" class="list_l">名&nbsp;&nbsp;称</th><th width="180">发布日期</th></tr>
              <?php if(is_array($lists)): foreach($lists as $key=>$vo): ?><tr><td><a href="<?php echo U('Index/detailInfo',array('id'=>$vo[id],'post_author'=>$vo[post_author]));?>"><?php echo ($vo["post_title"]); ?></a></td><td><?php echo ($vo["post_modified"]); ?></td></tr><?php endforeach; endif; ?>
          </table>
          <!-- 分页 start-->
            <div class="pagenation"><?php echo ($Page); ?></div>
          <!-- 分页 end-->
        </div><!--list_content-->
      </div>
      <div class="clear_both"></div>
    </div><!--main-->
    <div class="bottom">
      <div class="bottombg">
        <div class="copyright">本站由定州市信息化工作领导小组 定州市信息网络中心负责<br>
        地址：定州市市府街1号 邮编：052360  冀ICP备111111号<br>推荐使用Internet Explorer 7.0以上，1024*768分辨率浏览本站点<br></div>
      </div>
      <!-- 页尾图 start -->
      <div align=center style="background:#ffffff">
       <script type="text/javascript">
       // document.write(unescape("%3Cspan id='_ideConac' %3E%3C/span%3E%3Cscript src='http://dcs.conac.cn/js/05/113/0000/60050731/CA051130000600507310002.js' type='text/javascript'%3E%3C/script%3E"));
       </script>
        <script id="_jiucuo_" sitecode='1301810003' src='http://pucha.kaipuyun.cn/exposure/jiucuo.js'></script>
      </div>
      <!-- 页尾图 end -->
    </div><!--bottom-->
  </div><!--content-->
</body>
</html>