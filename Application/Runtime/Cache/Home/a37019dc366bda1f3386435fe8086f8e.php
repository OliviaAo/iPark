<?php if (!defined('THINK_PATH')) exit();?><html>

<title>ParkingLot Information | Web </title>
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
<link rel="stylesheet" type="text/css" href="/iPark/Public/Home/css/search.css">
<link rel="stylesheet" type="text/css" href="/iPark/Public/Home/css/ParkingLot.css">


<body>

 
	<!-- Head Section -->
  <header>
    	<div class="con">
      		<!-- Title  -->
      		<div id="tit" class="row">
      			<div id="tit" class="col-xs-12 col-md-12 col-lg-12"></div>
        		<div id="act" class="col-xs-12 col-md-12 col-lg-12">
          			<h3 style=" color: antiquewhite; margin:0; text-align:center;"> Parking Information ~</h3>   
        		</div>
      		</div>
      	</div>
  </header>

  <!-- Information Block -->
  <div class="inf">
    	<div class="row">

        <div class="col-xs-12 col-md-12 col-lg-12" style="height:10%;"></div>
    		<div class="col-md-1 col-lg-1" ></div>

        <div id="t1"class="col-xs-12 col-md-4 col-lg-4">
          <h4>Parking Lot Inf</h4>
          <img src="/iPark/Public/Home/img/car.png" >
          <?php if(is_array($parks)): $i = 0; $__LIST__ = $parks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$park): $mod = ($i % 2 );++$i;?><h4 style="text-align:left;">ID: <?php echo ($park['id']); ?></h4>
          <h4 style="text-align:left;">Name: <?php echo ($park['name']); ?> </h4>
          <h4 style="text-align:left;">Address: <?php echo ($park['country']); echo ($park['province']); echo ($park['city']); ?> <?php echo ($park['district']); echo ($park['block']); echo ($park['community']); ?></h4>
          <h4 style="text-align:left;">Distance: <?php echo ($park['distance']); ?> </h4>
          <h4 style="text-align:left;">Price: <?php echo ($park['price']); ?></h4><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

        <div class="col-xs-2 col-md-2 col-lg-2"></div>

        <div id="t2" class="col-xs-12 col-md-4 col-lg-4">
          <h4>Parking Space Inf</h4>
          <img src="/iPark/Public/Home/img/Lot.png">
          <h4 style="text-align:left;">Spaces: <?php echo ($sp_info['spaces']); ?>  </h4>
          <h4 style="text-align:left;">Rest Spaces: <?php echo ($sp_info['rest']); ?> </h4>
          <h4 style="text-align:left;">Order Status:  </h4>
        </div>

        <div class="col-md-1 col-lg-1"></div>
    	</div>
  </div>

  <div class="show_Me">

        <!-- Map Display Block  -->
        <div class="showMap">
          <div>
            <div class="row">
              <div class="col-xs-12 col-md-12 col-lg-12" style="height:10vh;"></div>
              <div class="col-xs-12 col-md-12 col-lg-12">
                <h4 id="sh3" style="text-align:center; font-size:250%;">Parking Lot Map Display</h4>
              </div>
            </div>
          </div>

          <div style="margin-top:20px;">
            <div class="row">
              <div class="col-xs-3 col-md-3 col-lg-3"></div>
              <div id="sh4" class="map col-xs-6 col-md-6 col-lg-6">
                <div class="po1" style="cursor:pointer;" onclick="isHidden('sh1','sh2','sh3','sh4')"></div>
                <div class="po2" style="cursor:pointer;"></div>
                <div class="po3" style="cursor:pointer;"></div>
                <div class="po4" style="cursor:pointer;"></div>
                <div class="po5" style="cursor:pointer;"></div>
                <div class="po6" style="cursor:pointer;"></div>
                <div class="po7" style="cursor:pointer;"></div>
                <div class="po8" style="cursor:pointer;"></div>
                <div class="po9" style="cursor:pointer;"></div>
                <div class="po10"></div>
           
              </div>
              <div class="col-xs-3 col-md-3 col-lg-3"></div>
            </div>
          </div>
        </div>

        <!-- Real-Time Display Block  -->
        <div class="showReal">
          <div>
            <div class="row">
              <div class="col-xs-12 col-md-12 col-lg-12" style="height:10vh;"></div>
              <div class="col-xs-12 col-md-12 col-lg-12">
                <h4 id="sh1" style="text-align:center; font-size:250%; cursor:pointer"onclick="isHidden('sh3','sh4','sh1','sh2')">Space Real-Time Display</h4>
              </div>
            </div>
          </div>

          <div style=" margin-top:20px;">
            <div class="row">
              <div class="col-xs-3 col-md-3 col-lg-3"></div>
              <div id="sh2" class="realTime col-xs-6 col-md-6 col-lg-6">

              <div class="con1">

                <div class="gap1"></div>

                <!-- SpaceId:1  -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space1 status-<?php echo ($vo['spstatus']); ?>" >
                      <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap1"></div>

                 <!-- SpaceId:2  -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space1 status-<?php echo ($vo['spstatus']); ?>" >
                      <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap1"></div>

                <!-- Back space -->
                <!-- SpaceId:50~66  -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,49,16,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space1 status-<?php echo ($vo['spstatus']); ?>" >
                      <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
              

              <div class="con2"> 

                <!-- SpaceId:34~41 -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,33,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space2 status-<?php echo ($vo['spstatus']); ?>" >
                      <div style="font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
              

              <div class="con3">

                <!-- SpaceId: 3~4 -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,2,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap1"></div>

                <!-- SpaceId: 5~8- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap1"></div>

                <!-- Back space -->
                <!-- SpaceId: 66~68-->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,65,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap1"></div>

                <!-- Back space -->
                <!-- SpaceId: 69~71- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,68,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap1"></div>

                <!-- Back space -->
                <!-- SpaceId: 72~75-->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,71,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>


              <div class="con4">

                <!-- SpaceId: 9~10-->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,8,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap1"></div>
                
                <!-- SpaceId: 11~14- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,10,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
             
                <div class="gap1"></div>

                <!-- Back space -->
                <!-- SpaceId: 76~78- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,75,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap1"></div>

                <!-- Back space -->
                <!-- SpaceId: 79~81- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,78,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
             
                <div class="gap1"></div>

                <!-- Back space -->
                <!-- SpaceId: 82~85-->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,81,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space3 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>


              <div class="con5">

                <!-- SpaceId: 15~16- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,14,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space5 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap2"></div>

                <!-- SpaceId: 17~20- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,16,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space5 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap2"></div>

                <!-- Back space -->
                <!-- SpaceId: 86~88- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,85,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space5 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap2"></div>

                <!-- Back space -->
                <!-- SpaceId: 89~90- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,88,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space5 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>

              <div class="con6">

                <!-- SpaceId: 21~22-->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,20,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space5 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
             
                <div class="gap2"></div>

                <!-- SpaceId: 23~26- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,22,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space5 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap2"></div>

                <!-- Back space -->
                <!-- SpaceId: 91~93-->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,90,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space5 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
             
                <div class="gap2"></div>

                <!-- Back space -->
                <!-- SpaceId: 94~95-->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,93,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space5 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>


              <div class="con7">
                
                <!-- Back space -->
                <!-- SpaceId: 96~98-->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,95,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space4 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>


              <div class="con8">

                <div class="gap2"></div>

                <!-- SpaceId: 27~30 -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,26,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space6 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="gap2"></div>
                <div class="gap2"></div>

                <!-- SpaceId: 31~33 -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,30,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space6 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="padding-top:50%;font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>

              <div class="con9">

                <!-- Back space -->
                <!-- SpaceId: 99~100- -->
                <?php if(is_array($sp)): $i = 0; $__LIST__ = array_slice($sp,98,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($vo['spid']); ?>" class="space7 status-<?php echo ($vo['spstatus']); ?>" >
                    <div style="font-size: 70%;"><?php echo ($vo['spid']); ?></div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
              </div>
              <div class="col-xs-3 col-md-3 col-lg-3"></div>
            </div>
          </div>
        </div>
  </div> 

  <div style="height:10%">
  </div>


  <script type="text/javascript">

      function isHidden(oDiv1,oDiv2,oDiv3,oDiv4){
        var vDiv1 = document.getElementById(oDiv1);
        var vDiv2 = document.getElementById(oDiv2);
        var vDiv3 = document.getElementById(oDiv3);
        var vDiv4 = document.getElementById(oDiv4);
        // vDiv1.style.display = (vDiv1.style.display == 'none')?'block':'none';
        vDiv1.style.display = 'block';
        vDiv2.style.display = 'block';
        vDiv3.style.display = 'none';
        vDiv4.style.display = 'none';
       }

       $(document).ready(function(){

      var PL_ID = <?php echo ($park['id']); ?>;
      var interval_id = window.setInterval(function(){

        for(var i = 1; i<=100; i++){
          $.post("<?php echo U('Home/Parkinglot/getStatus');?>", {"PL_ID":PL_ID, "SP_ID":i }, function(result){
            // alert(result);
            var arr = result.split(";");
            for(var j = 0; j<arr.length-1;j++){
              var space = arr[j].split(",");
              $('#s'+space[0]).removeClass("status-0 status-1").addClass(space[1]);
            }

          });
        }

      }, 2000);
    });
  </script>

</body>
</html>