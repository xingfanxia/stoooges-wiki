 <!-- links -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Pacifico" rel="stylesheet">
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.css" rel="stylesheet">
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- #footer-widgets -->
<?php if ( is_active_sidebar( 'st_footer_widgets' )) { ?>
<div id="footer-widgets" class="clearfix">
<!-- .ht-container -->
<div class="ht-container">

<div class="row stacked"><?php dynamic_sidebar( 'st_footer_widgets' ); ?></div>

</div>
</div>
<?php } ?>
<!-- /#footer-widgets -->

<!-- #site-footer -->
<footer>
  <div class="container">
    <div class="row" style="opacity: 1;">
      <div class="col-sm-4 col-sm-offset-3 text-center ">
        <p>© Copyright 2014 - 2016 三士渡教育 Stoooges Education<br>
          All rights are reserved. 400-999-8974, <a href="mailto:info@stoooges.com" target="_blank">info@stoooges.com</a><br>
          Web Design &amp; Development by <a href="http://www.areswang.com/" target="_blank">Ares Wang</a> and Kai Wang</p>
          <ul>
            <li><a href="tencent://message/?uin=568342428" target="_blank"><i class="fa fa-linux fa-2x"></i></a> QQ </li>
            <li><a href="http://page.renren.com/601865992" target="_blank"><i class="fa fa-renren fa-2x"></i></a> 人人 </li>
            <li><a href="http://weibo.com/5064877070" target="_blank"><i class="fa fa-weibo fa-2x"></i></a> 微博 </li>
            <li><a href="skype:StooogesEducation?chat" target="_blank"><i class="fa fa-skype fa-2x"></i></a> Skype </li>
          </ul> 
        </div>
        <div class="col-sm-4">
          <img src="http://stoooges.com/images/wechat.jpg" alt="">
        </div>
        <div class="col-sm-1">
        </div>
      </div>
    </div>
</footer>
<!-- /#site-footer -->

<!-- /#site-container -->
</div>

<?php wp_footer(); ?>
</body>
</html>