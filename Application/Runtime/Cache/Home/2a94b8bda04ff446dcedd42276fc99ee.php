<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<title>iPark | Web </title>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width,target-densitydpi=high-dpi,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link rel="stylesheet" type="text/css" href="/iPark/Public/Home/css/bootstrap-min.css">
  <link rel="stylesheet" type="text/css" href="/iPark/Public/Home/css/bootstrap-theme-min.css">
  <link rel="stylesheet" type="text/css" href="/iPark/Public/Home/fonts/font-awesome-4.3.0/css/font-awesome-min.css">
  <link rel="stylesheet" type="text/css" href="/iPark/Public/Home/css/bootstrap-min.css">
  <link rel="stylesheet" type="text/css" href="/iPark/Public/Home/css/bootstrap-min.css">
  <link rel="stylesheet" type="text/css" href="/iPark/Public/Home/css/Middle.css">
  
  <script type="text/javascript" src="/iPark/Public/Home/js/jquery-1.11.3.min.js"></script>
  <script src="/iPark/Public/Home/js/bootstrap.min.js"></script>
  <script src="/iPark/Public/Home/js/bootstrap.js"></script>

</head>
<body>

  <!-- Head Section -->
  <header>
    <div class="con">

      <!-- Title  -->
      <div id="tit" class="row">
        <div class="col-xs-2 col-md-2 col-lg-2"></div>
          <div id="act" class="col-xs-8 col-md-8 col-lg-8">
            <h1 style=" color: antiquewhite; margin:0; text-align:center;"> iPark!</h1>   
          </div>
         <div class="col-xs-2 col-md-2 col-lg-2"></div>
      </div>

      <!-- Search   -->
      <div id="se" class="row">
        <div class="col-xs-2 col-md-4 col-lg-4"></div>
          <div class="col-xs-8 col-md-4 col-lg-4">
            <div class="he" >  
            <form action="<?php echo U('Home/Parkinglot/search');?>" method="post">
              <div id="act" class="input-group" >
                <input type="text" class="form-control" name="name" placeholder="Location..." >
                <span class="input-group-btn">
                  <button class="btn btn-default">Go!</button>
                </span>
              </div>
            </form>
            </div>
          </div>
        <div class="col-xs-2 col-md-4 col-lg-4"></div>
      </div>
    </div>
  </header> 

  <!-- Intro Section -->
  <div>
    <div id="in" class="row">
      <div class="col-xs-2 col-md-2 col-lg-2"></div>
        <div id="act" class="col-xs-8 col-md-8 col-lg-8">
          <h3 style="text-align:center;">Why use iPark？</h3> 
        </div>
      <div class="col-xs-2 col-md-2 col-lg-2"></div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-md-3 col-lg-2"></div>
        <div id="act" class="col-xs-8 col-md-6 col-lg-8">
          <p style="text-align:center;font-family:'Open Sans Regular',sans-serif;font-size:102%;" >
            To help you save you time and economic costs!
          </p>
        </div>
      <div class="col-xs-2 col-md-3 col-lg-2"></div>
    </div> 
  </div>

  <!-- Button Section  -->
  <div>
    <div id="text" class"row">
      <div class="col-xs-0 col-md-3 col-lg-3"></div>
      <div class="col-xs-4 col-md-2 col-lg-2">
        <h3>Order</h3>
        <a href="<?php echo U('Home/Index/Order');?>">
          <img src="/iPark/Public/Home/img/calendar.svg" style="cursor:pointer;">
        </a>
      </div>
      <div class="col-xs-4 col-md-2 col-lg-2">
        <h3>Locate</h3>  
        <a href="<?php echo U('Home/Index/baiduMap');?>" >
          <img src="/iPark/Public/Home/img/location.svg" style="cursor:pointer;">
        </a> 
      </div>
      <div class="col-xs-4 col-md-2 col-lg-2">
        <h3>Help</h3>
        <a href="<?php echo U('Home/Index/help');?>" >
          <img src="/iPark/Public/Home/img/star.svg" style="cursor:pointer;">
        </a>
      </div>
      <div class="col-xs-0 col-md-3 col-lg-3"></div>
    </div>
  </div>

  <!-- Foot Section -->
  <footer>
    <div id="foot" class="row">

      <div class="col-xs-12 col-md-2 col-lg-2"></div>

      <div class="col-xs-12 col-md-4 col-lg-4">
        <ul style="margin-top:3%;">
          <li>
            Contact us
          </li>
          <li>
            <i class="fa fa-envelope"></i>
            e-mail: aoli_lady813@yahoo.com
          </li>
          <li>
            <i class="fa fa-wechat"></i>
            Wechat: iPark_wechat_group
          </li>
          <li>
            <i class="fa fa-qq"></i>
            QQ: groupnum:12345678
          </li>
        </ul>
      </div>

      <div class="col-xs-12 col-md-4 col-lg-4">
        <ul style="margin-top:3%;">
          <li style="margin-top:3%;">
            About us
          </li>
          <li>
            2015,iPark © by team
          </li>
          <li>
            ShenZhen,China
          </li>
        </ul>
      </div>

      <div class="col-xs-12 col-md-2 col-lg-2"></div>
    </div>
  </footer>
<script type="text/javascript">

</script>

</body>
</html>