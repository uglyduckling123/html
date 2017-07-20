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
        <table class="article_introduce" cellspacing="0" cellpadding="0">
          <!--<tr>
            <td><b>索 引 号：</b>000747761/2016-00054</td>
            <td><b>主题分类：</b>财政、金融、审计</td>
          </tr>-->
          <tr>
            <td><b>发布机构：</b><?php echo ($data["post_source"]); ?></td>
            <td><b>发文日期：</b><?php echo ($data["post_modified"]); ?></td>
          </tr>
          <tr>
            <td><b>名&nbsp;&nbsp;称：</b><?php echo ($data["post_title"]); ?></td>
            <td></td>
          </tr>
          <tr>
            <td><b>文&nbsp;&nbsp;号：</b></td>
            <td><b>主 题 词：</b><?php echo ($data["post_keywords"]); ?></td>
          </tr>
        </table>
      </div>
      <div class="main_bottom">
        <div class="article_content">
          <?php if($data[post_category] == $post_category_bugget): ?><h4 class="article_title">定州市政府预算</h4>
            <?php else: ?>
            <h4 class="article_title">定州市政府决算</h4><?php endif; ?>
          <div class="article_text"><?php echo ($data["post_content"]); ?></div>
          <p class="article_print"><a href="javascript:window.print()">打印本页</a>&nbsp;&nbsp;&nbsp;<a href="javascript:window.close()">关闭窗口</a></p>
        </div>
        <div class="bottom_bar"></div>
      </div>
    </div><!--main-->
    <div class="bottom">
      <div class="copyright2">Copyright 2013 Ding Zhou China All Rights Reserved<br />
      本站由定州市信息化工作领导小组 定州市信息网络中心负责</div>
    </div><!--bottom-->
  </div><!--content-->
</body>
</html>