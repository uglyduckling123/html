<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>定州市财政预决算公开专栏</title>
    <meta name="keywords" content="定州市">
    <meta name="description" content="定州市">
    <script language="javascript" src="/statics/js/jquery-2.1.3.min.js"></script>
    <link href="/statics/css/dingzhou.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
    $(function(){
      $('#main_box span').click(function(e) {
          $(this).addClass('current').siblings().removeClass('current');
          $('#main_box li').eq($(this).index()).show().siblings().hide();
        });
      $(".mb_content tr:nth-child(odd)").css("background-color","#ECECEC");
    })
    </script>
  </head>
<body>
  <div class="content">
    <div class="top"><img border="0" src="/statics/images/cz.jpg"></div>
    <div class="main">
      <div class="main_top">
        <ul class="top_content">
          <li>
            <div class="tl_title"><img src="/statics/images/ysjsuan.gif" height="35"/></div>
            <ul class="tl_content">
              <?php if(is_array($goverment_bugget)): foreach($goverment_bugget as $key=>$vo): ?><li><a href="<?php echo U('Index/detailInfo',array('id'=>$vo['id']));?>"><?php echo ($vo["post_title"]); ?></a><!--<span><?php echo ($vo["post_title"]); ?></span>--></li><?php endforeach; endif; ?>
            </ul>
            <div class="tl_bottom"><a href="<?php echo U('Index/moreInfo',array('post_author'=>$post_author_goverment,'post_category'=>$post_category_bugget));?>" >更多</a></div>
          </li>
          <li>
            <div class="tl_title"><img src="/statics/images/ysjsuan1.gif" height="35"/></div>
            <ul class="tl_content">
              <?php if(is_array($goverment_final_account)): foreach($goverment_final_account as $key=>$vo): ?><li><a href="<?php echo U('Index/detailInfo',array('id'=>$vo['id']));?>"><?php echo ($vo["post_title"]); ?></a><!--<span><?php echo ($vo["post_title"]); ?></span>--></li><?php endforeach; endif; ?>
            </ul>
            <div class="tl_bottom"><a href="<?php echo U('Index/moreInfo',array('post_author'=>$post_author_goverment,'post_category'=>$post_category_final_account));?>" >更多</a></div>
          </li>
          <li>
            <div class="tl_title"><img src="/statics/images/ysjsuan3.gif" height="35"/></div>
            <ul class="tl_content">
              <?php if(is_array($others)): foreach($others as $key=>$vo): ?><li><a href="<?php echo U('Index/detailInfo',array('id'=>$vo['id']));?>"><?php echo ($vo["post_title"]); ?></a><!--<span><?php echo ($vo["post_title"]); ?></span>--></li><?php endforeach; endif; ?>
            </ul>
            <div class="tl_bottom"><a href="<?php echo U('Index/othersMore',array('post_category'=>$post_category_others));?>" >更多</a></div>
          </li>
        </ul>
      </div>
      <div class="main_bottom">
        <div id="main_box" class="mb_all">
          <h2>
            <span class="current">部门预算</span>
            <span>部门决算</span>
          </h2>
          <ul>
            <li class="current">
              <div class="clear_both"></div>
              <table class="mb_content" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <th width="79">序&nbsp;号</th><th width="163.5">部门名称</th><th width="79">序&nbsp;号</th><th width="163.5">部门名称</th>
                  <th width="79">序&nbsp;号</th><th width="163.5">部门名称</th><th width="79">序&nbsp;号</th><th width="163.5">部门名称</th>
                </tr>
                <?php if(is_array($four_pear_apartment)): foreach($four_pear_apartment as $key=>$vo): ?><tr>
                    <?php if(is_array($vo)): foreach($vo as $key=>$vo1): ?><td><?php echo ($vo1["id"]); ?></td><td><a href="<?php echo U('Index/apartmentArticles',array('post_author'=>$vo1[id],'post_category'=>$post_category_bugget));?>"><?php echo ($vo1["user_login"]); ?></a></td><?php endforeach; endif; ?>
                  </tr><?php endforeach; endif; ?>
              </table>
            </li>
            <li>
              <div class="clear_both"></div>
              <table class="mb_content" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <th width="79">序&nbsp;号</th><th width="163.5">部门名称</th><th width="79">序&nbsp;号</th><th width="163.5">部门名称</th>
                  <th width="79">序&nbsp;号</th><th width="163.5">部门名称</th><th width="79">序&nbsp;号</th><th width="163.5">部门名称</th>
                </tr>
                <?php if(is_array($four_pear_apartment)): foreach($four_pear_apartment as $key=>$vo): ?><tr>
                    <?php if(is_array($vo)): foreach($vo as $key=>$vo1): ?><td><?php echo ($vo1["id"]); ?></td><td><a href="<?php echo U('Index/apartmentArticles',array('post_author'=>$vo1[id],'post_category'=>$post_category_final_account));?>"><?php echo ($vo1["user_login"]); ?></a></td><?php endforeach; endif; ?>
                  </tr><?php endforeach; endif; ?>
              </table>
            </li>
          </ul>
        </div>
      </div>
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