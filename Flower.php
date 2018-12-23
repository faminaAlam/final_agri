<!DOCTYPE html>
<html>
  <head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agriculture System</title>
    
    
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.css">
   <link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

   <link rel="stylesheet"  href="font-awesome-4.7.0/css/font-awesome.min.css">


   <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="style1.css">
      <link rel="stylesheet" type="text/css" href="style2.css">
  </head>



  <body>

        
     <nav class="navbar navbar-default" data-spy="affix" data-offset-top="197"  id="b">
      <div class="container" id="bar" >


        <!--collapse navbar button--> 
        <button type="button" class="navbar-toggle"data-toggle="collapse" data-target="#navi">

          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>







        </button>
        <!--end collapse navbar button--> 




    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" id="A">Agriculture System </a></h1>
    </div>


    <div class="collapse navbar-collapse" id="navi">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="about_us.php">About Us</a></li>
    <li><a href="videochat.html">Call the Experts</a></li>
    
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Information</a>
              <ul class-"dropdown-menu">
                
                <li><a href="Crops.php">Crops</a></li>
                <li><a href="Vegetable.php">Vegetables</a></li>
                <li><a href="Flower.php">Flower</a></li>
                <li><a href="Fruit.php">Fruit</a></li>
             </ul>
            </li>
            
           <li><a href="land.php">Land</a>
              
            </li>
        <li><a href="AGTUBE.html">AgriTube</a></li>
        

        </ul>
      </li>
      
      
      
      <li><a href="Comments.html">Comments</a></li>
      
      <!--login signup -->
      
    <li><button class="glyphicon glyphicon-user btn btn-default login_btn" data-toggle="modal" data-target="#myModal">
    </button></li>
  
  <li><button  class="btn btn-default glyphicon glyphicon-search search_btn" data-toggle="modal" data-target="#search"></button></li>

        
      
    </ul>
    </div>
    
  
  <!-- Large modal -->

  <div class="modal fade" id="search" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal_content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal_title">Search</h4>
        </div>
        <div class="modal-body">
          <form id="searchForm" method="post">
              <fieldset>
                <input id="s" type="text" />
                <input type="submit" value="Submit" id="submitButton" />
              </fieldset>

          </form>

          <div id="resultsDiv"></div>
        
        </div>
      </div>
    </div>
  </div>
  


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration - 
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                   
                                            
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="Name" />
                                            
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Area" class="col-sm-2 control-label">
                                        Area</label>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <select class="form-control">
                                                    <option>Dhaka</option>
                                                    <option>Chittagong</option>
                                                    <option>Barishal</option>
                                                </select>
                                            </div>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Save & Continue</button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="https://www.facebook.com/" class="btn btn-primary">Facebook</a> <a href="https://mail.google.com/" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




  <!--end modal-->

  
  
</nav>
        




<!-- catagorey -->
         <section class="veg">

<div class="container text-center">    
  <div class="row">

    <div class="jumbotron">
        
      <div >
             
        <img src="img/Flower.jpg" class="img-responsive" >
      </div>
      
    </div> 
    
    <div class="col-sm-12">
    
       
      <!--php code-->


<?php
$server="localhost";
$user="root";
$password="";
$database="agri";
$db=mysqli_connect($server,$user,$password,$database);
mysqli_set_charset($db,'utf8');
$res=mysqli_query($db,"SELECT * FROM crops NATURAL JOIN crops_image WHERE catagory_name='Flower'");
 while($row=mysqli_fetch_array($res))
 {
   $image=$row['image_name'];
   $crop_name=$row['crops_name'];
     echo "
      <div class=\"row\">
        <div class=\"col-sm-3\">
          <div class=\"well\">
          <div class=\"img-responsive\">
           <img src=".$image."  >
           </div>
        </div>
        </div>
        <div class=\"col-sm-9\">
          <div class=\"well\">
          <a href=\"detail_info.php?ach=$crop_name\">".$crop_name." garden</a>
           <p>To know more about this Flower CLICK  <a href=\"detail_info.php?ach=$crop_name\">".$crop_name." </a></p>
          </div>
        </div>
      </div>";
    }
    mysqli_close($db);
?>   
    </div>

  </div>


  
</div>

</section>




  <!--end catagorey-->






<!--footer1-->
<section class="foot1">
    <!--Grid System -->
    <div class="footer1">
      <div clas="container">
        <div class="row" > 
         <div class="col-md-3" id="ROW">
          <i class="fa fa-phone"> </i> <!-- icons -->
          <h3>Ask the Experts</h3>
          <p class="style_grid"><br>You can post your problem in our website
          </p>

        </div>
        
         <div class="col-md-3" id="ROW">


          <i class="fa fa-envelope"> </i> <!-- icons -->



          <h3>Online Help</h3>
          <p class="style_grid"> 
          </p>

        </div>
         <div class="col-md-3" id="ROW">

          <i class="fa fa-vcard"> </i> <!-- icons -->

          <h3>Director </h3>
          <p class="style_grid"><br>Agriculture System is  an international NGO which showcases agricultural training videos in  local languages.  Here you can see examples of videos
          </p>

        </div>

         <div class="col-md-3" id="ROW">

          <i class="fa fa-play-circle-o"> </i> <!-- icons -->
                    <h3>AgriTube</h3>
          <p class="style_grid"><br>Agriculture System is  an international NGO which showcases agricultural training videos in  local languages.  Here you can see examples of videos,
          </p>

        </div>



      </div>
    </div><!-- end container-->
  </div><!-- end grid system -->
</section>


<section class="footer2">
    <footer class="footer-bs">
        <div class="row">
            <div class="col-md-3 footer-brand animated fadeInLeft">
                <h2>Logo</h2>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2017 All rights reserved</p>
            </div>
            <div class="col-md-4 footer-nav animated fadeInUp">
                <h4>Menu —</h4>
                <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Explores</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Advice</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 footer-social animated fadeInDown">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">RSS</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-ns animated fadeInRight">
                <h4>Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div>   
        <!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>

</section>







 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>