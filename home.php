<?php
  $bg = array('bananaback1.jpg', 'bananaback2.jpg', 'bananaback3.jpg', 'bananaback4.jpg', 'bananaback5.jpg', 'bananaback6.jpg', 'bananaback7.jpg', 'bananaback8.jpg', 'bananaback10.jpg', 'bananaback11.jpg', 'bananaback12.jpg', 'bananaback13.jpg', 'bananaback14.jpg', ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../Test/assets/ico/favicon.png">

    <title>Dragonfly</title>

    <!-- Bootstrap core CSS -->
    <link href="http://beam.la/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../Test/dist/css/carousel.css" rel="stylesheet">
  </head>
  
  <style>
  body {
background: url("<?php echo $selectedBg; ?>") no-repeat;
  height:50%;
width:100%;
background-size: 100%;
  }
   h1 {
  color:#FF3333;
  font-family:Avenir, Avenir next, Heiti SC, Nanum Gothic;
  font-size: 60px;
  }
  .nav {
  padding:15px;
  }
h4 {
color:green;
}
.header{
height:50px;
width:100%;
padding:0px;
}
.col-lg-6{
padding:20px;
}
img {
    height:200px;
    width:200px;
}
</style>
  <body>
<!-- Button trigger modal -->
<div style="padding:10px;">

<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" style="opacity:.8;">
  Static Full Dragonfly
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:90%;">
    <div class="modal-content"  style="height:97%">
      <div class="modal-header"  style="height:97%">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Dragonfly Will Be Officially Announcing All It's Features April 1st</h4>
      </div>
      <div class="modal-body">
        <iframe src="http://beam.la/modernsearchcenter.html" style="height:95% width:100%;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

   <div class="col-lg-6 col-lg-offset-3">
   
   
<a href="#" style="  text-decoration:none;" >
<div style="padding-left:21%;"><img class="text-center" style="padding-top:0px; padding-left:0%; width:350px; height:250px;" src="http://beam.la/DragonflyLogo.png" /></div>
<h3 class="text-center" style="color:red;" >dragonfly - <i>beta</i></h3>

</a>
<form action="#">
<div class="input-group">
<input placeholder="Research engine for students" type="text" class="form-control" style="background-color:rgba(255, 255, 255, .7)">

<span class="input-group-btn">
<a href="http://beam.la/DragonflyDesktop.html" style="text-decoration:none;"> <button style=" background-color:rgba(255, 255, 255, .6)" class="btn btn-default" type="button">Fly</button>  </a>

</div>
</form>
<center><div class="btn-group" style="padding:5px; color:rgba(255, 255,255, .6)">
<button type="button" class="btn btn-default" style="background-color:rgba(255, 255, 255, .6)"><a href="http://beam.la/DragonflyDesktop.html" style="color:black; text-decoration:none;">Trending</a></button>
<button type="button" class="btn btn-default center" style="background-color: rgba(255, 255, 255, .6)"><a href="http://beam.la/DragonflyDesktop.html" style="color:black; text-decoration:none;">Recommended</a></button>
</div></center>


</div>
    <div class="navbar navbar-default navbar-fixed-bottom" style="background-color: rgba(50, 50, 50, 0.7); float:bottom;">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse">
            <ul style="padding: 0px;" class="nav navbar-nav">
               <li><a href="about.html" style="color:white;">API</a></li>
              <li><a href="about.html" style="color:white;">About</a></li>
                            <li><a href="mailto:bayareastudententrepreneurs@gmail.com" style="color:white;">Contact</a></li>

              <li><a href="https://www.facebook.com/bayareastudententrepreneurs" style="color:white;">Facebook</a></li>
                            <li><a href="http://twitter.com/codingsf" style="color:white;">Twitter</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
       <script src="http://beam.la/npm.js"></script>
   <script src="http://beam.la/bootstrap.js"></script>
     <script src="http://beam.la/transition.js"></script>
     <script src="http://beam.la/collapse.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
 <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>


</div>
  </body>
</html>
