 <?php include('header.php'); ?>
  <!--autorization-->
  <div class="add_place none" id="autorized">
    <div class="place_form login_form">
      <i class="fa fa-times close_window" id="closeau"></i>
      <h3>Login Here</h3>
      <p>
      <form>
      </p>
        
        <label>Matric No: <input type="text"></label>
        <label>Password: <input type="text"></label>
        <!-- <label><input type="checkbox">Remember me</label> -->
        <a href="#" class="btn btn-success">submit</a>
        <!-- <a href="#" class="btn btn-primary"><i class="icon-facebook"></i>Log in with Facebook</a> -->
      <a href="#">Forgot Password</a>
      </form>
    </div>
  </div>



 

  <!-- Site Overlay -->
  <div class="site-overlay"></div>
  <div id="container">
    <div class="top_promo_block" id="promo_head">
      <!-- <div class="menu-btn">&#9776;<span>5</span></div> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header_promo">
              <img src="img/start/logo.png" alt="#">
              <a href="#" class="log_btn ">Log in</a>
            </div>
          </div>

        </div>
              <form id="signup_user" class="form-signin" method="post">
      <h3 class="form-signin-heading"><i class="icon-lock"></i> Sign up as New User</h3>
      <input type="text" class="input-block-level" id="firstname" name="firstname" placeholder="Firstname" required><p>
      <input type="text" class="input-block-level" id="lastname" name="lastname" placeholder="Lastname" required></p>
      <input type="text" class="input-block-level" id="username"  value="" name="username" placeholder="Username" required><p>
      <input type="password" class="input-block-level" id="password" value="" name="password" placeholder="Password" required></p>
      <input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Re-type Password" required><p>
      <textarea class="input-block-level" id="about" name="about" placeholder="about me" required></textarea></p>
      <button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Sign up</button>
      </form>
      </div>
      </div>
      
    </div>


   





  <!--
#################################
- SCRIPT FILES -
#################################
-->
<!--Google maps API linl-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!--scroll animate block-->
<script src="js/wow.min.js"></script>
<!--Other main scripts-->
<script src="js/all_scr.js"></script>
<!--Bootstrap js-->  
<script src="js/bootstrap.min.js"></script>
<!--Map js-->
<script type="text/javascript" src="js/map_index.js"></script>
<script type="text/javascript" src="js/infobox.js"></script>
<!--Slider Revolution-->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!--Parallax-->
<script type="text/javascript" src="js/jquery.parallax-0.2-min.js"></script>

<!--scroll animation-->
<script>
new WOW().init();
</script>

<!--Slider revolution settings-->
<script type="text/javascript">
"use strict";
jQuery(document).ready(function() {
  jQuery('.tp-banner').show().revolution(
  {
    dottedOverlay:"none",
    delay:16000,
    startwidth:1170,
    startheight:700,
    hideThumbs:200,
    thumbWidth:100,
    thumbHeight:50,
    thumbAmount:5,
    navigationType:"bullet",
    navigationArrows:"solo",
    navigationStyle:"preview4",
    touchenabled:"on",
    onHoverStop:"on",
    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,
    parallax:"scroll",
    parallaxBgFreeze:"on",
    parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
    keyboardNavigation:"off",
    navigationHAlign:"center",
    navigationVAlign:"bottom",
    navigationHOffset:0,
    navigationVOffset:20,
    soloArrowLeftHalign:"left",
    soloArrowLeftValign:"center",
    soloArrowLeftHOffset:20,
    soloArrowLeftVOffset:0,
    soloArrowRightHalign:"right",
    soloArrowRightValign:"center",
    soloArrowRightHOffset:20,
    soloArrowRightVOffset:0,
    shadow:0,
    fullWidth:"on",
    fullScreen:"off",
    spinner:"spinner4",
    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,
    shuffle:"off",
    autoHeight:"off",           
    forceFullWidth:"off",           
    hideThumbsOnMobile:"off",
    hideNavDelayOnMobile:1500,            
    hideBulletsOnMobile:"off",
    hideArrowsOnMobile:"off",
    hideThumbsUnderResolution:0,
    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    startWithSlide:0,
    videoJsPath:"rs-plugin/videojs/",
    fullScreenOffsetContainer: "" 
  });
}); //ready
</script>

<!--Parallax house-->
<script type="text/javascript">
"use strict";
$('.categori_block').parallax({
  'elements': [
  {
    'selector': '.categori_block',
    'properties': {
      'x': {
        'background-position-x': {
          'initial': 0,
          'multiplier': 0.1,
          'invert': true
        }
      },
      'y': {
        'background-position-y': {
          'initial': -780,
          'multiplier': 0.1,
          'invert': true
        }
      }
    }
  }
  ]
});
</script>

<script type="text/javascript">
"use strict";
setHeiHeight(); 
$(window).resize( setHeiHeight ); 
</script>

</body>
</html>