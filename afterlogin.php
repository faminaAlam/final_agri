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
        <link rel="stylesheet" type="text/css" href="gallery.css">
              <style>
            .log-out_btn{
              margin-top: 15px; 
              color: greenyellow!important;
             }
            #online{
                height: 50px;
                width: 150px;
                font-size: 20px;
                margin-left: 80.5%;
                margin-top: 50px;
                background: aliceblue;
            }
            #online li{
                list-style: none;
            }
            #online li a{
                text-decoration: none;
            }
        </style>
        
	</head>



	<body>

        <header >
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
      <a class="navbar-brand" href="afterlogin.php" id="A">Agriculture System</a></h1>
    </div>


    <div class="collapse navbar-collapse" id="navi">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="about_us.php">About Us</a></li>
	  <li><a href="videochat.html">Call the Expert</a></li>
		
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Information </a>
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
	
	<li><button class="glyphicon glyphicon-log-out btn btn-default log-out_btn" data-toggle="modal" data-target="#online" >
    </button></li>

      	
      
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
          <form action="search.php" id="searchForm" method="post">
          		<fieldset>
          			<input id="s" type="text" name="search" placeholder="  Search For Crops"/>
          			<input type="submit" value="Submit" id="submitButton" />
          		</fieldset>

          </form>

          <div id="resultsDiv"></div>
        
        </div>
      </div>
    </div>
  </div>
         

 <div class="modal fade" id="online" role="dialog">
       <li> <a href="logout.php">logout</a></li>    
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
                                <form action="login.php" method="post" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" name="email" required='required'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required='required'/>
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
                                <form action="regestration.php" method="post" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    
                                    <div class="col-sm-10">
                                        <div class="row">
                                            
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="name" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" required='required' placeholder="email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="" class="form-control" id="mobile" name="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" required='required' placeholder="Password" />
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="">cancel</a>
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
        <div class="head">
          <h1 img src="img/logo.png" class="heading"> <br></h1>
         </div>

</header>




<!-- About section -->
        <section class="About">
            <h2 class="text-center" id="About_h3">About Our System</h2>
            <p class="Peragraph">Agriculture System is  an international NGO which showcases agricultural training videos in  local languages.  Here you can see examples of videos, download them or  order a DVD copy.  The audio tracks can also be downloaded by radio  stations.This  is a platform for agricultural R&D staff, service providers,  extension agents, communication professionals and representatives of  farmer organisations to see what training videos are available and request new language versions.
      </p>
        </section>


        <!-- catagorey-->
<section class="catagorey">
<h2 class="text-center">About </h2>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="img/cereales.jpg">
      <h3>Crops</h3>
      <p><i class="fa fa-cog"></i>
        Cultivation<p>
        <p><i class="fa fa-cog"></i>
        Care and maintenance<p>
        <p><i class="fa fa-cog"></i>
        Soil And Environment<p>
        <p><i class="fa fa-cog"></i>
      Pratariodha diagnosis and care <p>
        


    </div>
    <div class="col-md-3">
      <img src="img/vegetable.jpg">
      <h3>Vegetables</h3>
      <p><i class="fa fa-cog"></i>
        Cultivation<p>
        <p><i class="fa fa-cog"></i>
        Care and maintenance<p>
        <p><i class="fa fa-cog"></i>
        Soil And Envirenonmt<p>
        <p><i class="fa fa-cog"></i>
      Pratariodha diagnosis and care <p>


    </div>
    <div class="col-md-3">
      <img src="img/fruits.jpg">
      <h3>Fruit</h3>
      <p><i class="fa fa-cog"></i>
        Cultivation<p>
        <p><i class="fa fa-cog"></i>
        Care and maintenance<p>
        <p><i class="fa fa-cog"></i>
        Soil And Envirenonmt<p>
        <p><i class="fa fa-cog"></i>
      Pratariodha diagnosis and care  <p>


    </div>
    <div class="col-md-3">
      <img src="img/flower.jpg">
      <h3>Flower</h3>
      <p><i class="fa fa-cog"></i>
        চCultivation<p>
        <p><i class="fa fa-cog"></i>
        Care and maintenance<p>
        <p><i class="fa fa-cog"></i>
        Soil And Environment<p>
        <p><i class="fa fa-cog"></i>
      Pratariodha diagnosis and care  <p>


    </div>
  </div>



</div><!--end container-->

</section>






<!--gallery-->
<section class="Another">

<h2 class="text-center"> Gallery </h2>

<ul class="Gallery clearfix">
       
 <li>
    <figure class="photo">
        <img src="img/rice_blast.jpg">
    </figure>
  <p><a href="https://www.youtube.com/watch?v=fxB5gjtXIR8">rice blast</a></p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/TD.jpg">
    </figure>
  <p><a href="https://www.youtube.com/watch?v=OTQPw25wl1g">New deases of tomato Buckeye rot </a></p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/mango_D.jpg">
    
    </figure>
 <p><a href="https://www.youtube.com/watch?v=64LH64NUYUI">New deases of tomato Buckeye rot </a></p>

 </li>
 <li>
    <figure class="photo">
        <img src="img/new_virus.jpg">
    </figure>
  <p ><a href="https://www.youtube.com/watch?v=jx49Xq37d7I">New virus invented by BAU </a></p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/SR.jpg">
    </figure>
 <p><a href="https://www.youtube.com/watch?v=zD6_a47Bwyo">Super Rice invented by BAU </a></p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/mango1.jpg">
    
    </figure>
<p><a href="https://www.youtube.com/watch?v=aSfU85dzkBw">Tiwani mango of 1kg </a></p>

 </li>
 <li>
    <figure class="photo">
        <img src="img/gallery1.jpg">
    </figure>
 <p><a href="https://www.youtube.com/watch?v=3Y6Tw3l8qsM">Kolom : easy way </a></p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/gallery2.jpg">
    </figure>
<p><a href="https://www.youtube.com/watch?v=z_0CDLORqRU">Thai Guava</a></p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/gallery3.jpg">
    
    </figure>
  <p><a href="https://www.youtube.com/watch?v=lVcS7a2rrvc">Roof top tomato cultivation</a></p>

 </li>
 

  <li>
    <figure class="photo">
        <img src="img/gallery4.jpg">
    </figure>
  <p><a href="https://www.youtube.com/watch?v=zD6_a47Bwyo">Soil Less Wheat Sprouts:Easy Method </a></p>
 </li>
 
 
 
 
</ul>

</section>
<!-- End Gallery -->




<!--testimonial -->



 <section class="testimonial">
        <h2 class="text-center" id="About_h3">About Us</h2>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                    <p>
                    Access Agriculture is an international NGO which showcases agricultural training videos in local languages.  Here you can see examples of videos, download them or order a DVD copy.  The audio tracks can also be downloaded by radio stations.
                    This is a platform for agricultural R&D staff, service providers, extension agents, communication professionals and representatives of farmer organisations to see what training videos are available and request new language versions.The videos are all designed to support sustainable agriculture in developing countries.
                    For maximum impact in improving opportunities for farmers explore Access Agriculture.
                    Be part of a platform for change.
                    </p>
                  </div>
               </div>
           </div>
</section>

<!--end testimonial -->




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