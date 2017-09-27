
<!DOCTYPE html>
<html>
<head>

    <!--
        Customize this policy to fit your own app's needs. For more guidance, see:
            https://github.com/apache/cordova-plugin-whitelist/blob/master/README.md#content-security-policy
        Some notes:
            * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
            * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
            * Disables use of inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
                * Enable inline JS: add 'unsafe-inline' to default-src
        -->
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *">

    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Your app title -->
    <title>My App</title>

    <!-- This template defaults to the iOS CSS theme. To support both iOS and material design themes, see the Framework7 Tutorial at the link below:
        http://www.idangero.us/framework7/tutorials/maintain-both-ios-and-material-themes-in-single-app.html
     -->

    <link rel="stylesheet" href="lib/framework7/css/framework7.ios.min.css">
    <link rel="stylesheet" href="lib/framework7/css/framework7.ios.colors.min.css">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
body{
background-image: url('img/wood.jpg');
//background-size: cover;
 //color:white
}
    body{
background-image: url('img/wood.jpg');
//background-size: cover;
 //color:white
}
.cat{
margin-bottom: 0px;
padding-bottom: 0px;
}

  .fa-arrow-circle-o-left{

  color: white;font-size: 30px;border:3px solid #ae6137;border-radius: 60px;
}  

body{
background-image: url('img/wood.jpg');
//background-size: cover;
 //color:white
}
.cat{
margin-bottom: 0px;
padding-bottom: 0px;
}

 .fa-arrow-circle-o-left, .fa-arrow-circle-o-right{

  color: white;font-size: 30px;border:3px solid #ae6137;border-radius: 60px;
} 
@media(max-width: 320px){
 #ad{font-size:12px;

}
} 
@media(max-width: 240px){
 #ad{font-size:7px;
  padding-left: 0;
}
} 
@media(max-width: 425px){
  .hidden-1{
    visibility: hidden;
  
    height: 0px;
   
  }
#uchat{
  font-size: 13px;
}
}
@media(min-width: 426px){
  .hidden-2{
    visibility: hidden;
  
    height: 0px;
   
  }
   
}
@media(max-width: 425px){
#checked{
  width: 100%;

}
#checked1{
  width: 100%;
margin: 0;
padding: 0;
text-align: center

}
}
h6, h5{
margin-top: 0px;
padding-top: 0px;
border:3px solid #a1692e;
border-top:none;
border-radius: 4px;
color:white;
text-transform: uppercase;
text-align: center;
  }
  .navbar{
    background: #a1692e
  }
  .img-thumbnail{
    border: 3px solid #a1692e;
  }
</style> 
   
</head>

<body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class="statusbar-overlay"></div>

    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal" style="background:white ;">
        
            <a href="#" class="list-group-item active"> 
   MENU
</a> 
<a href="#" class="list-group-item">Whats for sale</a> 
<a href="#" class="list-group-item">sell</a> 

<a href="#" class="list-group-item">Advertise your products</a>
       <ul class="list-group"> 
   <li class="list-group-item">Free Domain Name Registration</li> 
   <li class="list-group-item">Free Window Space hosting</li> 
   <li class="list-group-item">Number of Images</li> 
   <li class="list-group-item">24*7 support</li> 
   <li class="list-group-item">Renewal cost per year</li> 
     <li class="list-group-item">

<div class="dropdown" style="padding: 0px;margin: 0px;width: 100%"> 
   <p  class="btn dropdown-toggle" id="dropdownMenu1"  
      data-toggle="dropdown" style="margin: 0px; padding: 0px;"> 
      Topics 
      <span class="caret"></span> 
   </p> 
   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="margin: 0px; margin-left: 0px; padding: 0px; width:100%"> 
      <li role="presentation"> 
         <a role="menuitem" tabindex="-1" href="#">Java</a> 
      </li> 
       <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" tabindex="-1" href="#">Data Mining</a> 
      </li> 
     
      <li role="presentation" class="divider"></li> 
      <li role="presentation"> 
         <a role="menuitem" tabindex="-1" href="#">Separated link</a> 
      </li> 
   </ul> 
</div>


     </li>
</ul> 




    </div>

    <!-- Views -->
    <div class="views" style="background-image: url('img/wood.jpg');">
        <!-- Your main view, should have "view-main" class -->
        <div class="view view-main">
            <!-- Top Navbar-->
            <div class="navbar">
                <div class="navbar-inner">
                    <!-- We need cool sliding animation on title element, so we have additional "sliding" class -->
                    <div class="center sliding"><h2>Student Hub</h2></div>
                    <div class="right">
                        <!--
                          Right link contains only icon - additional "icon-only" class
                          Additional "open-panel" class tells app to open panel when we click on this link
                        -->
                        <a href="#" class="link icon-only open-panel"><i class="icon icon-bars"></i></a>
                    </div>
                </div>
            </div>
            <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
            <div class="pages navbar-through toolbar-through" style="background-image: url('img/wood.jpg'); background-color:none">
                <!-- Page, "data-page" contains page name -->
                <div data-page="index" class="page" style="background-image: url('img/wood.jpg'); background-color:none">
                    <!-- Scrollable page content -->
                    <div class="page-content">
                          <div class="col-xs-12 hidden-1 " style="background: black;">
                        <div class="col-xs-4  col-sm-3 col-md-2 ">
                          <a  href="intro2" >
                            <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-back">Back</button>
                          </a> 
                        </div>
                         <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-6 col-md-2 col-md-offset-8">
                          <a  href="intro2" >
                            <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-home">Home</button>
                          </a> 
                        </div>
                      </div> 
                      <div class="col-xs-12 hidden-2" style="background: black">
                        <div class="col-xs-3  col-sm-3 ">
                          <a  href="intro2" >
                            <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-notext ui-icon-back"></button>
                          </a> 
                        </div>
                         <div class="col-xs-3 col-xs-offset-6 col-sm-3 col-sm-offset-6 ">
                          <a  href="intro2" >
                            <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-notext ui-icon-home"></button>
                          </a> 
                        </div>
                      </div> 
                        <div class="content-block">
                            
                            
                           <div class="panel-body"> 
    <center>Please login or register if you are new</center>

  <ul id="myTab" class="nav nav-tabs"> 
   <li ><a href="#login" data-toggle="tab"> 
      <button class="btn btn-danger "> <i class="fa fa-user-circle-o"></i> Login</button></a> 
   </li> 
   
   <li class="pull-right"><a href="#register" data-toggle="tab"><button class="btn btn-warning"><i class="fa fa-sign-in"> </i> Register</button></a></li> 
   
</ul> 

<div id="myTabContent" class="tab-content" style="padding-top:10px;"> 
   <div class="tab-pane fade in active" id="home"> 
      <h4>Please read the following instructions:<br/></h4>
    <p>  1. 
    </p>
    </div> 
   
   <div class="tab-pane fade " id="login">
         <div class="col-sm-8 col-sm-offset-2">
    
   <form class="form-horizontal" role="form"> 
   
   <div class="input-group input-group-lg has-success"> 
         <span class="input-group-addon"><i class="fa fa-user"></i></span> 
         <input type="text" class="form-control" placeholder="Username"> 
    </div>
    <br/> 
   <div class="input-group input-group-lg" has-success> 
         <span class="input-group-addon"><i class="fa fa-key"></i></span> 
         <input type="text" class="form-control" placeholder="Password"> 
    </div> 
 <br/>

   <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10"> 
         <button type="submit" class="btn btn-default">Sign in</button> 
      </div> 
   </div> 
</form>
</div> 

   </div>
   
   
   <div class="tab-pane fade" id="register"> 
           <div class="col-sm-8 col-sm-offset-2">
    
   <form action='#' id="myForm" method='post' name="myForm">
  <div class="input-group input-group-lg has-success"> 
         <span class="input-group-addon"><i class="fa fa-user"></i></span> 
         <input type="text" class="form-control" name="fname" placeholder="Name"> 
    </div>
    <br/>
   <div class="input-group input-group-lg has-success" id="email"> 
         <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 
         <input  class="form-control"  id='email1' name='username' onblur="validate('email', this.value)" name="email" placeholder="Email" type="email"> 
    </div>
    <div id='email'></div>
    <br/>
   <div class="input-group input-group-lg has-warning" id="phone"> 
         <span class="input-group-addon"><i class="fa fa-phone"></i></span> 
         <input type="number" class="form-control"  id='phone1'  onblur="validate('phone', this.value)" name="phone" placeholder="Phone Number"> 
    </div>
    <div id='phone'></div> 
    <br/>
    
   <div class="input-group input-group-lg has-warning"> 
         <span class="input-group-addon"><i class="fa fa-user"></i></span> 
         <input type="text" class="form-control" id='username1' name='username' onblur="validate('username', this.value)" placeholder="Username"> 
    </div> 
    <div id='username'></div>
    <br/> 
    <div class="input-group input-group-lg has-success has-error" id="password"> 
         <span class="input-group-addon"><i class="fa fa-key"></i></span> 
         <input type="password" class="form-control"  id='password1' name='username' onblur="validate('password', this.value)" name="password" placeholder="password"> 
    </div>
    <div id='password'></div> 
    <br/> 
    <div class="input-group input-group-lg has-success has-error"> 
         <span class="input-group-addon"><i class="fa fa-key"></i></span> 
         <input type="password" class="form-control" name="conpass" placeholder="Confirm Password"> 
    </div> 
    <br/> 
  <div class="form-group">
  <div class="col-xs-2" id="checked">
      <input type="checkbox"  class=" form-control" value="option3"> 
    </div>
      <div class="col-xs-10" id="checked1" style="color:white;">I agree to terms and conditions</div>
 </div>
        
 </form></div> 

   </div> 
   </div> 
<script> 
   $(function () { 
      $('#myTab li:eq(1) a').tab('show'); 
   }); 
</script>
  </div> 
  
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Toolbar-->
            <div class="toolbar">
             
                    <!-- Toolbar links -->
                  <center>&copy; 2017 Students Hub</center>  
               
            </div>
        </div>
    </div>
   
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="cordova.js"></script>
    <script type="text/javascript" src="lib/framework7/js/framework7.min.js"></script>
    <script type="text/javascript" src="js/my-app.js"></script>  
</body>

</html>