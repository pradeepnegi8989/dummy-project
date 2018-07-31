<?php include('data.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bootstrap</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap/css/animate.css"/>
<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/font/css/font-awesome.min.css"> 
<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap/js/shrink.js"></script>
<script src="jquery.singlePageNav.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet"> 
 </head>
<body>
<script>
   $(document).ready(function(){
    if ( ! window.console ) console = { log: function(){} };
            $('.subMenu').singlePageNav({
                offset: $('.subMenu').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
          })
          });
          
   </script>
 <!-- navigation -->
 <div class="scroll-top"><i class="fa fa-arrow"></i></div>
 <div class="subMenu">
 <div id="myNavbar" class="navbar navbar-default navbar-fixed-top " role="navigation">
  
   <div class="container">
      <!-- logo part -->
       
      <!-- end logo part -->
     <div class="navbar-header ">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
       </button>
       <a href="#" class="navbar-brand">Negi Portfolio</a>
     </div>
     <div class="navbar-collapse collapse">
       <ul class="nav navbar-nav navbar-right">
           <li><a href="#">home</a></li>
           <li><a href="#service">Service</a></li>
           <li><a href="#pricing">Pricing</a></li>
           <li><a href="#team">Team</a></li>
           <li><a href="#clint">Client</a></li>
           <li><a href="#contact">contact</a></li>
       </ul>
     </div>
  </div>
 </div>
</div> 
 <!-- navigation end-->
 <div id="header" class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 wow bounceInLeft">
           <h1>responsive design</h1>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> 
           <button class="btn btn-primary">Read more </button>
           <button class="btn btn-success">contact </button>  
        </div>
        <div class="col-md-6 wow bounceInRight">
            <img src="images/img1.png" class="img-responsive">
        </div>
        
      </div>
    </div>
 </div>
 <!-- end header -->
 <div id="service" class="services">
   <div class="container">
     <h2 class="wow fadeInUp">Services</h2>
     <p class="wow fadeInUp" data-wow-delay="0.4s"> Website Design Services</p>
       <div class="row">
         <div class="col-md-3 col-sm-6 wow bounceInLeft" data-wow-delay="1s">
           <i class="fa fa-desktop"></i>
           <h4>Web Design </h4>
           <p> My name is Pradeep negi</p>
         </div>
         <div class="col-md-3 col-sm-6 wow bounceInLeft" data-wow-delay="0.8s">
           <i class="fa fa-mobile"></i>
           <h4>Web Design </h4>
           <p class="wow fadeInUp" data-wow-delay="0.4s"> My name is Pradeep negi</p>
          </div>
         <div class="col-md-3 col-sm-6 wow bounceInLeft" data-wow-delay="0.6s">
           <i class="fa fa-database"></i>
           <h4>Web Design </h4>
           <p> My name is Pradeep negi</p>
         </div>
         <div class="col-md-3 col-sm-6 wow bounceInLeft" data-wow-delay="0.4s">
           <i class="fa fa-university"></i>
           <h4>Web Design </h4>
           <p class="wow fadeInUp" data-wow-delay="0.4s"> My name is Pradeep negi</p>
         </div>
        </div>  
   </div>
 </div>
 <!--end services-->
 <div id="pricing" class="pricing">
   <div class="container">
     <div class="row">
       <h2 class="wow fadeInUp">Pricing</h2>
       <p class="wow fadeInUp" data-wow-delay="0.4s">there are all types of prices</p>
       <div class="col-md-3 col-sm-6 wow flipInY" data-wpw-delay="0.8s">
         <div class="packages">
         <h4>Bronze</h4>
         <h1>9.99</h1>
         <b>Monthly</b>
         <p class="wow fadeInUp" data-wow-delay="0.4s"> my name is pradeep negi i belong to uttarakhand</p>
         <hr>
         <li>100 users</li>
         <li> Ssl Certificate </li>
         <li>Online Support</li>
         <li>300 Gb Diskspace </li>
         <li>100 Email Addresses</li>
         <li>my Sql Database</li>
         <button class="btn btn-success">Get Started</button>
       </div>
     </div>
     <div class="col-md-3 col-sm-6 wow flipInY" data-wpw-delay="0.6s">
         <div class="packages">
         <h4>Silver</h4>
         <h1>9.99</h1>
         <b>Monthly</b>
         <p> my name is pradeep negi i belong to uttarakhand</p>
         <hr>
         <li>100 users</li>
         <li> Ssl Certificate </li>
         <li>Online Support</li>
         <li>300 Gb Diskspace </li>
         <li>100 Email Addresses</li>
         <li>my Sql Database</li>
         <button class="btn btn-success">Get Started</button>
       </div>
     </div>
     <div class="col-md-3 col-sm-6 wow flipInY" data-wpw-delay="0.4s">
         <div class="packages">
         <h4>Gold</h4>
         <h1>9.99</h1>
         <b>Monthly</b>
         <p class="wow fadeInUp" data-wow-delay="0.4s"> my name is pradeep negi i belong to uttarakhand</p>
         <hr>
         <li>100 users</li>
         <li> Ssl Certificate </li>
         <li>Online Support</li>
         <li>300 Gb Diskspace </li>
         <li>100 Email Addresses</li>
         <li>my Sql Database</li>
         <button class="btn btn-success">Get Started</button>
       </div>
     </div>
     <div class="col-md-3 col-sm-6 wow flipInY" data-wpw-delay="0.2s">
         <div class="packages">
         <h4>Premium</h4>
         <h1>9.99</h1>
         <b>Monthly</b>
         <p class="wow fadeInUp" data-wow-delay="0.4s"> my name is pradeep negi i belong to uttarakhand</p>
         <hr>
         <li>100 users</li>
         <li> Ssl Certificate </li>
         <li>Online Support</li>
         <li>300 Gb Diskspace </li>
         <li>100 Email Addresses</li>
         <li>my Sql Database</li>
         <button class="btn btn-success">Get Started</button>
       </div>
     </div>
   </div>
 </div>
</div> 
 <!-- end pricing -->
 <div id="team" class="team">
      <div class="container">
        <div class="row">
          <h2 class="wow fadeInUp">Meet our Team</h2>
          <p class="wow fadeInUp" data-wow-delay="0.4s"> my name is pradepe negi i belong to uttarakhad </p>
           <div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="2s">
             <img src="images/img1.jpg">
             <h4>Pradeep Negi</h4>
             <b>Graphic Designer</b>
             <p>My name is pradeep negi i am graphic designer</p>
             <a href="#"><i class="fa fa-facebook"></i></a>
             <a href="#"><i class="fa fa-twitter"></i></a>
             <a href="#"><i class="fa fa-linkedin"></i></a>
             <a href="#"><i class="fa fa-pinterest"></i></a>
           </div>
           <div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="1.6s">
             <img src="images/img1.jpg">
             <h4>Pradeep Negi</h4>
             <b>Graphic Designer</b>
             <p>My name is pradeep negi i am graphic designer</p>
             <a href="#"><i class="fa fa-facebook"></i></a>
             <a href="#"><i class="fa fa-twitter"></i></a>
             <a href="#"><i class="fa fa-linkedin"></i></a>
             <a href="#"><i class="fa fa-pinterest"></i></a>
           </div>
           <div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="1.2s">
             <img src="images/img1.jpg">
             <h4>Pradeep Negi</h4>
             <b>Graphic Designer</b>
             <p>My name is pradeep negi i am graphic designer</p>
             <a href="#"><i class="fa fa-facebook"></i></a>
             <a href="#"><i class="fa fa-twitter"></i></a>
             <a href="#"><i class="fa fa-linkedin"></i></a>
             <a href="#"><i class="fa fa-pinterest"></i></a>
           </div>
           <div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="0.8s">
             <img src="images/img1.jpg">
             <h4>Pradeep Negi</h4>
             <b>Graphic Designer</b>
             <p class="wow fadeInUp" data-wow-delay="0.4s">My name is pradeep negi i am graphic designer</p>
             <a href="#"><i class="fa fa-facebook"></i></a>
             <a href="#"><i class="fa fa-twitter"></i></a>
             <a href="#"><i class="fa fa-linkedin"></i></a>
             <a href="#"><i class="fa fa-pinterest"></i></a>
           </div>
        </div>
      </div>
 </div>
 <!-- end team section -->
 <div id="clint" class="clint">
  <div class="head">
   <div class="container">
      <div class="row">
         <h2 class="wow fadeInUp">Trusted By</h2>
         <p class="wow fadeInUp" data-wow-delay="0.4s">All Companies Are Satisfied from our work</p>
         <div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="2s">
             <li><img src="images/logo/logo1.png"></li>
             <h4> a&E corporation</h4>
         </div>
         <div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="1.6s">
             <li><img src="images/logo/logo2.png"></li>
             <h4> Modern Terminals</h4>
         </div>
         <div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="1.2s">
             <li><img src="images/logo/logo3.png"></li>
             <h4> Ktm</h4>
         </div>
         <div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="0.8s">
             <li><img src="images/logo/logo4.png"></li>
             <h4> shisido</h4>
         </div>
      </div>
   </div>
   </div>   
 </div>
 <!-- end client section-->


  <div id="contact" class="contact">
    <div class="container">
      <div class="row">
         <h2 class="wow fadeInUp">contact</h2>
         <p class="wow fadeInUp" data-wow-delay="0.4s">our contact form </p>
        <!-- mainform start -->
        <form name="frm" method="post">
         <div class="col-md-6">
           
           <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
              <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" area-descricbedby="sizaing-addon1" placeholder="Full name" required="required" name="nm" >
              <span class="error"><?= $nm_error ?></span>
           </div>
           <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
              <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-envelope"></i></span>
              <input type="text" class="form-control" area-descricbedby="sizaing-addon1" placeholder="Email Address" required="required" name="eml">
              <span class="error"><?= $eml_error ?></span>
           </div>
           <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
              <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-phone"></i></span>
              <input  type="text" class="form-control" area-descricbedby="sizaing-addon1" placeholder="Phone Number" required="required" name="mb" maxlength="12">
              <span class="error"><?= $mb_error ?></span>
           </div>
        </div>
         <div class="col-md-6 wow fadeInUp" data-wow-delay="2s">
           <div class="input-group">
               <textarea name="" id="" cols="80" rows="6" class="form-control" placeholder="message" name="msgs"></textarea>
               <span class="error"><?= $msgs_error ?></span>
           </div>
           <button class="btn btn-lg btn-success" name="submit">submit</button>
         </div> 
       </form>
       <!-- end form -->
      </div>
    </div>
  </div>
  <!-- end contact -->

  <!-- transform swew start -->
    <div class="parral">
      <div class="container">
          <div class="col-md-6">
             <h1>responsive design</h1>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> 
           <button class="btn btn-primary">Read more </button>
           <button class="btn btn-success">contact </button> 
          </div>
          <div classs="col-md-6">
             <h1>responsive design</h1>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> 
           <button class="btn btn-primary">Read more </button>
           <button class="btn btn-success">contact </button> 
          </div>
      </div>
    </div>
  <!-- end transform skew -->
  <div id="footer" class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h4>contact us</h4>
            <p class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-home"></i> 3/86-86 khichripur, new delhi</p>
            <p class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-envelope"></i> parrung128@gmail.com</p>
            <p class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-phone"></i> 9958822160</p>
            <p class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-globe"></i> <a href="http://www.pradeepnegi.16mb.com" target="_blank">www.pradeepnegi.16mb.com</a></p>
        </div>
        <div class="col-md-4 col-sm-4">
           <h4>ABOUT</h4>
           <p class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-square-o"></i> about us</p>
           <p class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-square-o"></i> privacy</p>
           <p class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-square-o"></i> term &amp; conditions</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <h4>Stay in Touch</h4>
          <i class="social fa fa-facebook"></i>
          <i class="social fa fa-twitter"></i>
          <i class="social fa fa-linkedin"></i>
          <i class="social fa fa-pinterest"></i>
          <i class="social fa fa-youtube"></i><br>
          <input type="email" placeholder="subscribe for Updates">
          <button class="btn btn-success">Subscribe</button>
        </div> 
      </div>
    </div>
  </div>

 <!-- jquery link -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!--<script src="https://use.fontawesome.com/be8b45be1c.js"></script>-->
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <script src="bootstrap/js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
  <script>
      $(window).load(function(){
                $('#onload').modal('show');
            });
  </script>
 <!-- onload-->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>Your title goes here</h4>
        </div>
         <!-- form -->
               

                           <form method="POST"  role="form" id="frm">
                                    <h3>Call +91-9718 388 999 </h3>
                                <div class="form-group"><input type="text" name="name" class="form-control" required="required" placeholder="Name"></div>
                                <div class="form-group"><input type="text" name="email" class="form-control" required="required" placeholder="Email"></div>
                                <div class="form-group"><input type="text" name="phone" class="form-control" required="required" placeholder="Phone"></div>
                                <div class="form-group"><input type="text" name="message" class="form-control" required="required" placeholder="Message"></div>
                                <div class="form-group"><button type="submit" class="btn btn-success btn-block btn-lg">Submit</button></div>
                           </form>
                       
               
                        
            <!-- form -->
        
      </div>

    </div>
    
 <!-- end onload -->
</body>
</html>
