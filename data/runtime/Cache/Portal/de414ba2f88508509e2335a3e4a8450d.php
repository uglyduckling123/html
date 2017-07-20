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
      <div class="main_left">
        <div class="ml_top">政府公开</div>
        <div class="ml_bottom">
          <ul>
            <li><a href="<?php echo U('Index/moreInfo',array('post_author'=>$post_author_goverment,'post_category'=>$post_category_bugget));?>">政府预算</a></li>
            <li><a href="<?php echo U('Index/moreInfo',array('post_author'=>$post_author_goverment,'post_category'=>$post_category_final_account));?>">政府决算</a></li>
            <li><a href="<?php echo U('Index/moreInfo',array('post_author'=>$post_author_apartment,'post_category'=>$post_category_bugget));?>">部门预算</a></li>
            <li><a href="<?php echo U('Index/moreInfo',array('post_author'=>$post_author_apartment,'post_category'=>$post_category_final_account));?>">部门决算</a></li>
          </ul>
        </div>
        <p class="ml_line"></p>
        <p class="ml_space"></p>
      </div>
      <div class="main_right">
        <div class="main_top">
     <!--    <div style="float: right" class="main_nav2"style="float: right"><a href="/index.php"style=" ">首页</a></div>-->
          <div style="float: left"><p class="main_nav2"style="float: left"><a href="/index.php"style=" ">首页</a>>>定州市公众信息网 >> 内容阅读</p></div>
        </div>
        <div class="main_bottom">
          <div class="mb_list">
            <ul>
              <?php if(is_array($lists)): foreach($lists as $key=>$vo): ?><li><a href="<?php echo U('Index/detailInfo',array('id'=>$vo[id],'post_author'=>$vo[post_author]));?>"><?php echo ($vo["post_title"]); ?></a><span><?php echo ($vo["post_date"]); ?></span></li><?php endforeach; endif; ?>
            </ul>
            <!-- 分页 start-->
            <div class="pagenation"><?php echo ($Page); ?></div>
            <!--<div class="pagenation">
                共查询到 10 条数据，
                第 1 页，共 2 页&nbsp;&nbsp;&nbsp;
                <a href="javascript:void(0)" id="frist_page">首页</a>
                <a href="javascript:void(0)" id="pre_page">上一页</a>
                <a href="javascript:void(0)" id="next_page">下一页</a>
                <a href="javascript:void(0)" id="last_page">末页</a>
            </div>-->
            <!-- 分页 end-->
          </div>
        </div><!--main_bottom-->
      </div><!--main_right-->
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